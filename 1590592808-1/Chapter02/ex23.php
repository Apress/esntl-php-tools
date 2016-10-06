$rs = $conn->execute('SELECT flavor,calories,price FROM ice_cream');
$gSQLBlockRows = 2;
rs2html($rs);
