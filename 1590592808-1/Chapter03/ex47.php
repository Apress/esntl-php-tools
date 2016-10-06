$form->addElement('text','password','Password:');
$form->addElement('text','password2','Password (again):');
$form->registerRule('compare','function','compare_field');
$form->addRule('password','Passwords do not match','compare','password2');
function compare_field($element,$value,$arg) {
    global $form;
    if ($value == $form->getElementValue($arg)) {
        return true;
    } else {
        return false;
    }
}
