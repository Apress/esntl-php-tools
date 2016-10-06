require 'SOAP/Server.php';
// A real authentication server wouldn't use a hardcoded
// list of users and passwords like this, but instead get
// the info from an external source like a database
$users = array('funes'  => '7asdfh23',
               'bioy'   => 'J2hy287',
               'jvmoon' => '&#b12y',
               'villar' => 'ju@^216');
class Auth_Server {
    var $__dispatch_map = array();
    function Auth_Server() {
        // verify_user() takes the username and password as
        // arguments and returns an int if the password is OK.
        // Otherwise, it returns a fault
        $this->__dispatch_map['verify_user'] =
            array('in' => array('username' => 'string',
                                'password' => 'string'),
                  'out' => array('is_ok' => 'int'));
        // get_password() returns a struct containing the 
        // stored password
        $this->__dispatch_map['get_password'] =
            array('in' => array('username' => 'string',
                                'password' => 'string'),
                  'out' => array('password_struct' => 'struct'));
    }
    // Compare the supplied password to the stored password
    // for $username and return a SOAP_Value or a SOAP_Fault
    function verify_user($username, $password) {
        if (isset($GLOBALS['users'][$username]) &&
            $GLOBALS['users'][$username] == $password) {
            return new SOAP_Value('is_ok','int',1);
        } else {
            return new SOAP_Fault('Bad username/password','Client');
        }
    }
    // If the supplied user exists, return the stored password
    // The SOAP Auth container expects the password to be in
    // a struct element called "password", not just in a plain string
    function get_password($username,$password) {
        if (isset($GLOBALS['users'][$username])) {
            $s = new SOAP_Value('password','string',
                                $GLOBALS['users'][$username]);
            return new SOAP_Value('password_struct', 'struct',
                                  array('password' => $s));
        } else {
            return SOAP_Fault('No such user','Client');
        }
    }
}
// The standard server setup stuff
$server = new SOAP_Server;
$soapclass = new Auth_Server;
$server->addObjectMap($soapclass,'urn:Auth_Server');
if (isset($_SERVER['REQUEST_METHOD']) &&
    $_SERVER['REQUEST_METHOD']=='POST') {
    $server->service($HTTP_RAW_POST_DATA);
} else {
    require_once 'SOAP/Disco.php';
    $disco = new SOAP_DISCO_Server($server,'Auth_Server');
    header("Content-type: text/xml");
    if (isset($_SERVER['QUERY_STRING']) &&
       strcasecmp($_SERVER['QUERY_STRING'],'wsdl')==0) {
        echo $disco->getWSDL();
    } else {
        echo $disco->getDISCO();
    }
    exit;
}
