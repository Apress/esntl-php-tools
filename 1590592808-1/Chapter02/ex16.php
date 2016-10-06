PEAR::setErrorHandling(PEAR_ERROR_CALLBACK,'check_errors');
$rs = $conn->execute('SELECT flavor,calories,price FROM cookies');
function check_errors($err) {
    error_log('Query Error: '.$err->getMessage());
}
