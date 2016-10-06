if (isset($_SERVER['REQUEST_METHOD']) &&
    $_SERVER['REQUEST_METHOD']=='POST') {
    $server->service($HTTP_RAW_POST_DATA);
} else {
    require_once 'SOAP/Disco.php';
    $disco = new SOAP_DISCO_Server($server,'IceCream_Server');
    header("Content-type: text/xml");
    if (isset($_SERVER['QUERY_STRING']) &&
       strcasecmp($_SERVER['QUERY_STRING'],'wsdl')==0) {
        echo $disco->getWSDL();
    } else {
        echo $disco->getDISCO();
    }
}
