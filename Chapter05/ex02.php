require 'XML/Parser.php';
class demo_parser extends XML_Parser {
    function startHandler($xp, $element, $attribs) {
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
$parser =& new demo_parser;
$parser->setInputFile($argv[1]);
$parser->parse();
