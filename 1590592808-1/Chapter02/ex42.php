$rs = $conn->Execute('SELECT * FROM ice_cream');
$csv = rs2tab($rs);
