require 'Mail.php';
require 'Mail/mime.php';
$to = 'destination@example.com';
$headers = array('Subject' => 'Thanks!',
                 'From' => 'icecream@example.com',
                 'Cc' => 'other-destination@example.com');

$text_body=<<<_MSG_
Your confirmation code is listed in the HTML portion of this message.
_MSG_;
$html_body=<<<_HTML_
<p>Thanks for signing up with the Free Ice Cream Club. To prevent
automated registrations, please visit the confirmation URL and
enter the confirmation code displayed in the image below:</p>
<img src="conf-code.png"/>
<br clear="all"/>
<p>The confirmation URL is:</p>
<p><b><a href="http://icecream.example.com/confirm.php">
http://icecream.example.com/confirm.php</a></b></p>
_HTML_;

// Create the confirmation code as three sets of five letters,
// separated by hyphens
$code = ''; $code_length = 15;
while ($code_length--) { $code.= chr(65+mt_rand(0,25)); }
$code = substr($code,0,5) . '-' . substr($code,5,5) . '-' . substr($code,10,5);

// Use GD to create a 200x50 image with the confirmation code
// in the middle of it. The imagecreatetruecolor() function 
// is for GD 2.0.1 or later. Use imagecreate() if you have
// an earlier version of GD.
$im = imagecreatetruecolor(200,50);
$bg_color = imagecolorallocate($im, 0xff, 0xff, 0xff);
$text_color = imagecolorallocate($im, 102, 153, 0);
imagefill($im, 0, 0, $bg_color);
imagestring($im, 5, 23, 15, $code, $text_color);

// GD has no way to put the image data directly into a string, so we use 
// output buffering to capture what GD would otherwise send to the browser
ob_start();
imagepng($im);
$image_data = ob_get_contents ();
ob_end_clean();
imagedestroy($im);

// Adding the dynamic image to the message is like adding an image file, but
// with two more arguments to addHTMLImage()
$mime = new Mail_mime();
$mime->setTXTBody($text_body);
$mime->setHTMLBody($html_body);
$mime->addHTMLImage($image_data,'image/png','conf-code.png',false);
$body = $mime->get();
$headers = $mime->headers($headers);
$mailer =& Mail::factory('mail');
$res = $mailer->send($to, $headers, $body);

// If the message can't be sent, send() returns a
// PEAR::Error object
if (PEAR::isError($res)) {
   print "Couldn't send message: " . $res->getMessage();
}
