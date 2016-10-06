$row = $dbh->getRow('SELECT flavor,price FROM ice_cream WHERE id = ?', 
                    array($id));
