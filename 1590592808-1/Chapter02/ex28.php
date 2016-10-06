$rs = $conn->execute('SELECT flavor,id FROM ice_cream');
print $rs->GetMenu2('which_flavor',null,false);
