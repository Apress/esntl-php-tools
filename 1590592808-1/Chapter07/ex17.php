function getTime() {
    return new SOAP_Value('now','dateTime',
                          gmstrftime('%Y-%m-%dT%H:%M:%SZ'));
}
