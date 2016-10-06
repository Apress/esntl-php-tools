$sma = apc_sma_info();
echo '<h2>APC Shared Memory Information</h2>';
echo '<ul>';
echo '<li>Number of Segments: '         . $sma['num_seg'] . '</li>';
echo '<li>Segment Size: '               . $sma['seg_size'] . '</li>';
echo '<li>Available Memory (bytes): '   . $sma['avail_mem'] . '</li>';
printf('<li>Available Memory (%%): %.2f%%</li>',
       $sma['avail_mem'] / ($sma['num_seg'] * $sma['seg_size']) * 100);
echo '</ul>';
echo '<h2>Shared Memory Segment Information</h2>';
echo '<ul>';
foreach ($sma['block_lists'] as $i => $block_list) {
    echo "<li> Segment #$i </li>";
    echo '<ul>';
    foreach ($block_list as $j => $block) {
        echo "<li> Block $j </li>";
        echo '<ul>';
        echo "<li> Size: $block[size] </li>";
        echo "<li> Offset: $block[offset] </li>";
        echo '</ul>';
    }
    echo '</ul>';
}
echo '</ul>';
