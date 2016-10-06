$res = $dbh->getAssoc('SELECT flavor,price FROM ice_cream');
print "A serving of Heavenly Hash costs: ".$res['Heavenly Hash']
