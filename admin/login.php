<?php session_start(); ?>
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
if(isset($_POST['submit'])) {
    $pass = $_POST['pass'];
    if($pass == 'kk98'){
        $_SESSION['admin'] = "soicoder";
	    die('<script type="text/javascript">swal("Thành Công","Đăng Nhập Thành Công","success");setTimeout(function(){ location.href = "/admin" },2000);</script>');
	} else {
	    die('<script type="text/javascript">swal("Thất Bại","Thông Tin Không Hợp Lệ","success");setTimeout(function(){ location.href = "/admin" },3000);</script>');
	}
}
?>
<div class="row mb-2">
    <div class="col-sm-12">
        <br>
       
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" action="" method="post">  
                    <div class="card-body">
                        <!-- user-->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nhập Mật Khẩu Admin</label>
                            <input type="text" class="form-control" name="pass" placeholder="*****">
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Đăng Nhập Ngay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<?php include('foot.php');?>