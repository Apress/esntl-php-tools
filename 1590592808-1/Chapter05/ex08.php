class ice_cream_parser_array extends XML_Parser {
    var $cdata;
    var $id;
    var $flavor;
    var $ice_cream;
    function startHandler($xp, $element, &$attribs) {
        switch ($element) {
        case 'FLAVOR':
            $this->id = $attribs['ID'];
            $this->flavor = array();
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
            $this->ice_cream[$this->id] = $this->flavor;
         break;
        }
    }
}
