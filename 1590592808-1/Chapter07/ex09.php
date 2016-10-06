require 'SOAP/Client.php';
$wsdl = new SOAP_WSDL('http://www.example.com/soap.php?wsdl');
$client = $wsdl->getProxy();
$ret = $client->getFlavor('Trout');
if (PEAR::isError($ret)) {
    print "Can't get flavor information: " . $ret->getMessage();
} else {
    print "Calories: $ret->calories, Price: $ret->price";
}
