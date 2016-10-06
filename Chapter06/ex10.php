class person {
    var $name;
    var $mass;
}
$me = new Person;
$me->name = 'David';
$me->mass = 60;
$encoded_me = XML_RPC_encode($me);
// This array encodes to an identical XML_RPC_Value as $me
$ar = array('name' => 'David', 'mass' => 60);
