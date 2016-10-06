// Load the PHP source code
$s = file_get_contents($argv[1]);
// Compute all of the tokens in the code
$tokens = token_get_all($s);
// Initialize token count 
$i = 1;
foreach ($tokens as $token) {
    printf('%3d: ',$i);
    if (is_array($token)) {
        // $token[1] is the token content, we'll replace whitespace
        // to make it more readable
        $t_content = str_replace(array("\n",' ',),array('{NL}','{SP}'),
                                 $token[1]);
        // Print the symbolic token name and the content
        printf("%12s %s\n",token_name($token[0]), $t_content);
    } else {
        // Print the simple token string
        print "simple token $token\n";
    }
    $i++;
}
