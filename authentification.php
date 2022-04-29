<?php
    $url = "http://testapi.crisalid.com/api/mailsteris/auth?login=testapi&password=testapi";
    $token = new SimpleXMLElement(file_get_contents($url));
?>
