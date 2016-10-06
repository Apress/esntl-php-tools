$form = new HTML_QuickForm('info');

// Add a Header for formatting
$form->addHeader('Enter Your Information');

// Create an element group of three textboxes for phone number
$phone[] = &HTML_QuickForm::createElement('text','areacode',null,'size="3"');
$phone[] = &HTML_QuickForm::createElement('text','exchange',null,'size="3"');
$phone[] = &HTML_QuickForm::createElement('text','last4',null,'size="4"');

// Add the group with a separator of "-"
$form->addGroup($phone,'phone_number','Phone: ','-');

// Add rules for phone number parts: each is required and must be
// specific lengths
$form->addGroupRule('phone_number',
                    array(array(array('Area code is required', 'required'),
                                array('Area code must be 3 numbers',
                                      'rangelength','3,3')),
                          array(array('Exchange is required','required'),
                                array('Exchange must be 3 numbers',
                                      'rangelength','3,3')),
                          array(array('Phone number is required','required'),
                                array('Phone number must be 7 digits',
                                      'rangelength','4,4'))));

// Add a select menu for choosing number type
// First, define the choices, with the zero'th choice being a prompt
$number_types = array('[ Select One ]','Home','Business','Mobile');

// Add the element to the form
$form->addElement('select','number_type','Number Type: ',$number_types);

// Prevent users from selecting the zero'th choice
$form->addRule('number_type','Please Select a Number Type','nonzero');

// Add a filter that prevents out of range submissions
$form->applyFilter('number_type','filter_number_type');

// Every good form needs a submit button
$form->addElement('submit','submit','Send Information');


// The main logic: display or process
if ($form->validate()) {
    $form->process('display_info');
} else {
    $form->display();
}

// The filter function that ensures a submitted number type is in the
// $number_types array
function filter_number_type($i) {
    return (array_key_exists($i,$GLOBALS['number_types']) ? $i : 0);
}

// Format the submitted data nicely for printing
function display_info($data) {
    $number_type_string = $GLOBALS['number_types'][$data['number_type']];
    printf("Your %s number is (%03d) %03d-%04d.",
           strtolower($number_type_string),
           $data['phone_number']['areacode'],
           $data['phone_number']['exchange'],
           $data['phone_number']['last4']);
} 
