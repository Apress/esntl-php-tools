// use $_REQUEST in the cache key
mmcache_cache_page($_SERVER['PHP_SELF'] . serialize($_REQUEST));

// use $_GET, a cookie value, and the user_agent string
$cache_key_info = array($_GET, $_COOKIE['user_id'],
                        $_SERVER['HTTP_USER_AGENT']);
mmcache_cache_page($_SERVER['PHP_SELF'] . serialize($cache_key_info);
