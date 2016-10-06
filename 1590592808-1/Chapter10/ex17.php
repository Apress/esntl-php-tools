require 'Auth/Auth.php';
$opts = array('table' => 'users',
              'dsn' => 'mysql://phpgems:phpgems1@localhost/phpgems');
$a = new Auth('DB',$opts);
$a->addUser('funes','forking!path', array('full_name' => 'Ireneo Funes',
                                          'job' => 'Plumber'));
