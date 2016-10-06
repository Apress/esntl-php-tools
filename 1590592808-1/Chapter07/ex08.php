require 'SOAP/Client.php';
$client = new SOAP_Client('http://webservices.instantlogic.com/zipcodes.ils');
$options = array('namespace' => 'http://www.instantlogic.com/',
                 'trace' => true);
$args = array('Zip' =>
              new SOAP_Value('Zip','string','19096'));
$ret = $client->call('ZipCodes',$args,$options);
print $client->__get_wire();
