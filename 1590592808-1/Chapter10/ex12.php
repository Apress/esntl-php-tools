require 'Auth/Auth.php';
$opts = array('table' => 'users',
              'dsn' => 'mysql://phpgems:phpgems1@localhost/phpgems');
$a = new Auth('DB',$opts);
// This auth session lasts one day from when the user logs in
$a->setExpire(86400);
// The user can't be idle for more than an hour
$a->setIdle(3600);
$a->start();
