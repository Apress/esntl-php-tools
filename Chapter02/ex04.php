$rs = $conn->execute('SELECT flavor,calories,price FROM ice_cream');
// print last row
$rs->MoveLast();
print "Flavor {$rs->fields[0]} has {$rs->fields[1]} calories and costs 
print "\${$rs->fields[2]}.\n";
// print first row
$rs->MoveFirst();
print "Flavor {$rs->fields[0]} has {$rs->fields[1]} calories and costs
print " \${$rs->fields[2]}.\n";
