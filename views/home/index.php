<?php
$theLoais = $data['DSTheLoai'];
?>

<div class="jumbotron trangchu">
    <h2 class="text-center">Thư Viện Ebook Miễn Phí</h2>
    <p class="lead text-center"> Thư viện Sachvui.Com là dự án phi lợi nhuận,nhằm mục đích chia sẻ sách và đọc truyện online miễn phí vì cộng đồng. </p>
    <hr>
    <ul class="center-block row" style="list-style-type:none">
        <?php
        foreach ($theLoais as &$theLoai) {
        ?>
            <li class="cat-item col-xs-12 col-md-4 col-sm-6 p-bt-10">
                <a href="<?= @"index.php?controller=home&action=theLoai&theLoaiID=" . $theLoai->THELOAIID; ?>">
                    <span class="glyphicon glyphicon-folder-open m-r-10"></span>
                    <?php echo $theLoai->TENTHELOAI ?>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
    <p class="text-center" style="padding-top: 20px;">
        <a class="btn btn-lg btn-success btn-home" href="http://localhost:8080/phpmvc_project_story/index.php?controller=home&action=theLoai" role="button"> Tất Cả Sách</a>
    </p>
</div>