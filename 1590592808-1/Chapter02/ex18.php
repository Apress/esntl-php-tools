$flavor_id = $conn->genID('flavors');
$conn->Execute('INSERT INTO ice_cream (id,flavor) VALUES (?,?)',
 array($flavor_id,'Walnut'));
