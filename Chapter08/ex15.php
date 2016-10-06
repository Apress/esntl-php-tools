$xml = '<flavor id="6">
 <name>Chocolate</name>
 <calories>10</calories>
 <price>4.50</price>
</flavor>';
$sxe = simplexml_load_string($xml);
foreach ($sxe as $element_name => $element) {
    print "$element_name is $element\n";
}
