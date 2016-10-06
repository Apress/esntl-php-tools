$dbh->autoPrepare('ice_cream',array('flavor','price'),DB_AUTOQUERY_UPDATE,
                             'price < 10');
