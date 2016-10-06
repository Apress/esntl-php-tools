$clothes = array( 'top' => array('blue shirt', 'red shirt', 'green cape'),
                  'bottom' => array('plaid pants', 'yellow shorts',
                                    'magenta skirt'));
$encoded_clothes = XML_RPC_encode($clothes);
