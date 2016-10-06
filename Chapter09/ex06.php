// Start off with the contents of a file
$mime->setTXTBody('/home/icecream/header.txt', true);
// Append a string
$mime->setTXTBody('The date today is ' . strftime('%c') . "\n\n", false, true);
// Append a file
$mime->setTXTBody('/home/icecream/healthy.txt', true, true);
// Append another file
$mime->setTXTBody('/home/icecream/footer.txt', true, true);
