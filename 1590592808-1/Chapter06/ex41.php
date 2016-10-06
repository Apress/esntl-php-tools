function pick_this_stooge($request_info) {
    global $stooges, $XML_RPC_erruser;
    $which_stooge = XML_RPC_decode($request_info->params[0]);
    if (($which_stooge < 0) || ($which_stooge >= count($stooges))) {
       // The fault code returned is based on $XML_RPC_erruser to
       // avoid conflict with any system fault codes. 
       return new XML_RPC_Response(0,
                                    $XML_RPC_erruser + 1,
                                    "Invalid stooge");
    } else {
        $retval = new XML_RPC_Value($stooges[$which_stooge],'string');
        return new XML_RPC_Response($retval);
    }
}
