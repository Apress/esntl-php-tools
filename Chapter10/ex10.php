require 'Auth/Auth.php';
$opts = array('table' => 'users',
              'dsn' => 'mysql://phpgems:phpgems1@localhost/phpgems');
$a = new Auth('DB',$opts);
$a->setShowLogin(false);
$a->start();
// Everyone gets welcomed
print "Welcome, ";
// Greet the user appropriately
if ($a->getAuth()) { 
    print "logged-in user!";
} else {
    print "guest.";
}
