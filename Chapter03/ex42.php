if ($form->validate()) {
    mail('webmaster@example.com',$data['subject'],$data['body']);
    print "Your message has been sent.";
} else {
    $form->display();
}
