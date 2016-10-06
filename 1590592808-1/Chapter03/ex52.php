// subject is required and must be at least 5 characters
$form->addRule('subject','Enter a valid subject','required',null,'client');
$form->addRule('subject','Enter a valid subject','minlength',5,'client');
