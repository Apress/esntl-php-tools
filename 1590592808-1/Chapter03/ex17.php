$s =& $form->createElement('select','animal','Animal: ');
$opts = array('dog' => 'woof', 'cat' => 'meow', 'cow' => 'moo');
$s->loadArray($opts,'cat');
$form->addElement($s);
