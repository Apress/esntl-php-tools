$prh = $dbh->prepare('UPDATE ice_cream SET flavor = ?, price = ? WHERE id = 23');
$dbh->execute($prh, array('Blueberry',3.00));
