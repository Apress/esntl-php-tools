$xml = '<flavor id="6">
 <name>Chocolate</name>
 <calories>
  <fat>6</fat>
  <other>4</other>
 </calories>
 <price>4.50</price>
</flavor>';
$sxe = simplexml_load_string($xml);
