function getFlavor($flavor) {
     if ($this->isFlavor($flavor)) {
         return new SOAP_Value('{http://www.example.com/icecream}flavor',
                               'struct',
                               $this->flavors[$flavor]);
     } else {
         return false;
     }
}
