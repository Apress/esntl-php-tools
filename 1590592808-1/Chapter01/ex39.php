$prh = $dbh->prepare('INSERT INTO ! (flavor,price,image) VALUES (?,?,&)');
$dbh->execute($prh,array('frozen_yogurt','Tofu Health Crunch',2.50,
                         'yogurt-tofu-crunch.jpg'));
$dbh->execute($prh,array('ice_cream','Vanilla',1.40,'delicious-vanilla.jpg'));
