function compare_firstlast($element_name,$element_value) {
    $len = strlen($element_value);
    // If the string is empty, then return false
    if ($len == 0) { return false; }
    $first_letter = $element_value{0};
    $last_letter = $element_value{$len-1};
    if ($first_letter == $last_letter) {
        return true;
    } else {
        return false;
    }
}
$form->registerRule('same_firstandlast','function','compare_firstlast');
$form->addRule('user_name','The first and last letters must be the same',
               'same_firstandlast');
