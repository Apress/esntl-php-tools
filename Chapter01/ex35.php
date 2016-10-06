$res = $dbh->query('SELECT flavor FROM ice_cream WHERE price < 5');
if ($res->numRows() > 0) {
    print "Your choices: <ul>";
    while($row = $res->fetchRow()) { print "<li> $row[0]</li>"; }
    print "</ul>";
} else {
   print "No flavors available for less than five dollars.";
}
