$flavor = str_replace(array('%','_'),array('\%','\_'),
          $dbh->quote($_REQUEST['flavor']));
$sth = $dbh->query("SELECT * FROM ice_cream WHERE flavor LIKE $flavor");
