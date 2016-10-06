$form->addElement('text','first_name','First Name:');
$element=& $form->getElement('first_name');
// this sets $name to "first_name"
$name = $element->getName();
