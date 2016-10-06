$form = new HTML_QuickForm('send_email');
$form->addElement('text','subject','Subject: ','size="30" maxlength="128"');
$form->addElement('textarea','body','Message Body: ','rows="10" cols="30"');
$form->addElement('submit','send','Send Message');
$data = $form->getSubmitValues();
if ($data['send']) {
    mail('webmaster@example.com',$data['subject'],$data['body']);
    print "Your message has been sent.";
} else {
    $form->display();
}
