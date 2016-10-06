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
print "Letters: $letter, Other: $something_else";
xdebug_dump_function_trace();
