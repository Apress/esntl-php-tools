require 'SOAP/Server.php';
class IceCream_Header {
    var $icecream_token = null;
    var $header_ns = 'http://www.example.com/icecream/headers';

    function token($client_token) {
        if ($client_token == md5('secret token')) {
            $this->icecream_token = true;
            return 'Valid Token';
        } else {
            $fault = new SOAP_Fault('Invalid Token',
                                    'Client',
                                    $this->header_ns);
            $fault->backtrace = null;
            return $fault;
        }
    }
}
class IceCream_Server {
    var $method_ns = 'http://www.example.com/icecream';
    var $headers;
    var $flavors =
        array('Chocolate' => array('calories' => 10,
                                   'price' => 4.50),
              'Vanilla' => array('calories' => 20,
                                 'price' => 4.50),
              'Heavenly Hash' => array('calories' => 60,
                                       'price' => 5.95),
              'Diet Cardboard' => array('calories' => 0,
                                        'price' => 1.15));
    function IceCream_Server() {
        $this->__dispatch_map['getFlavor'] =
            array('in' => array('flavor' => 'string'),
                  'out' => array('info' => 'array'));
        // create a header handler and add it to the server
        $this->headers = new IceCream_Header;
        global $server;
        $server->addObjectMap($this->headers, $this->headers->header_ns);
    }
   
    function getFlavor($flavor) {
        if (is_null($this->headers->icecream_token)) {
            $fault = new SOAP_Fault('No Token Header',
                                  'Client',
                                  $this->method_ns);
            $fault->backtrace = null;
            return $fault;
        } elseif (array_key_exists($flavor, $this->flavors)) {
            return new SOAP_Value('info', 'array',
                                  $this->flavors[$flavor]);
        } else {
            $fault = new SOAP_Fault('Unknown Flavor','Client');
            $fault->backtrace = null;
            return $fault;
        }
    }
}
