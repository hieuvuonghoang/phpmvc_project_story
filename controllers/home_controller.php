<?php

require_once('controllers/base_controller.php');
require_once('models/DM_THELOAI.php');
require_once('models/HT_SACH.php');

class HomeController extends BaseController
{
    function __construct()
    {
        $this->folder = 'home';
    }

    public function index()
    {
        $data = array(
            'title' => 'Thư Viện Sách Miễn Phí - Đọc Truyện - Đọc Sách Online',
            'DSTheLoai' => DM_THELOAI::getDSTheLoai(),
            'mvcInfor' => ['home', 'index', array()],
        );
        $this->render('index', $data);
    }

    public function theLoai()
    {
        $theLoaiID = NULL;
        $tenTheLoai = NULL;
        if (isset($_GET['theLoaiID'])) {
            $theLoaiID = $_GET['theLoaiID'];
        }
        if (isset($theLoaiID)) {
            $dSTheLoai = DM_THELOAI::getDSTheLoai();
            $foundTheLoaiID = false;
            foreach ($dSTheLoai as &$theLoai) {
                if ($theLoai->THELOAIID == $theLoaiID) {
                    $foundTheLoaiID = true;
                    $tenTheLoai  = $theLoai->TENTHELOAI;
                    break;
                }
            }
            if($foundTheLoaiID == false) {
                $this->error();
                return;
            }
        }
        $data = array(
            'title' => 'Thư Viện Sách Miễn Phí - Đọc Truyện - Đọc Sách Online',
            'tenTheLoai' => isset($tenTheLoai) ? $tenTheLoai : "Tất Cả Sách",
            'DSTheLoai' => DM_THELOAI::getDSTheLoai(),
            'mvcInfor' => ['home', 'theLoai', array(
                'theLoaiID' => $theLoaiID,
            )],
            'DSSach' => HT_SACH::getSachByTheLoaiID($theLoaiID),
        );
        $this->render('theloai', $data);
    }

    public function about()
    {
        $data = array(
            'title' => 'Thư Viện Sách Miễn Phí - Đọc Truyện - Đọc Sách Online',
            'mvcInfor' => ['home', 'about', array(
            )],
        );
        $this->render('about', $data);
    }

    public function error()
    {
        $data = array(
            'title' => 'Thư Viện Sách Miễn Phí - Đọc Truyện - Đọc Sách Online',
            'mvcInfor' => ['home', 'error'],
        );
        $view_file = 'views/' . $this->folder . '/error.php';
        extract($data);
        require_once($view_file);
    }
}
