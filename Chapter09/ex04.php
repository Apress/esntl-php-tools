require 'Mail.php';
require 'Mail/mime.php';
$to = 'destination@example.com';
$headers = array('From' => 'icecream@example.com',
                 'Subject' => 'Hungry?',
                 'Cc' => 'other-destination@example.com');
$body=<<<_MSG_
Why not stop by your local ice cream parlor today for a few
scoops of Guava Mint Bouillon? The attached document lists 
the numerous health benefits of this delicious flavor.

Sincerely,
Your local ice cream booster
_MSG_;

$mime = new Mail_mime();
$mime->setTXTBody($body);
$mime->addAttachment('/home/icecream/guava-health.doc','application/msword');
$body = $mime->get();
$headers = $mime->headers($headers);
$mailer =& Mail::factory('mail');
$mailer->send($to,$headers,$body);
