require 'SOAP/Client.php';
$wsdl = new SOAP_WSDL('http://www.example.com/soap-6.php?wsdl');
$client = $wsdl->getProxy();
$flavors = $client->comparePrices('Heavenly Hash','Chocolate');
print "$flavors[0] costs less than $flavors[1].";
