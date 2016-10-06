$flavor_id = $dbh->nextID('flavors',false);
if (DB::isError($flavor_id)) { die("Can't get sequence ID"); }
$dbh->query('INSERT INTO ice_cream (id,flavor) VALUES (?,?)',
            array($flavor_id,'Walnut'));
