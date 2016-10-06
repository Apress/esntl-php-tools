$sql = PivotTableSQL($conn,
                     'eaters, ice_cream, orders',
                     'name',
                     array('diet' => 'calories > 0 and calories <= 20',
                           'fatty' => 'calories > 30',
                           'bland' => 'calories = 0'),
                     'eaters.id = orders.eater_id and ice_cream.id = 
orders.ice_cream_id');

$rs = $conn->execute($sql);
rs2html($rs);
