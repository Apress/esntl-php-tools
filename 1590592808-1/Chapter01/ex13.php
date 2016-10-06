$sth = $dbh->query('SELECT * FROM frozen_yogurt');
if (DB::isError($sth)) {
    print $sth->getMessage() . "\nDetails: " . $sth->getUserInfo();
} else {
    // display results
}
