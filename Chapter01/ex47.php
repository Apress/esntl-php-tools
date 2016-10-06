$prh = $dbh->prepare('INSERT INTO ice_cream (flavor,price) VALUES (?,?)');
$dbh->execute($prh, array('Blueberry',3.00));
