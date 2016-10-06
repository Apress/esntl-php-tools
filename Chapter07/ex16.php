require 'SOAP/Client.php';
$client = new SOAP_Client('http://www.example.com/soap-4.php');
$options = array('namespace' => 'http://www.example.com/icecream');
$args = array('Chocolate');
if ($client->call('isFlavor',$args,$options)) {
    print "Chocolate is a valid flavor.";
} else {
    print "Chocolate is not a valid flavor.";
}
