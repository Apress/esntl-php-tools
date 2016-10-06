class international_parser extends XML_Parser {
    function startHandler($xp, $e, $attribs) {
        print "<$e>";
    }
    function cdataHandler($xp, $data) {
        print $data;
    }
    function endHandler($xp, $e) {
        print "</$e>";
    }
}
