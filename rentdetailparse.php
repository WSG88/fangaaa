<?php
header('Content-Type:text/html; charset=utf-8');
error_reporting('E_ERROR'); // 错误等级提示 E_ALL
require_once("config_insert_db.php");
require_once("config_base.php");
include_once './bm/test.php';

$hid = 4351622; // 1257615 bj
$count = 1257615;

$hid = 4378788; // 337117 cd
$count = 1257615;

$hid = 4876611; // 77843 sh
$count = 1257615;

$hid = 4209229; // 478757 tj
$count = 1257615;

$hid = 4353665; // 782023 wh
$count = 1257615;

$hid = 4079431; // 46427 sy
$count = 1257615;

$count = 100;

for ($x = $hid; $x <= $hid + $count; $x++) {
    echo date('Y-m-d H:i:s', time());
    echo '<br>';
    echo "数字是：$x <br>";
    // sleep(1);
    // usleep(1*1000*1000);
    usleep(50 * 1000);
    echo date('Y-m-d H:i:s', time());
    echo '<br>';
}

insert_data($hid);
function insert_data($hid)
{
    $sql = "SELECT * FROM a_sanya_rent where id = " . $hid;
    // echo $sql;echo '<br>';
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
        // echo gettype($row) ;echo '<br>';
        // var_dump($row);echo '<br>';
        $hid = $row ['id'];

        echo $hid;
        echo '<br>';

        $owner_name = $row ['owner_name'];
        $owner_phone = $row ['owner_phone'];
        $house_type = $row ['house_type'];
        $house_deposit = $row ['house_deposit'];
        $house_no = $row ['house_no'];
        $house_price = $row ['house_price'];
        $house_room = $row ['house_room'];
        $house_hall = $row ['house_hall'];
        $house_fitment = $row ['house_fitment'];
        $house_thumb = $row ['house_thumb'];
        $house_floor = $row ['house_floor'];
        $house_topfloor = $row ['house_topfloor'];
        $house_totalarea = $row ['house_totalarea'];
        $rental_area = $row ['rental_area'];
        $house_toward = $row ['house_toward'];
        $house_age = $row ['house_age'];
        $city_id = $row ['city_id'];
        $cityarea_id = $row ['cityarea_id'];
        $cityarea2_id = $row ['cityarea2_id'];
        $borough_id = $row ['borough_id'];
        $borough_name = $row ['borough_name'];
        $cityarea_name = $row ['cityarea_name'];
        $cityarea2_name = $row ['cityarea2_name'];

        $bmobObj = new BmobObject ("a_sanya_rent");
        $ress = array(
            "hid" => $hid,
            "owner_name" => $owner_name,
            "owner_phone" => $owner_phone, //
            // ,"house_type"=>$house_type,"house_deposit"=>$house_deposit,"house_fitment"=>$house_fitment
            "house_no" => $house_no,
            "house_price" => $house_price, //
            "house_room" => $house_room,
            "house_hall" => $house_hall, //
            "house_thumb" => $house_thumb, //
            "house_floor" => $house_floor,
            "house_topfloor" => $house_topfloor, //
            "house_totalarea" => $house_totalarea,
            "rental_area" => $rental_area, //
            "house_toward" => $house_toward,
            "house_age" => $house_age, //
            "city_id" => $city_id,
            "borough_id" => $borough_id,
            "borough_name" => $borough_name, //
            // ,"cityarea_id"=>$cityarea_id,"cityarea2_id"=>$cityarea2_id//
            "cityarea_name" => $cityarea_name,
            "cityarea2_name" => $cityarea2_name
        ) //
        ;
        // var_dump($ress);
        // echo '<br>';

        $res = $bmobObj->create($ress);
        var_dump($res);
        echo '<br>';
    }
}

echo '<br>----------------------------------结束----------------------------------<br>';

