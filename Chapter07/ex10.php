require 'SOAP/Client.php';
$wsdl = new SOAP_WSDL('http://www.example.com/soap-2.php?wsdl');
$client = $wsdl->getProxy();
$header = new SOAP_Header('{http://www.example.com/icecream/headers}token',
                          'string',
                          md5('secret token'));
$client->addHeader($header);
$ret = $client->getFlavor('Chocolate');
