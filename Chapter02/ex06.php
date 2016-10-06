$rs = $conn->execute('SELECT flavor,calories,price FROM ice_cream');
while (! $rs->EOF) {
    $ob = $rs->FetchObject();
    print "Flavor $ob->FLAVOR has $ob->CALORIES calories and costs
    print " \$$ob->PRICE.\n";
    $rs->MoveNext();
}
