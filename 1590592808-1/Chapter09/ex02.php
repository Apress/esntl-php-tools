require 'Mail.php';
$params = array('host' => 'smtp-server.example.com',
                'port' => '25');
$mailer =& Mail::factory('smtp',$params);
$to = 'destination@example.com';
$headers = array('From' => 'icecream@example.com',
                 'Subject' => 'Hungry?',
                 'Cc' => 'other-destination@example.com');
$body=<<<_MSG_
Are you hungry? Wouldn't you like a cold, sweet ice cream cone?
Why not stop by your local ice cream parlor today for a few
scoops of Guava Mint Bouillon?

Sincerely,
Your local ice cream booster
_MSG_;

$res = $mailer->send($to, $headers, $body);

// If the message can't be sent, send() returns a
// PEAR::Error object
if (PEAR::isError($res)) {
   print "Couldn't send message: " . $res->getMessage();
}
