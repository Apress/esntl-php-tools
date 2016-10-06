require 'SOAP/Client.php';
$wsdl = new SOAP_WSDL('http://webservices.instantlogic.com/zipcodes.ils?wsdl');
$client = $wsdl->getProxy();
$ret = $client->ZipCodes('19096');
