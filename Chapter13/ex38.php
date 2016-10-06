print strftime('%c <br>');
mmcache_cache_page($_SERVER['PHP_SELF'], 10);
print strftime('%c');
