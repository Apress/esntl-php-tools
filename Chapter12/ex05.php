function check_input($var_name) {
    $len = strlen($GLOBALS[$var_name]);
    if (($len > 0) && ($len < 13)) {
        return true;
    } else {
        return false;
    }
}
function show_output($var_name) {
    print "$var_name --> " . $GLOBALS[$var_name] . "\n";
    $stack = xdebug_get_function_stack();
    print_r($stack);
}
function process_vars() {
    $vars = array('name');
    foreach ($vars as $var) { 
        if (check_input($var)) {
            show_output($var);
        }
    }
}
$name = 'Ireneo Funes';
process_vars();
