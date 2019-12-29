<?php

class DM_THELOAI
{
  private static $DSTheLoai = NULL;
  public $THELOAIID;
  public $TENTHELOAI;

  function __construct($THELOAIID, $TENTHELOAI)
  {
    $this->THELOAIID = $THELOAIID;
    $this->TENTHELOAI = $TENTHELOAI;
  }

  public static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM DM_THELOAI ORDER BY TENTHELOAI ASC;');

    foreach ($req->fetchAll() as $item) {
      $list[] = new DM_THELOAI($item['THELOAIID'], $item['TENTHELOAI']);
    }

    return $list;
  }

  public static function getDSTheLoai()
  {
    if (!isset(self::$DSTheLoai)) {
      try {
        self::$DSTheLoai = self::all();
      } catch (PDOException $ex) {
        die($ex->getMessage());
      }
    }
    return self::$DSTheLoai;
  }
  
}
