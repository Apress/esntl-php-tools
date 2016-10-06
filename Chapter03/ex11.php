$element =& HTML_QuickForm::createElement('text','last_name','Last Name:');
$element->setSize(10); // Render the element as ten characters wide
$element->setMaxlength(30); // Allow no more than 30 characters of input
$form->addElement($element);
