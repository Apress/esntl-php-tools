require 'adodb/adodb-errorpear.inc.php';
// ... establish a connection to the database ...
$rs = $conn->execute('SELECT flavor,calories,price FROM cookies');
if (! $rs) {
    $err = ADODB_PEAR_Error();
    error_log('Query Error: '.$err->getMessage());
}
