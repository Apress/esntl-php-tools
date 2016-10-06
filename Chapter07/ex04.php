require 'SOAP/Client.php';
$wsdl = new SOAP_WSDL('http://www.webservicex.net/isbn.asmx?wsdl');
$client_code = $wsdl->generateProxyCode();
// Parse class name from code
if (preg_match('/class (\w+) extends SOAP_Client/',$client_code,$matches)) {
    $class_name = $matches[1];
    print "Saving class $class_name to $class_name.php...";
    // Open
    $fh = fopen("$class_name.php",'w') or die("Can't open $class_name.php");
    // Write header and code (but to prevent a parse error, no closing PHP tag)
    if (-1 === fwrite($fh,"<?php \$client_code")) {
        die("Can't write to $class_name.php");
    }
    // Close
    fclose($fh) or die("Can't close $class_name.php");
    print "done.\n";
} else {
    die("Couldn't get class name.");
}
