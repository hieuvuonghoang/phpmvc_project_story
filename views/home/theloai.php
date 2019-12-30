<?php
$tenTheLoai = $data['tenTheLoai'];
$dSTheLoai = $data['DSTheLoai'];
$dSSach = $data['DSSach'];
?>

<div class="row">
    <div class="col-md-9">
        <div class="panel panel-primary">
            <div class="panel-heading"><?php echo $tenTheLoai; ?></div>
            <div class="panel-body">
                <?php
                foreach ($dSSach as &$sach) {
                ?>
                    <div class="col-xs-6 col-md-3 col-sm-3 ebook">
                        <a href="#" class="thumbnail">
                            <img src="<?php if ($sach->LINKANHBIA == NULL) {
                                            echo "./assets/images/biaSachNull.jpg";
                                        } else {
                                            echo $sach->LINKANHBIA;
                                        }
                                        ?>" alt="<?php echo $sach->TENSACH; ?>">
                        </a>
                        <h5 class="tieude text-center"><a href="#"><?php echo $sach->TENSACH; ?></a></h5>
                    </div>
                <?php
                }
                ?>
                <div class="col-xs-12">
                    <ul class="pagination pagination-sm">
                        <li class="active"><span>1<span class="sr-only">(current)</span></span></li>
                        <li><a href="https://sachvui.com/the-loai/kinh-di-ma-quai.html/2" data-ci-pagination-page="2">2</a></li>
                        <li><a href="https://sachvui.com/the-loai/kinh-di-ma-quai.html/3" data-ci-pagination-page="3">3</a></li>
                        <li><a href="https://sachvui.com/the-loai/kinh-di-ma-quai.html/4" data-ci-pagination-page="4">4</a></li>
                        <li><a href="https://sachvui.com/the-loai/kinh-di-ma-quai.html/2" data-ci-pagination-page="2" rel="next">→</a></li>
                        <li><a href="https://sachvui.com/the-loai/kinh-di-ma-quai.html/7" data-ci-pagination-page="7">7</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 sidebar">
        <div class="panel panel-primary">
            <div class="panel-heading">Danh Ngôn Hay </div>
            <div class="panel-body"> Việc tốt nhất ở thế gian không gì bằng cứu người nguy cấp, thương kẻ khốn cùng. <br><br>

            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">Thể Loại Sách</div>
            <ul id="sidebar" class="nav nav-pills nav-stacked">
                <li>
                    <a href="https://sachvui.com/the-loai/tat-ca.html"><span class="glyphicon glyphicon-record"> </span> Tất Cả Sách</a>
                </li>
                <?php
                foreach ($dSTheLoai as &$theLoai) {
                ?>
                    <li>
                        <a href="index.php?controller=home&action=theLoai&theLoaiID=<?php echo $theLoai->THELOAIID; ?>"><span class="glyphicon glyphicon-record"> </span> <?php echo $theLoai->TENTHELOAI; ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>