<?php
require("system.smarty.inc.php");
require("system.class.inc.php");
//数据库连接类实例化
$connobj=new ConnDB("mysql","localhost","root","root","db_database21",false);
$conn=$connobj->GetConnId();
//数据库操作类实例化
$admindb=new AdminDB();

$smarty=new SmartyProject();

?>