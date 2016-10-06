$name[] = &HTML_QuickForm::createElement('text','firstname');
$name[] = &HTML_QuickForm::createElement('text','middlename');
$name[] = &HTML_QuickForm::createElement('text','lastname');
$form->addGroup($name,'user_name','Your Name: ',' ');
