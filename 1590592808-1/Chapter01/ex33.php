$res = $dbh->getAssoc('SELECT id,flavor,price FROM ice_cream',
       null, null, DB_FETCHMODE_ASSOC);
if ($flavor = $res[$_REQUEST['flavor_id']]) {
    print "Your selected flavor is: $flavor[flavor] with price $flavor[price].";
} else {
    print "No flavor has ID $_REQUEST[flavor_id].";
}
