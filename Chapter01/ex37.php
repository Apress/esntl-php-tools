$dbh->query("UPDATE ice_cream SET price = price -– 1 WHERE flavor
             LIKE 'Chocolate%'");
print 'Discount applied to ' . $dbh->affectedRows() . ' Chocolate flavors.';
