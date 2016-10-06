$flavor = $dbh->getOne('SELECT flavor FROM ice_cream ORDER BY price DESC LIMIT 1');
if (is_null($flavor)) {
    print "We don't have any ice cream!";
} else {
   print "Our most expensive flavor is $flavor.";
}
