class demo_parser_no_case_folding extends XML_Parser {
    var $folding = false; // Turn off case folding
    function startHandler($xp, $element, &$attribs) {
        print "START [$element]\n";
        var_dump($attribs);
    }
    function endHandler($xp, $element) {
        print "END [$element]\n";
    }
    function cdataHandler($xp, $data) {
        print "CDATA [$data]\n";
    }
}
