$dom = new domDocument;
$root = $dom->appendChild(new domElement('flavor'));
$root->setAttribute('id',6);
$root->appendChild(new domElement('name','Chocolate'));
$root->appendChild(new domElement('calories',10));
$root->appendChild(new domElement('price','4.50'));
$sxe = simplexml_import_dom($dom);
