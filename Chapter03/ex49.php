$group[] =& HTML_QuickForm::createElement('text','first');
$group[] =& HTML_QuickForm::createElement('text','middle');
$group[] =& HTML_QuickForm::createElement('text','last');
$form->addGroup($group,'name','Your Name:');
$form->addGroupRule('name','Enter a valid name','minlength',5);
