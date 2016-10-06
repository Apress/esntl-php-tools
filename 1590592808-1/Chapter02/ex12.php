require 'adodb/adodb-errorhandler.inc.php';
// ... establish connection to the database ...…
$rs = $conn->execute('SELECT flavor,calories,price FROM cookies');
