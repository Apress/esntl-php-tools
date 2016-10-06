class IceCream_Server {
    var $flavors =
        array('Chocolate' => array('calories' => 10,
                                   'price' => 4.50),
              'Vanilla' => array('calories' => 20,
                                 'price' => 4.50),
              'Heavenly Hash' => array('calories' => 60,
                                       'price' => 5.95),
              'Diet Cardboard' => array('calories' => 0,
                                        'price' => 1.15));

    // Initialize the dispatch map in the constructor to 
    // make the code easier to read
    var $__dispatch_map;

    function IceCream_Server() {
        $this->__dispatch_map['isFlavor'] = 
            array('in' => array('flavor' => 'string'),
                  'out' => array('flavorstatus' => 'boolean'));
        $this->__dispatch_map['getFlavor'] =
            array('in' => array('flavor' => 'string'),
                  'out' => array('flavor' => 'struct'));
    }

    function isFlavor($flavor) {
        if (array_key_exists($flavor, $this->flavors)) {
            return true;
        } else {
            return false;
        }
    }

    function getFlavor($flavor) {
        if ($this->isFlavor($flavor)) {
            return new SOAP_Value('{http://www.example.com/icecream}flavor',
                                  'struct',
                                  $this->flavors[$flavor]);
        } else {
            return false;
        }
    }
}
