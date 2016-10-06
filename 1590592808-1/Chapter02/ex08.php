$rs = $conn->execute('SELECT flavor,calories,price FROM ice_cream');
$rows = $rs->GetAssoc();
