<?php
include('config/config.php');
$u = $_GET["u"];
$check_u = $ketnoi->query("SELECT * FROM `link` WHERE `link-boc-2` = '$u' ")->fetch_array();
if($check_u){
    echo '<meta property="og:image" content="'.get_image($check_u['link-goc']).'">';
    echo "<title>".page_title($check_u['link-goc'])."</title>";
    die('<script type="text/javascript">setTimeout(function(){ location.href = "'.$check_u['link-goc'].'" },100);</script>');
    // header("Location: " . $check_u['link-goc'], true, 307);
} else {
    $url = "https://www.vnexpress.net";
    header("Location: " . $url, true, 307);
}



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


function page_title($url) {
    $fp = file_get_contents($url);
    if (!$fp) {
        return null;
    }
    $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
    if (!$res) {
        return null;
    }
    $title = preg_replace('/\s+/', ' ', $title_matches[1]);
    $title = trim($title);
    return $title;
}
?>