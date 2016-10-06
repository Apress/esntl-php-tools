// Read the UTF-8 file and display results encoded as UTF-8: the two byte
// sequence 195, 182 in the input file remains the same in the output.
$parser =& new international_parser('UTF-8','event','UTF-8');
$parser->setInputFile('book-utf8.xml');
$parser->parse();

// Read the UTF-8 file and display results encoded as ISO-8859-1: the two byte
// sequence 195, 182 is converted to the byte 246 in the output.
$parser =& new international_parser('UTF-8','event','ISO-8859-1');
$parser->setInputFile('book-utf8.xml');
$parser->parse();

// Read the ISO-8859-1 file and display results encoded as ISO-8859-1: the
// 246 byte in the input remains the same in the output
$parser =& new international_parser('ISO-8859-1','event','ISO-8859-1');
$parser->setInputFile('book-iso8859.xml');
$parser->parse();

// Read in the ISO-8859-1 file and display results encoded as UTF-8: the
// 246 byte in the input is converted to the two byte sequence 195, 182
// in the output
$parser =& new international_parser('ISO-8859-1','event','UTF-8');
$parser->setInputFile('book-iso8859.xml');
$parser->parse();
