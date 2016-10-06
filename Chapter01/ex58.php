$dbh = DB::Connect('mysql://test:@localhost/test');
DB::isError($dbh) and die("Can't connect: ".$dbh->getMessage());
$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
DB::isError($sth) and die("Can't SELECT: ".$sth->getMessage());
while($res = $sth->fetchRow()) {
    DB::isError($res) and die("Can't get row: ".$res->getMessage());
    print "Flavor: $res[0], Price: $res[1]\n";
}
