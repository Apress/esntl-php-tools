// Load the class and function definitions
require 'XML/RPC.php';

// Create a client object to talk to the XML-RPC server
$client = new XML_RPC_Client('/RPC2', 'time.xmlrpc.com');

// Define a message that calls the procedure we want
$message = new XML_RPC_Message('currentTime.getCurrentTime');

// Send the message over the network and receive the response
$response = $client->send($message);

// Check if the response failed
if ($fault = ($response->faultCode())) {
    // Display an error message
    print "Error $fault: " . $response->faultString();
} else {
    // Extract the return value object from the response
    $return_value = $response->value();

    // Turn the return value object into a PHP data type
    $decoded_value = XML_RPC_decode($return_value);

    // Turn the ISO8601 time stamp into a seconds-since-epoch value
    $now = XML_RPC_iso8601_decode($decoded_value);

    // Print out a formatted date/time string
    print strftime('%c',$now);
}
