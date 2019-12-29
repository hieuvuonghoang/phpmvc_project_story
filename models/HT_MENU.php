<?php

class HT_MENU
{
  public $MENUID;
  public $TENMENU;
  public $LINKMENU;
  public $CAP;
  public $MENUCHAID;

  function __construct($MENUID, $TENMENU, $LINKMENU, $CAP, $MENUCHAID)
  {
    $this->MENUID = $MENUID;
    $this->TENMENU = $TENMENU;
    $this->LINKMENU = $LINKMENU;
    $this->CAP = $CAP;
    $this->MENUCHAID = $MENUCHAID;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM HT_MENU');

    foreach ($req->fetchAll() as $item) {
      $list[] = new HT_MENU($item['MENUID'], $item['TENMENU'], $item['LINKMENU'], $item['CAP'], $item['MENUCHAID']);
    }

    return $list;
  }
}
