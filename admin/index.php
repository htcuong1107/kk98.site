<?php session_start(); ?>
<?php include('head.php');?>
<?php require_once('nav.php');?>
<?php
if(isset($_POST['submit'])) {
    $link = $_POST['link'];
    // $row = mysqli_fetch_assoc(mysqli_query($ketnoi,"SELECT * FROM `link` WHERE `link-goc` = '$link'"));
    // if($row){
    //     die('<script type="text/javascript">swal("Thất Bại","Link Này Đã Được Thêm Vào","error");setTimeout(function(){ location.href = "/admin" },3000);</script>');
    // }
    $link_boc = random("AJDHESslsllpqJzmakjFYEOTPWuelalpwsmcdlslsQNAXNZCVBMKSOAQWERTYUP12345678900403291981939385489", 10);
    $link_boc_2 = random("AJDHESslsllpqJzmakjFYEOTPWuelalpwsmcdlslsQNAXNZCVBMKSOAQWERTYUP12345678900403291981939385489", 10);
    $check = $ketnoi->query("INSERT INTO `link` SET 
            `link-boc` = '$link_boc',
            `link-boc-2` = '$link_boc_2',
            `link-goc` = '$link',
            `dem` = '0',
            `time` = '$time'
            ");
    if($check){
	    die('<script type="text/javascript">swal("Thành Công","Thêm Link Thành Công","success");setTimeout(function(){ location.href = "/admin" },3000);</script>');
	} else {
	    die('<script type="text/javascript">swal("Thất Bại","Thông Tin Không Hợp Lệ","success");setTimeout(function(){ location.href = "/admin" },3000);</script>');
	}
}

if(isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    mysqli_query($ketnoi,"DELETE FROM `link` WHERE `id` = '$id' ");
    echo '<script type="text/javascript">swal("Thành Công","Xóa Thành Công","success"); setTimeout(function(){ location.href = "/admin" },2000);</script>';
    die;
}
if(isset($_GET['xoaall'])) {
    $id = $_GET['xoa'];
    mysqli_query($ketnoi,"DELETE FROM `link` ");
    echo '<script type="text/javascript">swal("Thành Công","Xóa Tất Cả Thành Công","success"); setTimeout(function(){ location.href = "/admin" },2000);</script>';
    die;
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
            <div class="card-header">
                <h3 class="card-title">THÊM LINK</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="" method="post">  
                    <div class="card-body">
                        <!-- user-->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Link Cần Bọc</label>
                            <input type="text" class="form-control" name="link" placeholder="http://....">
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Thêm Ngay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <section class="col-lg-12 connectedSortable">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">TẤT CẢ CÁC LINK ĐÃ TẠO</h3>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Link Bọc 1</th>
                                    <!--<th>Link Bọc 2</th>-->
                                    <th>Link Gốc</th>
                                    <th>Lượt Click</th>
                                    <th>Time</th>
                                    <th>Thao Tác</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $i = 1;
                            $note = mysqli_query($ketnoi,"SELECT * FROM `link` ORDER BY id desc limit 0, 1000 ");
                            while($row1 = mysqli_fetch_array($note)) {
                                $text = 'onclick="copy('."'https://one6.site/".$row1['link-boc']."'".")".'"';
                                
                            ?>
                                <tr>
                                    <td class="text-center"><pre><?=$i++;?></pre></td>
                                    <td class="text-center" id="link<?=$row1['id'];?>"><pre>https://<?=$ten_web;?>/<?=$row1['link-boc'];?></pre></td>
                                    <!--<td class="text-center"><pre>https://<?=$ten_web;?>/r2.php?u=<?=$row1['link-boc-2'];?></pre></td>-->
                                    <td class="text-center"><pre><?=$row1['link-goc'];?></pre></td>
                                    <td class="text-center"><pre><?=$row1['dem'];?></pre></td>
                                    <td class="text-center"><pre><?=$row1['time'];?></pre></td>
                                    <td><button class="btn btn-info btn-sm" name="copy" onclick="copy('#link<?=$row1['id'];?>')">Copy</button></td>
                                    <td class="text-center"><a type="button" class="btn btn-danger btn-sm" href="/admin/?xoa=<?=$row1['id'];?>"> </i>DELETE</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <a type="button" class="btn btn-danger btn-sm" href="/admin/?xoaall=on"> </i>DELETE ALL</a>
                </div>
            </div>
    </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(function () {
            $("#datatable2").DataTable({
                "responsive": false,
                "autoWidth": false,
            });
    });
    function copy(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        swal("Thành Công", "Sao Chép Thành Công", "success");
        $temp.remove();
}
</script>
<?php include('foot.php');?>