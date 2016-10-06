require 'Auth/Auth.php';
$a = new Auth('SMBPasswd','/etc/smbpasswd');
$a->addUser('funes','forking!path', array('userid' => 27));
