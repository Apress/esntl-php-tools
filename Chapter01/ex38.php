$prh = $dbh->prepare('INSERT INTO ice_cream (flavor,price) VALUES (?,?)');
$dbh->execute($prh,array('Coffee',1.25));
$dbh->execute($prh,array('Pistachio',2.00));
$dbh->execute($prh,array('Caramel Pecan',1.75));
