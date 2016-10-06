function list_all_stooges() {
    global $stooges;
    return new XML_RPC_Response(XML_RPC_encode($stooges));
}
