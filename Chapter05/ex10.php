class template_parser extends XML_Parser {
    var $cdata;
    var $attribs;
    function startHandler($xp, $element, $attribs) {
        $this->cdata = '';
        $this->attribs = $attribs;
    }

    function cdataHandler($xp, $data) {
        $this->cdata .= $data;
    }

    function endHandler($xp, $element) {
        switch ($element) {
        case 'PAGE':
            break;
        case 'HEADER':
            printf("<html><head><title>%s</title></head><body><h1>%s</h1>\n",
                   $this->attribs['TITLE'],
                   $this->cdata);
            break;
        case 'FOOTER':
            printf('</body></html>');
            break;
        default:
            print "<$element";
            foreach ($this->attribs as $k => $v) {
                print " $k=\"" . htmlentities($v) . '"';
            }
            print ">$this->cdata</$element>";
            break;
        }
    }

    function piHandler($xp, $target, $data) {
        if ('php' == $target) {
            eval($data);
        }
    }
}
