$rs = $conn->execute('SELECT flavor,calories,price FROM ice_cream');
foreach ($rs as $index => $row) {
    printf("Row %d is %s, calories = %d, price = \$%.02f\n",
           $index, $row['flavor'], $row['calories'], $row['price']);
}
