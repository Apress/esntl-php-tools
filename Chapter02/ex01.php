// Load the ADODB code
require 'adodb/adodb.inc.php';

// Connect to the database
$conn = &ADONewConnection('mysql');
$conn->connect('localhost','phpgems','phpgems1','phpgems');

// Send a SELECT query to the database
$rs = $conn->execute('SELECT flavor, price, calories FROM ice_cream');

// Check if any rows were returned
if ($rs->RecordCount() > 0) {
    print "<table>";
    print "<tr><th>Ice Cream Flavor</th><th>Price per Serving</th><th>Calories p
er Serving</th></tr>";
    // Retrieve each row
    while (! $rs->EOF) {
        print "<tr><td>{$rs->fields[0]}</td><td>{$rs->fields[1]}</td><td>{$rs->f
ields[2]}</td></tr>\n";
        $rs->MoveNext();
    }
    print "</table>";
} else {
    print "No results";
}
