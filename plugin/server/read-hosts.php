<?php

/*

Jappix - An open social platform
This is the hosts configuration reader

-------------------------------------------------

License: AGPL
Author: Valérian Saliou

*/

// Someone is trying to hack us?
if(!defined('JAPPIX_BASE')) {
    exit;
}

// Get the protocol we use
if(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) {
    $protocol = 'https';
} else {
    $protocol = 'http';
}

// Get the HTTP host
$default_host = 'jappix.com';
$http_host = $default_host;

if($_SERVER['HTTP_HOST']) {
    $http_host_split = str_replace('www.', '', $_SERVER['HTTP_HOST']);
    $http_host_split = preg_replace('/:[0-9]+$/i', '', $http_host_split);

    if($http_host_split) {
        $http_host = $http_host_split;
    }
}

define('HOST_MAIN', $http_host);
define('HOST_MUC', 'conference.'.$http_host);
define('HOST_PUBSUB', 'pubsub.'.$http_host);
define('HOST_VJUD', $http_host);
define('HOST_ANONYMOUS', $http_host);
define('HOST_STUN', 'stun.'.$default_host);
define('HOST_TURN', '');
define('HOST_TURN_USERNAME', '');
define('HOST_TURN_PASSWORD', '');
define('HOST_BOSH', '/http-bind/');
define('HOST_BOSH_MAIN', '');
define('HOST_BOSH_MINI', '');
define('HOST_WEBSOCKET', '');
define('HOST_STATIC', '');
define('HOST_UPLOAD', '');
define('BOSH_PROXY', 'off');

?>
