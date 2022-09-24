<?php include('../config/config.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QUẢN TRỊ WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    
    <script src="../src/scripts/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/asColorPicker.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-4E1JNSX7CK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4E1JNSX7CK');
</script>
<script src="https://browser.sentry-cdn.com/5.27.3/bundle.min.js"></script>
<script>Sentry.init({ dsn: 'https://d3b10a7de1634dfd8f377af7bbf61c1e@o380059.ingest.sentry.io/5205480' });</script>
<meta name="flash-show" content="">
<script src="https://www.mycompiler.io/lib/ace/theme-chrome.js"></script><script src="https://www.mycompiler.io/lib/ace/mode-php.js"></script><script id="_carbonads_projs" type="text/javascript" src="https://srv.carbonads.net/ads/CEBI52QI.json?segment=placement:wwwmycompilerio&amp;callback=_carbonads_go"></script></head>



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
if(!isset($_SESSION['admin'])) {
  echo '<script type="text/javascript">setTimeout(function(){ location.href = "/admin/login.php" },0);</script>';
  die();
}

// if($user['level'] == "3") { } else {
// echo '<script type="text/javascript">setTimeout(function(){ location.href = "/404" },0);</script>';
//   die();
// }
?>