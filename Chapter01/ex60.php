$dbh = DB::Connect('mysql://test:@localhost/test');
DB::isError($dbh) and die($dbh->getMessage());
$dbh->setErrorHandling(PEAR_ERROR_CALLBACK,'db_error');
$sth = $dbh->query('SELECT flavor_name,price FROM ice_cream');
while($res = $sth->fetchRow()) {
    print "Flavor: $res[0], Price: $res[1]\n";
}
function db_error($err_obj) {
    print "Error! [$err_obj->code] $err_obj->userinfo";
}
