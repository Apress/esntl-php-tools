$parser =& new demo_parser;
$parser->parseString(file_get_contents('flavors.xml'));

$parser =& new demo_parser;
$parser->setInputFile('flavors.xml');
$parser->parse();

$parser =& new demo_parser;
$fh = fopen('flavors.xml') or die("Can't open flavors.xml");
$parser->setInput($fh);
$parser->parse();
