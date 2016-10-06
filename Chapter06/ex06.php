$ar = array ('name' => new XML_RPC_Value('David'),
             'mass' => new XML_RPC_Value(60,'int'),
             'temperature' => new XML_RPC_Value(98.6,'double'));
$person = new XML_RPC_Value($ar,'struct');
