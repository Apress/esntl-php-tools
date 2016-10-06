$res = $dbh->query('CREATE TABLE ice_cream (flavor VARCHAR(255),
                    price DECIMAL(6,2), calories INT)');
$res = $dbh->query('ALTER TABLE ice_cream ADD flavor_id INT UNSIGNED NOT NULL');
$res = $dbh->query('DROP TABLE ice_cream');

