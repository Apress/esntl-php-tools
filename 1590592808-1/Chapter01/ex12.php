$sth = $dbh->query('SELECT flavor,price FROM ice_cream');
if (DB::isError($sth)) {
    print "Error!";
} else {
    // display results
}
