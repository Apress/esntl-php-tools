// Load the class and function definitions
require 'XML/RPC.php';

// Create a client object to talk to the XML-RPC server
$client = new XML_RPC_Client('/xmlrpc.php', 'www.example.com');

// Define a message that calls the procedure we want
$message = new XML_RPC_Message('stooges.listAll');

// Send the message over the network and receive the response
$response = $client->send($message);

// Extract the return value object from the response
$return_value = $response->value();

// Turn the return value object into a PHP data type
$decoded_value = XML_RPC_decode($return_value);

// Display the results
print_r($decoded_value);
