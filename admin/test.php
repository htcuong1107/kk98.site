<?php


echo get_image('http://tuongtaccheo.com');




function get_image ($url) {
    $code = file_get_contents($url);
    $head = explode('</head>', $code)[0];
    if (!isset($head)) {
        $head = $code;
    }
    $aaa = str_replace(' ', '', $head);
    $img = explode('>', explode ('og:image', $aaa)[1])[0];
    $link = explode('"', explode('="', $img)[1])[0];
    if (strpos($link, 'http') !== false) {
        return $link;
    } else {
        $domain = strtolower(trim($link));
        $domain = preg_replace('/^http:\/\//i', '', $domain);
        $domain = preg_replace('/^www\./i', '', $domain);
        $domain = explode('/', $domain);
        $domain = trim($domain[0]);
        return $domain;
    }
}