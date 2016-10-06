require 'SOAP/Client.php';
$wsdl = new SOAP_WSDL('http://www.example.com/soap-3.php?wsdl');
$client = $wsdl->getProxy();
$client->setOpt('attachments','Mime');
$file = '/home/parlor/chocolate.gif';
$attachment = new SOAP_Attachment('picture','image/gif',$file);
$ret = $client->updatePicture('chocolate.gif',$attachment);
