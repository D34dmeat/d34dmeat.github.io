<?php
    // file url: http://localhost/remote-json-proxy.php
    $url = 'http://api.voddler.com/metaapi/browse/1';
    $qsa = '?';
    foreach($_GET as $n => $v) {
        if($n != 'callback') {
            $qsa .= '&' . $n . '=' . rawurlencode($v);
        }
    }
    $json = file_get_contents($url . $qsa);
    echo sprintf('%s(%s);', $_GET['callback'], $json);
?>