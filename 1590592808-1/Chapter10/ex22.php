require 'Auth/HTTP.php';
$opts = array('table' => 'users',
              'dsn' => 'mysql://phpgems:phpgems1@localhost.home/phpgems');
$a = new Auth_HTTP('DB',$opts);
$a->setRealm('The Labyrinth');
$a->start();
if (! $a->getAuth()) {
    // the user isn't logged-in, so don't show them anything else
    exit();
}
// Anything past here is shown only to those users who are successfully
// logged in
