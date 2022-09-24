<?php
include('config/config.php');
$u = $_GET["u"];
$check_u = $ketnoi->query("SELECT * FROM `link` WHERE `link-boc` = '$u' ")->fetch_array();
if($check_u){
    echo '<meta property="og:image" content="'.get_image($check_u['link-goc']).'">';
    echo "<title>".page_title($check_u['link-goc'])."</title>";
    mysqli_query($ketnoi, "UPDATE `link` SET `dem` = `dem` + '1' WHERE `link-boc` = '$u'");
    die('<script type="text/javascript">setTimeout(function(){ location.href = "https://'.$_SERVER['SERVER_NAME'].'/r2.php?u='.$check_u['link-boc-2'].'" },100);</script>');
} else {
    $url = "https://www.vnexpress.net";
    die('<script type="text/javascript">setTimeout(function(){ location.href = "'.$url.'" },100);</script>');
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