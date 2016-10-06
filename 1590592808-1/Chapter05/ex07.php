class ice_cream_parser_table extends XML_Parser {
    var $cdata;
    var $flavor;
    function startHandler($xp, $element, &$attribs) {
        switch ($element) {
        case 'FLAVOR':
            $this->flavor = array ('ID' => $attribs['ID']);
             break;
        case 'NAME':
        case 'CALORIES':
        case 'PRICE':
            $this->cdata = '';
            break;
        }
    }

    function cdataHandler($xp, $data) {
        $this->cdata .= $data;
    }

    function endHandler($xp, $element) {
        switch ($element) {
        case 'NAME':
        case 'CALORIES':
        case 'PRICE':
            $this->flavor[$element] = $this->cdata;
            break;
        case 'FLAVOR':
            printf("%2d %-15s %3d \$%.02f\n",
                   $this->flavor['ID'], $this->flavor['NAME'],
                   $this->flavor['CALORIES'], $this->flavor['PRICE']);
            break;
        }
    }
}
