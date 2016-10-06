$dbh->prepare('UPDATE ice_cream SET flavor = ?, price = ? WHERE price < 10');
