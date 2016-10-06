require 'adodb/tohtml.inc.php';
// Assume $conn is a valid database connection
$rs = $conn->execute('SELECT flavor,calories,price FROM ice_cream');
rs2html($rs);
