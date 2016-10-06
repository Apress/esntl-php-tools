$cache = apc_cache_info();
echo '<h2>APC Cache Information</h2>';
echo '<ul>';
echo '<li>Allocated Cache Slots: ' . $cache['num_slots'] . '</li>';
echo '<li>Cache Hits: '            . $cache['num_hits'] . '</li>';
echo '<li>Cache Misses: '          . $cache['num_misses'] . '</li>';
printf("<li>Cache Hit Rate: %.2f%%</li>",
       $cache['num_hits']/($cache['num_hits'] + $cache['num_misses'])*100);
echo '</ul>';
echo '<h2>Cache Slot Information</h2>';
echo '<ul>';
if (count($cache['cache_list'])) {
    foreach ($cache['cache_list'] as $file) {
        print_file_info($file);
    }
} else {
    echo '<li>No files cached</li>';
}
echo '</ul>';
echo '<h2>Deleted List Information</h2>';
echo '<ul>';
if (count($cache['deleted_list'])) {
    foreach ($cache['deleted_list'] as $file) {
        print_file_info($file);
    }
} else {
    echo '<li>No files on deleted list</li>';
}
echo '</ul>';
function print_file_info($file) {
    echo '<li> File: ' . $file[filename] . '</li>';
    echo '<ul>';
    echo '<li> Hits: ' . $file['num_hits'] . '</li>';
    echo '<li> Created On: ' . strftime('%c',$file['creation_time']) . '</li>';
    echo '<li> Last Modified: ' . strftime('%c',$file['mtime']) . '</li>';
    if ($file['deletion_time']) {
        echo '<li> Marked for Deletion At: ' . 
            strftime('%c',$file['deletion_time']) . '</li>';
    }
    if ($file['ref_count']) {
        echo '<li>Processes Currently Using This File: ' .
            $file['ref_count'] . '</li>';
    }
    echo "<li>Device/Inode: $file[device]/$file[inode] </li>";
    echo '</ul>';
}
