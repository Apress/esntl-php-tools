mmcache_cache_page($_SERVER['PHP_SELF']);
require 'DB.php';
$dbh = DB::connect('mysql://phpgems:phpgems1@david-vm.home/phpgems');
print '<table>';
print '<tr><th>Flavor</th><th>Price</th><th>Calories</th>';
$rows = $dbh->getAll('SELECT flavor,price,calories FROM ice_cream');
foreach ($rows as $row) {
    printf('<tr><td>%s</td><td>$%.02f</td><td>%d</td></tr>',
           $row[0], $row[1], $row[2]);
}
print '</table>';
