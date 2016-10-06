$desserts = array('ice_cream' => 1, 'frozen_yogurt' => 1, 'sorbet' => 1);
if ($desserts[$_REQUEST['dessert']]) {
    $dbh->query('INSERT INTO ! (flavor) VALUES (?)', array($_REQUEST['dessert'], $_REQUEST['flavor']));
} else {
    print "No such dessert.";
}
