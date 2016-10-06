require 'Auth/Auth.php';
$a = new Auth('File','/etc/passwd');
$a->addUser('funes','forking!path', array('cvsuser' => 'villar'));
