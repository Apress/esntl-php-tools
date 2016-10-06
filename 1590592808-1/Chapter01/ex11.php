$dbh->setFetchMode(DB_FETCHMODE_OBJECT);
$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
$row = $sth->fetchRow();
// Prints out the first retrieved row
print "Flavor: $row->flavor, Price: $row->price\n";
$row = $sth->fetchRow();
// Prints out the second retrieved row
print "Flavor: $row->flavor, Price: $row->price\n";
