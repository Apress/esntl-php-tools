$flavor_id = $dbh->nextID('flavors');
$dbh->query('INSERT INTO ice_cream (id,flavor) VALUES (?,?)',
            array($flavor_id,'Walnut'));
