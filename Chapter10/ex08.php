function print_hidden_vars($ar, $prefix = null) {
    // If an array prefix is passed in, format it properly
    // for hidden element naming and set $suffix
    if (! is_null($prefix)) {
        $prefix = htmlentities($prefix) . '[';
        $suffix = ']';
    } else {
        $prefix = $suffix = null;
    }
    // Iterate through the array
    foreach ($ar as $key => $value) {
        // Skip this array element if we're not iterating through a 
        // sub array (i.e. we're in $_GET or $_POST) and the element name
        // is "username" or "password"
        if (is_null($prefix) && (($key === 'username') ||
                                 ($key === 'password'))) {
            continue;
        }
        // If this array element is itself an array, recurse into it with
        // a proper hidden element name prefix
        if (is_array($value)) {
            print_hidden_vars($value, $prefix . htmlentities($key) . $suffix);
        } else {
            // If this array element is not an array, print out a hidden
            // element form tag with the appropriate name and value
            print '<input type="hidden" name="' .
                $prefix . $key . $suffix . '" value="' .
                htmlentities($value) . '"/>';
        }
    }
}
