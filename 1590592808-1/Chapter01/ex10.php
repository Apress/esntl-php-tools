$dbh->setFetchMode(DB_FETCHMODE_ORDERED);
$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
$row = $sth->fetchRow();
// Prints out the first retrieved row
print "Flavor: $row[0], Price: $row[1]\n";
$row = $sth->fetchRow();
// Prints out the second retrieved row
print "Flavor: $row[0], Price: $row[1]\n";
