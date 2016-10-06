require 'Mail.php';
require 'Mail/mime.php';
$to = 'destination@example.com';
$headers = array('From' => 'icecream@example.com',
                 'Subject' => 'Hungry?',
                 'Cc' => 'other-destination@example.com');
$text_body=<<<_MSG_
Are you hungry? Wouldn't you like a cold, sweet ice cream cone?
Why not stop by your local ice cream parlor today for a few
scoops of Guava Mint Bouillon?

Sincerely,
Your local ice cream booster
_MSG_;

$html_body=<<<_HTML_
<p>Are you <i>hungry?</i> Wouldn't you like a <b>cold</b>, <b>sweet</b>
ice cream cone? Why not stop by your local ice cream parlor today for
a few scoops of <font size="+1">Guava Mint Bouillon</font>?</p>

<p><a href="http://coupons.example.com/">Click Here</a> for a coupon.</p>

<p>Sincerely, <br/>
Your local ice cream booster</p>
_HTML_;

$mime = new Mail_mime();
$mime->setTXTBody($text_body);
$mime->setHTMLBody($html_body);
$body = $mime->get();
$headers = $mime->headers($headers);
$mailer =& Mail::factory('mail');
$res = $mailer->send($to, $headers, $body);

// If the message can't be sent, send() returns a
// PEAR::Error object
if (PEAR::isError($res)) {
   print "Couldn't send message: " . $res->getMessage();
}
