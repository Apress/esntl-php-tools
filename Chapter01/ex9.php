$dbh->setFetchMode(DB_FETCHMODE_ASSOC);
$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
$row = $sth->fetchRow();
// Prints out the first retrieved row
print "Flavor: $row[flavor], Price: $row[price]\n";
// Prints out the second retrieved row
$row = $sth->fetchRow();
print "Flavor: $row[flavor], Price: $row[price]\n";
