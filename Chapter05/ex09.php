function calorie_sort($a, $b) {
    return $a['CALORIES'] > $b['CALORIES'];
}

uasort($parser->ice_cream, 'calorie_sort');

foreach ($parser->ice_cream as $id => $data) {
    printf("%2d %-15s %3d \$%.02f\n",
           $id, $data['NAME'], $data['CALORIES'], $data['PRICE']);
}
