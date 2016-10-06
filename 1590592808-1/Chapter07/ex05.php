require 'SOAP/Client.php';
require 'WebService_ISBN_ISBNSoap.php';
$client = new WebService_ISBN_ISBNSoap();
$ret = $client->GetISBNInformation('0684181320');
