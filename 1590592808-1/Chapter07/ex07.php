require 'SOAP/Client.php';
$client = new SOAP_Client('http://webservices.instantlogic.com/zipcodes.ils');
$options = array('namespace' => 'http://www.instantlogic.com/');
$args = array('Zip' => '19096');
$ret = $client->call('ZipCodes',$args,$options);
