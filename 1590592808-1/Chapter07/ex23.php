function getFlavor($flavor) {
    if ($this->isFlavor($flavor)) {
        $flavorinfo = $this->flavors[$flavor];
        // add name to flavorinfo array
        $flavorinfo['name'] = $flavor;
        return new SOAP_Value('{http://www.example.com/icecream}flavor',
                              '{http://www.example.com/icecream}flavorinfo',
                              $flavorinfo);
    } else {
        return false;
    }
}
