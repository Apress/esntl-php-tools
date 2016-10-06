require 'SOAP/Client.php';
$wsdl = new SOAP_WSDL('http://www.example.com/soap-5.php?wsdl');
$client = $wsdl->getProxy();
$ret = $client->getFlavor('Chocolate');
print "Chocolate has $ret->calories calories.";
