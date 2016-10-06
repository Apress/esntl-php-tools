$rs = $conn->execute('SELECT flavor,calories,price FROM ice_cream');
// print second row
$rs->Move(2);
print "Flavor {$rs->fields[0]} has {$rs->fields[1]} calories and costs
print " \${$rs->fields[2]}.\n";
