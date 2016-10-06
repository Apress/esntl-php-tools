if ($fh = fopen('/tmp/ice_cream.csv','w')) {
    $rs = $conn->Execute('SELECT * FROM ice_cream');
    rs2csvfile($rs,$fh);
    fclose($fh);
} else {
    print "Can't open /tmp/ice_cream.csv";
}
