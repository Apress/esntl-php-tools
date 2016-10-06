function getFlavor($flavor) {
    if ($this->isFlavor($flavor)) {
        return new SOAP_Value('{http://www.example.com/icecream}flavor',
                              'struct',
                              $this->flavors[$flavor]);
    } else {
        $fault = new SOAP_Fault('Unknown Flavor','Client');
        $fault->backtrace = null;
        return $fault;
    }
}
