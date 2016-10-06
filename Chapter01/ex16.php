$dbh->query("INSERT INTO dessert_pictures (flavor,image) VALUES (?,&)",
                     array('Rum Raisin','rum-raisin.jpeg'));
