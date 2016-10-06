$dbh = DB::Connect('mysql://test:@localhost/test');
DB::isError($dbh) and die($dbh->getMessage());
$dbh->setErrorHandling(PEAR_ERROR_DIE);
$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
while($res = $sth->fetchRow()) {
    print "Flavor: $res[0], Price: $res[1]\n";
}
