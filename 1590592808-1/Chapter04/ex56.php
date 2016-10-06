function insert_current_temp($params, &$smarty) {
    require_once 'SOAP/Client.php';
    if (! $params['zip']) {
        return "No temperature available.";
    } else {
        $wsdl_url = 'http://www.xmethods.net/sd/2001/TemperatureService.wsdl';
        $wsdl = new SOAP_WSDL($wsdl_url);
        $client = $wsdl->getProxy();
        $temp = $client->getTemp($params['zip']);
        // This temperature server returns -999 if there was an error
        if ($temp == -999) {
            return "No temperature available.";
        } else {
            return "In ZIP Code $params[zip], it is $temp degrees Fahrenheit.";
        }
    }
}
