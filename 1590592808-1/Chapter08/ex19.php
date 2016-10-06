$xml = '<icecream xmlns:ic="http://www.example.com/ns/icecream">
<ic:flavor id="6">
 <ic:name>Chocolate</ic:name><ic:calories>10</ic:calories>
 <ic:price>4.50</ic:price>
</ic:flavor>
<ic:flavor id="5">
 <ic:name>Vanilla</ic:name><ic:calories>20</ic:calories>
 <ic:price>4.50</ic:price>
</ic:flavor>
<ic:flavor id="19">
 <ic:name>Heavenly Hash</ic:name><ic:calories>60</ic:calories>
 <ic:price>5.95</ic:price>
</ic:flavor>
<ic:flavor id="12">
 <ic:name>Diet Cardboard</ic:name><ic:calories>0</ic:calories>
 <ic:price>1.15</ic:price>
</ic:flavor>
</icecream>';
$sxe = simplexml_load_string($xml);
