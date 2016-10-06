function pick_this_stooge($request_info) {
    global $stooges;
    $which_stooge = XML_RPC_decode($request_info->params[0]);
    $retval = new XML_RPC_Value($stooges[$which_stooge],'string');
    return new XML_RPC_Response($retval);
}
