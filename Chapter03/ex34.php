$phone[] = &HTML_QuickForm::createElement('text','areacode',null,'size="3"');
$phone[] = &HTML_QuickForm::createElement('text','exchange',null,'size="3"');
$phone[] = &HTML_QuickForm::createElement('text','last4',null,'size="4"');
$form->addGroup($phone,'phone_number','Phone: ','-');
