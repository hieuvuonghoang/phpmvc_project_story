<?php

class HT_SACH
{
    public $SACHID;
    public $TENSACH;
    public $LUOTXEM;
    public $LUOTTHICH;
    public $LINKANHBIA;
    public $TACGIA;
    public $THELOAIID;

    function __construct($SACHID, $TENSACH, $LUOTXEM, $LUOTTHICH, $LINKANHBIA, $TACGIA, $THELOAIID)
    {
        $this->SACHID = $SACHID;
        $this->TENSACH = $TENSACH;
        $this->LUOTXEM = $LUOTXEM;
        $this->LUOTTHICH = $LUOTTHICH;
        $this->LINKANHBIA = $LINKANHBIA;
        $this->TACGIA = $TACGIA;
        $this->THELOAIID = $THELOAIID;
    }

    public static function all()
    {
        $dSSach = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM HT_SACH ORDER BY LUOTXEM ASC;');
        foreach ($req->fetchAll() as $item) {
            $dSSach[] = new HT_SACH($item['SACHID'], $item['TENSACH'], $item['LUOTXEM'], $item['LUOTTHICH'], $item['LINKANHBIA'], $item['TACGIA'], $item['THELOAIID']);
        }
        return $dSSach;
    }

    public static function getSachByTheLoaiID($theLoaiID = NULL)
    {
        $dSSach = [];
        if (isset($theLoaiID)) {
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM HT_SACH WHERE THELOAIID = \'' . $theLoaiID . '\' ORDER BY LUOTXEM ASC;');
            foreach ($req->fetchAll() as $item) {
                $dSSach[] = new HT_SACH($item['SACHID'], $item['TENSACH'], $item['LUOTXEM'], $item['LUOTTHICH'], $item['LINKANHBIA'], $item['TACGIA'], $item['THELOAIID']);
            }
        } else {
            $dSSach = HT_SACH::all();
        }
        return $dSSach;
    }
}
