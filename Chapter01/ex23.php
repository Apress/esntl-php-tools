$row = $dbh->getRow('SELECT flavor,price FROM ice_cream WHERE id = 56');
print "Flavor: $row[0], Price: $row[1]";
