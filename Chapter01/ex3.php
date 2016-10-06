$res = $dbh->query("INSERT INTO ice_cream (flavor, price)
                   VALUES ('Chocolate',4.50)");
$res = $dbh->query("UPDATE ice_cream SET price = 5.95
                    WHERE flavor LIKE 'Vanilla'");
$res = $dbh->query("DELETE FROM ice_cream WHERE price < 2.00");
