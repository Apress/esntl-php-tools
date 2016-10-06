$prh = $dbh->prepare('SELECT flavor FROM !');
$res = $dbh->execute($prh,'frozen_yogurt');
print_flavors('Frozen Yogurt',$res);
$res = $dbh->execute($prh,'ice_cream');
print_flavors('Ice Cream',$res);
