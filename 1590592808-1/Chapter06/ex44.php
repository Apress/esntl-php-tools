$server = new XML_RPC_Server($dispatch_map, false);
if (check_xmlrpc_permissions($_SERVER['REMOTE_ADDR'])) {
    $server->service();
} else {
    // this IP address isn't allowed to access XML-RPC requests
}
