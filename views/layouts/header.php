<?php
$DSTheLoai = DM_THELOAI::getDSTheLoai();
$controller = $data['mvcInfor'][0];
$action = $data['mvcInfor'][1];
$arrayParameters = $data['mvcInfor'][2];
?>
<div class="header clearfix">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SachVui.Com</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php if ($action == "index") echo "active"; ?>"><a href="index.php">Trang Chủ</a></li>
                    <li class="dropdown <?php if ($action == "theLoai") echo "active"; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thể Loại Sách <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?controller=home&action=theLoai">Tất Cả Sách</a></li>
                            <?php
                            foreach ($DSTheLoai as &$theLoai) {
                            ?>
                                <li class="<?php
                                            if (array_key_exists('theLoaiID', $arrayParameters) && $arrayParameters['theLoaiID'] == $theLoai->THELOAIID) {
                                                echo "active";
                                            }
                                            ?>">
                                    <a href="<?= @"index.php?controller=home&action=theLoai&theLoaiID=" . $theLoai->THELOAIID; ?>"><?= @$theLoai->TENTHELOAI; ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="<?php if ($action == "about") echo "active"; ?>">
                        <a href="index.php?controller=home&action=about">Về chúng tôi</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="search" method="get" action="https://sachvui.com/search/">
                    <div class="input-group"> <input type="text" class="form-control" placeholder="Tìm kiếm" name="tu-khoa">
                        <div class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </nav>
</div>

<div class="alert alert-success" role="alert"> <b>NÊN</b> sao chép, chia sẻ, <b>KHÔNG NÊN</b> thương mại hoá.</div>