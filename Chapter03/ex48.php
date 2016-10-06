$form->addElement('text','name','Name:');
$form->registerRule('emaildomain','regex','/@(%data%)$/');
$form->addRule('name','Enter an e-mail address from the example.org domain',
               'emaildomain','example.org');
