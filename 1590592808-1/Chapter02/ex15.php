PEAR::setErrorHandling(PEAR_ERROR_DIE);
$rs = $conn->execute('SELECT flavor,calories,price FROM cookies');
