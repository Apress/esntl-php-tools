$sql = 'SELECT * FROM ice_cream WHERE flavor LIKE ?';
// Get information about Chocolate
$rs = $conn->execute($sql,array('Chocolate'));
// Get information about Vanilla
$rs = $conn->execute($sql,array('Vanilla'));
