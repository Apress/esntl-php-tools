// subject must be at least 5 characters and must be filled in
$form->addRule('subject','Enter a subject of at least 5 characters',
               'minlength',5);
$form->addRule('subject','Enter a valid subject','required');
