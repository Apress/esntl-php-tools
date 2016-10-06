$flavors = $sxe->children('http://www.example.com/ns/icecream');
foreach ($flavors as $element_name => $element) {
    print "$element_name $element->name has $element->calories calories.\n";
}
