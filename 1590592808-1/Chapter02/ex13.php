set_error_handler('check_errors');
$rs = $conn->execute('SELECT flavor,calories,price FROM cookies'); 
function check_errors($errno, $error, $file, $line) {
    error_log("ADODB Error: $error");
}
