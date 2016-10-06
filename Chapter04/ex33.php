$flavors = array(array('name' => 'Vanilla',
                       'calories' => 20,
                       'price' => 4.25),
                 array('name' => 'Chocolate',
                       'calories' => 30,
                       'price' => 4.50),
                 array('name' => 'Strawberry',
                       'calories' => 30,
                       'price' => 3.50),
                 array('name' => 'Salmon Butter',
                       'calories' => 200,
                       'price' => 9.44),
                 array('name' => 'Guava Mint Bouillon',
                       'calories' => 50,
                       'price' => 3.75));
$smarty->assign('flavors',$flavors);
$smarty->display('section.tpl');
