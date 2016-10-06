$row = $dbh->getRow('SELECT flavor,price FROM ice_cream WHERE id = ?',
                    array($id),DB_FETCHMODE_OBJECT);
print "Flavor: $row->flavor, Price: $row->price";
