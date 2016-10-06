$flavors= $dbh->getAssoc('SELECT id,flavor FROM ice_cream');
print '<select name="flavor">';
foreach ($flavors as $id => $flavor) {
    print "<option value=\"$id\">$flavor</option>";
}
print '</select>';
