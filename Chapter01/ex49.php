$prh = $dbh->prepare('UPDATE ice_cream SET flavor = ?, price = ?');
$dbh->execute($prh, array('Blueberry',3.00));
