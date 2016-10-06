$pager1 = new ADODB_Pager($conn,"SELECT id,flavor,calories,price FROM 
ice_cream_big",'big');
$pager1->Render(5);

$pager2 = new ADODB_Pager($conn,"SELECT id,flavor,calories,price FROM
 ice_cream", 'little');
$pager2->Render(2);
