xdebug_start_profiling();
$dbh = mysql_connect('localhost','phpgems','phpgems1');
mysql_select_db('phpgems');
$res = mysql_query('SELECT * FROM ice_cream');
while ($ob = mysql_fetch_object($res)) {
    print_flavor($ob);
}
function print_flavor($ob) {
    printf("%s (%d calories): $%.2f<br>", $ob->flavor, $ob->calories, $ob->price);
}
xdebug_dump_function_profile();
