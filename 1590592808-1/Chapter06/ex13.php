$val = XML_RPC_decode($encoded);
switch ($encoded->scalartyp()) {
case 'boolean':
    $val = (bool) $val;
    break;
case 'int':
    $val = (int) $val;
    break;
case 'string':
    $val = (string) $val;
    break;
case 'double':
    $val = (double) $val;
    break;
case 'dateTime.iso8601':
    // Convert to an epoch time stamp
    $val = XML_RPC_iso8601_decode($val);
    break;
case 'base64':
    $val = base64_decode($val);
    break;
}
