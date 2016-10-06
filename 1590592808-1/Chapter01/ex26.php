$results = $dbh->getAll('SELECT flavor,price FROM ice_cream');
foreach($results as $row) {
    print "Flavor: $row[0], Price: $row[1]<br>";
}
