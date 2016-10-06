$res = $dbh->query('SELECT * FROM ice_cream');
print 'There are '.$res->numCols().' columns in the ice_cream table.';
print '<table>';
while($row = $res->fetchRow()) {
    print '<tr>';
    foreach ($row as $val) { print "<td>$val</td>"; }
    print '</tr>';
}
print '</table>';
