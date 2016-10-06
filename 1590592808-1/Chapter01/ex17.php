$flavor = $dbh->quote($_REQUEST['flavor']);
$dbh->query("SELECT * FROM ice_cream WHERE flavor LIKE $flavor");
