require 'Auth/Auth.php';
$opts = array('endpoint' => 'http://www.example.com/soap-auth-server.php',
              'namespace' => 'urn:Auth_Server',
              'method' => 'verify_user',
              'encoding' => 'utf-8',
              'usernamefield' => 'username',
              'passwordfield' => 'password',
              'matchpasswords' => false);
$a = new Auth('SOAP',$opts);
$a->start();
if (! $a->getAuth()) {
    // the user isn't logged in, so don't show them anything else
        exit();
}
// Anything past here is shown to only those users who are successfully
// logged in
