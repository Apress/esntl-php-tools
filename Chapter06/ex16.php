$xs = XML_RPC_encode(array('apple' => 'green',
                           'lemon' => 'yellow',
                           'tie' => 'paisley'));

$xs->structreset();
while(list($k,$v) = $xs->structeach()) {
    $color = XML_RPC_decode($v);
    print "The color of $k is $color.\n";
}
