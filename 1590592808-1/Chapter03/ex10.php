// $form is an HTML_QuickForm object
// add the text field in one step with addElement()
$form->addElement('text','first_name','First Name:');
// create the element with createElement() and then pass it to addElement()
$element =& HTML_QuickForm::createElement('text','last_name','Last Name:');
$form->addElement($element);
