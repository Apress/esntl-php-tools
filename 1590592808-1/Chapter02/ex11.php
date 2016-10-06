$conn->debug = 1;
$rs = $conn->execute('SELECT flavor,calories,price FROM cookies');
if (! $rs) { print "Query Error"; }
