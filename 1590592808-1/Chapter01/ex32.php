$res = $dbh->getAssoc('SELECT id,flavor,price FROM ice_cream WHERE price > ?',
true,array($_REQUEST['min_price']));
if ($flavor = $res[$_REQUEST['flavor_id']]) {
    print "Your selected flavor is: $flavor[0] with price $flavor[1].";
} else {
    print "No flavor has ID $_REQUEST[flavor_id].";
}
