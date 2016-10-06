// use the default method (POST), but change the action URL
$form = new HTML_QuickForm('myform','','/store/purchase.php');
// submit the form to a new blank window, but use the default method and URL
$form = new HTML_QuickForm('myform','','','_blank');
