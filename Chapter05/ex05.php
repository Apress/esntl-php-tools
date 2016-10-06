class ice_cream_parser_immediate extends XML_Parser {
    var $cdata;
    function startHandler($xp, $element, &$attribs) {
        switch ($element) {
        case 'FLAVOR':
            print "Flavor ID: $attribs[ID]\n";
            break;
        case 'NAME':
        case 'CALORIES':
        case 'PRICE':
            print '  '.ucfirst(strtolower($element)).': ';
            break;
        }
        $this->cdata = '';
    }

    function cdataHandler($xp, $data) {
        $this->cdata .= $data;
    }

    function endHandler($xp, $element) {
        switch ($element) {
        case 'NAME':
        case 'CALORIES':
            print "$this->cdata\n";
            break;
        case 'PRICE':
            printf("\$%.02f\n",$this->cdata);
            break;
        }
    }
}
