<?php
// Load the DB code
require 'DB.php';

// Connect to the database
$dbh = DB::connect('mysql://user:password@host/database');

// Send a SELECT query to the database
$sth = $dbh->query('SELECT flavor, price, calories FROM ice_cream');

// Check if any rows were returned
if ($sth->numRows()) {
    print "<table>";
    print "<tr><th>Ice Cream Flavor</th><th>Price per Serving</th><th>Calories~CCC
 per Serving</th></tr>";
    // Retrieve each row
    while ($row = $sth->fetchRow()) {

        // And print out the elements in the row
        print "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>\n";
    }
    print "</table>";
} else {
     print "No results";
}
