$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
$sth->fetchInto($row,DB_FETCHMODE_ASSOC);
// Prints out the first retrieved row
print "Flavor: $row[flavor], Price: $row[price]\n";
// Prints out the second retrieved row
$sth->fetchInto($row,DB_FETCHMODE_OBJECT);
print "Flavor: $row->flavor, Price: $row->price\n";
