// Cache the current time for sixty seconds.
mmcache_cache_output('current_time',"print strftime('%H:%M');", 60);

// Do the same thing with mmcache_cache_result(). Since mmcache_cache_result()
// returns the cached value instead of printing it, you must print it yourself.
print mmcache_cache_result('current_time',"strftime('%H:%M');", 60);

// Make sure to pass variable names in single-quoted strings
// (or backslash-escape the dollar signs)
mmcache_cache_output('user_list','get_logged_in_users($dbh)', 120);
mmcache_cache_output('user_list',"get_logged_in_users(\$dbh)", 120);
