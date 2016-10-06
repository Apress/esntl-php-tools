require 'SOAP/Client.php';
$wsdl = new SOAP_WSDL('http://www.webservicex.net/isbn.asmx?wsdl');
$client = $wsdl->getProxy();
$ret = $client->GetISBNInformation('0684181320');
