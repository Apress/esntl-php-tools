require 'Mail.php';
require 'Mail/mime.php';
require 'DB.php';
$dbh = DB::connect('mysql://phpgems:phpgems1@localhost/phpgems');
$flavors = $dbh->getAll('SELECT * FROM ice_cream');
// The tocsv() function, defined below, turns an array of arrays
// into a string holding CSV data
$flavors_csv = tocsv($flavors);
$headers = array('From' => 'flavordept@example.com',
                 'Subject' => 'Flavor Matrix');
$to = 'flavor-summit-list@example.com';
$body=<<<_MSG_
The attached spreadsheet contains the current flavor matrix.
Please review it in detail before the flavor summit meeting tomorrow.

Sincerely,
The flavor department
_MSG_;

$mime = new Mail_mime();
$mime->setTXTBody($body);
// Since $flavors_csv holds the attachment data, we must supply a filename
// for the e-mail client to use and tell addAttachment() that the first
// argument holds data, not a filename
$mime->addAttachment($flavors_csv,'text/csv', 'flavors.csv',false);
$body = $mime->get();
$headers = $mime->headers($headers);
$mailer =& Mail::factory('mail');
$mailer->send($to,$headers,$body);
// The utility function to CSV-format an array of arrays
function tocsv($ar) {
    $s = '';
    foreach ($ar as $row) {
        $out = array();
        foreach ($row as $cell) {
            $quote = false;
            // double any doublequotes, and quote the cell
            if (false !== strpos($cell,'"')) {
                $cell = str_replace('"','""',$cell);
                $quote = true;
            }
            // also quote the cell if there is an embedded
            // newline, comma, or the cell begins or ends
            // with whitespace
            elseif ((false !== strpos($cell,"\n")) ||
                    (false !== strpos($cell,"\r")) ||
                    (false !== strpos($cell,",")) ||
                    preg_match('/^\s/',$cell) ||
                    preg_match('/\s$/',$cell)) {
                $quote = true;
            }
            // add the cell, with optional quoting, to $out
            $out[] = $quote ? '"'.$cell.'"' : $cell;
        }
        // add the whole line, joined by commas, to $s
        $s .= join(',',$out)."\n";
    }
    return $s;
}
