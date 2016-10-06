// Call the processing function if the submitted form data is valid
// Otherwise, display the form
if ($form->validate()) {
    $form->process('praise_book');
} else {
    $form->display();
}
