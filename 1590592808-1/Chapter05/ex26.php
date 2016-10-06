header('Content-Type: text/xml; charset=utf-8');
$parser =& new international_parser('ISO-8859-1','event','UTF-8');
$parser->setInputFile('book-iso8859.xml');
$parser->parse();
