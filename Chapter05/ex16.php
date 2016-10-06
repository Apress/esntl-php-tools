class template_parser_func extends XML_Parser {
    var $cdata;

    function xmltag_page($xp, $element, $attribs) {}
    function xmltag_page_($xp, $element) {}

    function xmltag_header($xp, $element, $attribs) {
        printf('<html><head><title>%s</title></head><body>',
               $attribs['TITLE']);
        $this->cdata = '';
    }
    function xmltag_header_($xp, $element) {
        print $this->cdata;
    }

    function xmltag_footer($xp, $element) {
        print '</body></html>';
    }

    function xmltag_content($xp, $element, $attribs) {
        $this->cdata = '';
    }
    function xmltag_content_($xp, $element) {
        print $this->cdata;
    }

    function cdataHandler($xp, $data) {
        $this->cdata .= $data;
    }

    function piHandler($xp, $target, $data) {
        if ('php' == $target) {
            eval($data);
        }
    }
}
