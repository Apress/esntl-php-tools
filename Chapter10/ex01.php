require 'Auth/Auth.php';
$opts = array('table' => 'users',
              'dsn' => 'mysql://phpgems:phpgems1@localhost/phpgems');
$a = new Auth('DB',$opts);
$a->start();
if (! $a->getAuth()) {
    // the user isn't logged in, so don't show them anything else
    exit();
}
// Anything past here is shown to only those users who are successfully logged in
