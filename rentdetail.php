<?php
require_once("config_base.php");
$dbs = new DB ();
$table_name = 'wwwdd'; // 数据表名称

$url = 'http://www.fangaaa.com/iosapp/rent/rentdetail.php';

$start = 5091559;

get_data($dbs, $table_name, $url, $start);
function get_data($dbs, $table_name, $url, $house_id)
{
    $create_time = date("Y-m-d H:i:s");

    echo $create_time . "开始执行" . $house_id . "<br>";


    $post_string = array(
        'nearby[0]' => 'subway',
        'nearby[1]' => 'distance',
        'member_id' => '-1',
        'house_id' => $house_id
    );

    $result_string = request_by_curl($url, $post_string);

    if (empty ($result_string)) {
        echo "数据为空 <br>";
    } else {
        if (checkstr($result_string, $house_id + '')) {
            echo "数据正确 <br>";

            $insert_string = array(
                'house_id' => $house_id,
                'create_time' => $create_time,
                'base64_encode' => base64_encode($result_string)
            );
            $a = $dbs->insert($table_name, $insert_string);
            echo "<br>";
            echo $a;
            if ($a == false) {
                echo "插入失败<br>";
            }
        } else {
            echo "数据异常 <br>";
        }
        // echo $result_string;
        // $arr=json_decode($result_string);//再进行json解码
        // print_r($arr);//打印解码后的数组，数据存储在对象数组中
    }
}

/* 判断字符包含 */
function checkstr($str, $needle)
{
    $tmparray = explode($needle, $str);
    if (count($tmparray) > 1) {
        return true;
    } else {
        return false;
    }
}

/* 联网请求 */
function request_by_curl($remote_server, $post_string)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $remote_server);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Android");
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}



