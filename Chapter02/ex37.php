// Load the pivot table code
require 'adodb/pivottable.inc.php';
// Load the rs2html code
require 'adodb/tohtml.inc.php';

// Connect to the database
$conn = &ADONewConnection('mysql');
$conn->connect('localhost','phpgems','phpgems1','phpgems');

// Generate the query
$sql = PivotTableSQL($conn,
                     'eaters, ice_cream, orders',
                     'ice_cream.flavor',
                     'name',
                     'eaters.id = orders.eater_id and ' .
                     'ice_cream.id = orders.ice_cream_id');

// Send the query to the database and get a record set
$rs = $conn->execute($sql);
// Display the results
rs2html($rs);
