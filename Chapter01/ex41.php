$dbh->autoPrepare('ice_cream',array('flavor','price'),DB_AUTOQUERY_INSERT);
$dbh->prepare("INSERT INTO ice_cream ('flavor','price') VALUES (?,?)");
