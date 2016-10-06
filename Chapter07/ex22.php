function IceCream_Server() {
        $this->__typedef['{http://www.example.com/icecream}flavorinfo'] =
            array('name' => 'string',
                  'calories' => 'int',
                  'price' => 'float');
        
        $this->__dispatch_map['isFlavor'] = 
            array('in' => array('flavor' => 'string'),
                  'out' => array('flavorstatus' => 'boolean'));
        $this->__dispatch_map['getFlavor'] =
            array('in' => array('flavor' => 'string'),
                  'out' => array('flavor' =>
                              '{http://www.example.com/icecream}flavorinfo'));
        $this->__dispatch_map['comparePrices'] =
            array('in' => array('flavor1' => 'string',
                                'flavor2' => 'string'),
                  'out' => array('lessflavor' => 'string',
                                 'moreflavor' => 'string'));
    }
