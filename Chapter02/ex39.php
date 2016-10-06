// Cache this recordset for 10 seconds
$rs = $conn->CacheExecute(10,'SELECT flavor, price, calories FROM ice_cream');
