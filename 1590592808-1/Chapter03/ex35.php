$meals[] =& HTML_QuickForm::createElement('radio',null,null,'Breakfast','br');
$meals[] =& HTML_QuickForm::createElement('radio',null,null,'Lunch','lu');
$meals[] =& HTML_QuickForm::createElement('radio',null,null,'Dinner','di');
$form->addGroup($meals,'meal','Meal: ','<br>');
