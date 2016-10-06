$fields = array('flavor','price','id','rating');
$values = array();
foreach ($fields as $f) { $values[$f] = $_REQUEST[$f]; }
$dbh->autoExecute('ice_cream',$values,DB_AUTOQUERY_INSERT);
