mmcache_lock('guestbook');
$fh = fopen('/tmp/guestbook.txt','a') or die("Can't open guestbook");
fwrite($fh,$_REQUEST['guestbook_entry']);
fwrite($fh,"\n--\n");
fclose($fh);
mmcache_unlock('guestbook');
