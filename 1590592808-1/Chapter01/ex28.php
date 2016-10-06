$flavors = $dbh->getCol('SELECT flavor FROM ice_cream');
print "Our flavors: <ul> <li> " . join('<li>',$flavors) . "</ul>";
