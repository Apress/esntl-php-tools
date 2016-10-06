// Load the class and function definitions
require 'XML/RPC/Server.php';

// Define the underlying PHP functions that the XML-RPC procedures call
$stooges = array('Moe','Larry','Curly');
function pick_a_stooge() {
    global $stooges;
    $which_stooge = mt_rand(0,2);
    $retval = new XML_RPC_Value($stooges[$which_stooge],'string');
    return new XML_RPC_Response($retval);
}

// Set up the dispatch map
$dispatch_map = array('stooges.pickOne' =>
                      array('function' => 'pick_a_stooge'));

// Start the server
$server = new XML_RPC_Server($dispatch_map);
