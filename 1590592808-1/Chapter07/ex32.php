function getPicture($name) {
        if (! preg_match('/^\w+\.\w{3}$/', $name)) {
            $f = new SOAP_Fault('Bad Name Format', 'Client');
            $f->backtrace = null;
            return $f;
        }
        $filename = '/tmp/'.$name;
        if (! is_readable($filename)) {
            $f = new SOAP_Fault("Can't read File",'Server');
            $f->backtrace = null;
        }
        $attachment = new SOAP_Attachment('picture',
                                          'application/octet-stream',
                                          $filename);
        return $attachment;
    }
