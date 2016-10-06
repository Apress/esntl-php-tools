$masses =
   new XML_RPC_Value(array(new XML_RPC_Value(60,'int'),
                           new XML_RPC_Value(70,'int'),
                           new XML_RPC_Value(80,'int')), 'array');
$person = new XML_RPC_Value(array('name' => new XML_RPC_Value('David'),
                                  'mass' => new XML_RPC_Value(60,'int'), 
                      'temperature' => new XML_RPC_Value(98.6,'double')),
                      'struct');
