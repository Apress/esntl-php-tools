$form->registerRule('us_zip','regex','/^\d{5}(-\d{4})?$/');
$form->addRule('zip','Enter a valid US ZIP code','us_zip');
