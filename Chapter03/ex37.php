$form = new HTML_QuickForm('send_email');
$form->addElement('text','subject','Subject: ','size="30" maxlength="128"');
$form->addElement('textarea','body','Message Body: ','rows="10" cols="30"');
$form->addElement('submit','send','Send Message');
if ($form->validate()) {
    $form->process('send_message');
} else {
    $form->display();
}
function send_message($data) {
    mail('webmaster@example.com',$data['subject'],$data['body']);
    print "Your message has been sent.";
}
