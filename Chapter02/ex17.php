require 'adodb/adodb-exceptions.inc.php';
try {
    $conn = &ADONewConnection('mysql');
    $conn->Connect('localhost','phpgems','phpgems1','phpgems');
    $rs = $conn->execute('SELECT flavor,calories,price FROM cookies');
    print "hi";
} catch (ADODB_Exception $e) {
    print 'Database Error: '.$e->getMessage();
} catch (Exception $e) {
    print "Something else went wrong: ".$e->getMessage();
}
