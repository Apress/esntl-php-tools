// We can't use XML_RPC_encode() to construct the array because
// XML_RPC_encode() turns PHP arrays into XML-RPC structs
$xar = new XML_RPC_Value(array(new XML_RPC_Value('clover'),
                               new XML_RPC_Value('wildflower'),
                               new XML_RPC_Value('daisy')), 'array');

for($i = 0, $j = $xar->arraysize(); $i < $j; $i++) {
    $el = $xar->arraymem($i);
    $flower = XML_RPC_decode($el);
    print "Element $i is $flower.\n";
}
