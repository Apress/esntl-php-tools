require 'Auth/Auth.php';
$a = new Auth('File','/etc/passwd');
$a->addUser('funes','forking!path',
            '500:500:Ireneo Funes:/home/funes:/bin/bash');
