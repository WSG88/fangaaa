<?php
// 基类配置信息
header('Content-Type:text/html; charset=utf-8');

error_reporting('E_ALL'); // 错误等级提示 E_ALL,E_ERROR

ini_set('display_errors', "On");
ini_set('max_execution_time', 0);
ini_set("memory_limit", "5068M");

require_once("class.mysql.php");
require_once("class.db.php");

date_default_timezone_set('PRC');

$con = mysql_connect("localhost", "root", "root");
if (!$con) {
    die ('Could not connect: ' . mysql_error());
}
mysql_query("set names utf8"); // 编码转化

mysql_select_db("fangaaa", $con);

