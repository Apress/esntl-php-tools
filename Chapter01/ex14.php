$sth = $dbh->query('SELECT * FROM ice_cream WHERE flavor LIKE ?',
     array($_REQUEST['flavor']));

