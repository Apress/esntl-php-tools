// Trim whitespace from the value of subject
$form->applyFilter('subject','trim');
// Trim whitespace from subject and body
$form->applyFilter(array('subject','body'),'trim');
//Trim whitespace from all elements
$form->applyFilter('__ALL__','trim');
