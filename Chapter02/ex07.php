$rs = $conn->execute('SELECT flavor,calories,price FROM ice_cream');
// Just retrieve three rows
$rows = $rs->GetArray(3);
