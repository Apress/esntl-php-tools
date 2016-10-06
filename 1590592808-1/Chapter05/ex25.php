$parser =& new international_parser('UTF-8','event','US-ASCII');
$parser->setInputFile('book-utf8.xml');
$parser->parse();
