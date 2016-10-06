$dbh = DB::Connect('mysql://user:pwd@localhost/dbname');
if (DB::isError($dbh)) { die("Can't connect: ".$dbh->getMessage()); }
$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
if (DB::isError($dbh)) { die("Can't SELECT: ".$sth->getMessage()); }
while($res = $sth->fetchRow()) {
    if (DB::isError($res)) { die("Can't get row: ".$res->getMessage()); }
    print "Flavor: $res[0], Price: $res[1]";
}
