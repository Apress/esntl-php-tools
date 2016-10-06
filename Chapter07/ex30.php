   function updatePicture($name, $picture) {
        if (! preg_match('/^\w+\.\w{3}$/', $name)) {
            $f = new SOAP_Fault('Bad Name Format', 'Client');
            $f->backtrace = null;
            return $f;
        }
        $filename = '/usr/local/pictures/'.$name;
        if (! ($fh = fopen($filename,'wb'))) {
            $f = new SOAP_Fault("Can't open file for writing",'Server');
            $f->backtrace = null;
            return $f;
        }
        if (fwrite($fh,$picture) != strlen($picture)) {
            $f = new SOAP_Fault("Can't write all data",'Server');
            $f->backtrace = null;
            return $f;
        }
        if (! fclose($fh)) {
            $f = new SOAP_Fault("Can't close file",'Server');
            $f->backtrace = null;
            return $f;
        }
        // Everything succeeded, so return the new filename
        return $filename;
    }
