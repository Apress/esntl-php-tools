$pager = new ADODB_Pager($conn,"SELECT id,flavor,calories,price FROM 
ice_cream_big");
$pager->Render();
