<?php

class r2t_shortener_isgd {

    protected $apiurl = 'http://gw.gd/api.php?format=text&long=';
    function __construct() {
        require_once ("HTTP/Request.php");

    }

    public function shorten($url) {

        $req = new HTTP_Request($this->apiurl . urlencode($url));
        if (!PEAR::isError($req->sendRequest())) {
            return $req->getResponseBody();
        }
        return "";
    }
}
