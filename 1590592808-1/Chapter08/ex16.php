$xml = '
<dessert xmlns:ic="http://www.example.com/ns/icecream">
<ic:flavor id="6">
 <ic:name>Chocolate</ic:name>
 <ic:calories>10</ic:calories>
 <ic:price>4.50</ic:price>
</ic:flavor>
<ic:flavor id="5">
 <ic:name>Vanilla</ic:name>
 <ic:calories>20</ic:calories>
 <ic:price>4.50</ic:price>
</ic:flavor>
<flavor id="19">
 <name>Lemon</name><calories>60</calories><price>5.95</price>
</flavor>
<flavor id="12">
 <name>Tangerine</name><calories>0</calories><price>1.15</price>
</flavor>
</dessert>';

$sxe = simplexml_load_string($xml);
foreach ($sxe as $element_name => $element) {
    print "$element_name $element->name has $element->calories calories.\n";
}
