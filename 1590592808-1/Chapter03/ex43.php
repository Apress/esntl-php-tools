// subject must be at least 5 characters
$form->addRule('subject','Enter a valid subject','minlength',5);
// subject must be between 5 and 25 characters
$form->addRule('subject','Enter a valid subject','rangelength',"5,25");
