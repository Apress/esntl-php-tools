require 'DB.php';
// connect to the database
$dbh = DB::connect('mysql://phpgems:phpgems1@localhost/phpgems');
// we want our results back as associative arrays
$dbh->setFetchMode(DB_FETCHMODE_ASSOC);
// was a search term specified?
if ($_REQUEST['search_term']) {
    // make the search term accessible from the template -- we escape it
    // to avoid any XSS attacks
    $smarty->assign('search_term', htmlentities($_REQUEST['search_term']));
    // retrieve all rows from the ice_cream table where flavor contains
    // the search term
    $ice_cream = $dbh->getAll('SELECT * FROM ice_cream WHERE flavor LIKE ?',
                              array('%'.$_REQUEST['search_term'].'%'));
} else {
    // no search term, so retrieve all rows
    $ice_cream = $dbh->getAll('SELECT * FROM ice_cream');
}
// make the ice cream data accessible from the template
$smarty->assign('flavors',$ice_cream);
// display the template
$smarty->display('show-icecream.tpl');
