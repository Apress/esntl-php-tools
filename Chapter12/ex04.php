xdebug_start_trace();
function letter() { $GLOBALS['letter']++; }
function something_else() { $GLOBALS['something_else']++; }
$phrase = "Is 5 OK?";
for ($i = 0, $j = strlen($phrase); $i < $j; $i++) {
    if (preg_match('/[[:alpha:]]/', $phrase{$i})) {
        letter();
    } else {
        something_else();
    }
}
print "Letters: $letter, Other: $something_else\n";
$trace = xdebug_get_function_trace();
$functions_called = array();
// Count up each function call
foreach ($trace as $function_call) {
    $functions_called[$function_call['function']]++;
}
// Display the results
foreach ($functions_called as $function => $count) {
    print "Function $function() called $count time(s).\n";
}
