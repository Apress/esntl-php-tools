$pager = new ADODB_Pager($conn,"SELECT id,flavor,calories,price FROM 
ice_cream_big",'big',true);
$pager->Render(3);
