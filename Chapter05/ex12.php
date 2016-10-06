class nested_tags extends XML_Parser {
    var $cdata = array();
    var $level = 0;

    function startHandler($xp, $element, $attribs) {
        print "\n" . str_repeat(' ',$this->level);
        print "<$element";
        foreach ($attribs as $k => $v) {
            print " $k=\"". htmlentities($v) . '"';
        }
        print '>';
        array_push($this->cdata,'');
        $this->level++;
    }

    function cdataHandler($xp, $data) {
        $this->cdata[$this->level-1] .= $data;
    }

    function endHandler($xp, $element) {
        $data = array_pop($this->cdata);
        $this->level--;
        if (strlen(trim($data))) {
            print htmlentities(trim($data));
        } else {
            print "\n" . str_repeat(' ',$this->level);
        }
        print "</$element>";
    }
}
