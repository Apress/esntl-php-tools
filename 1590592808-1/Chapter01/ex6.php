$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
$sth->fetchInto($row);
// Prints out the first retrieved row
print "Flavor: $row[0], Price: $row[1]\n";
