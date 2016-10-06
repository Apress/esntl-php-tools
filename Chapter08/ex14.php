print $sxe->flavor[0]->name . ' has ';
print $sxe->flavor[0]->calories . ' calories, but ';
print $sxe->flavor[3]->name . ' (id=' . $sxe->flavor[3]['id'] . ') ';
print 'only has ' . $sxe->flavor[3]->calories . '.';
