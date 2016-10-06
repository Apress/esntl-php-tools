// Load the HTML_QuickForm module
require 'HTML/QuickForm.php';

// Instantiate a new form
$form = new HTML_QuickForm('book');
// Add a text box
$form->addElement('text','title','Book Title:');
// Add a select box
$subjects = array('Math','Ice Fishing','Anatomy');
$form->addElement('select','subject','Subject(s): ',$subjects);
// Add a submit button
$form->addElement('submit','save','Save Book');

// Add a validation rule: title is required
$form->addRule('title','Please Enter a Book Title','required');

// Call the processing function if the submitted form
// data is valid; otherwise, display the form
if ($form->validate()) {
    $form->process('praise_book');
} else {
    $form->display();
}

// Define a function to process the form data
function praise_book($v) {
    global $subjects;
    // Entity-encode any special characters in $v['title']
    $v['title'] = htmlentities($v['title']);
    print "<i>$v[title]</i> is a great book about ";
    print $subjects[$v['subject']] . '.';
}
