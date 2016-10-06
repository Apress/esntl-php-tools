// Get inexpensive ice cream
$rs = $conn->CacheExecute(10, 'SELECT flavor FROM ice_cream WHERE price < ?',
                           array(4));
// Purge the query from the cache
$conn->CacheFlush('SELECT flavor FROM ice_cream WHERE price < ?',array(4));
