$flavor = $conn->qstr($_REQUEST['flavor']);
$rs = $conn->execute("SELECT * FROM ice_cream WHERE flavor LIKE $flavor");
