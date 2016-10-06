require 'SOAP/Server.php';
class IceCream_Server {
    var $flavors =
        array('Chocolate' => array('calories' => 10,
                                   'price' => 4.50),
              'Vanilla' => array('calories' => 20,
                                 'price' => 4.50),
              'Heavenly Hash' => array('calories' => 60,
                                       'price' => 5.95),
              'Diet Cardboard' => array('calories' => 0,
                                        'price' => 1.15));

    function isFlavor($flavor) {
        if (array_key_exists($flavor, $this->flavors)) {
            return true;
        } else {
            return false;
        }
    }
}
// Create a new SOAP_Server object
$server = new SOAP_Server;
// Tell the server about IceCream_Server and its namespace
$server->addObjectMap(new IceCream_Server,
                      'http://www.example.com/icecream');
// Tell the server to handling any incoming data
$server->service($HTTP_RAW_POST_DATA);
