<?php
// 解析数据插入数据库的方法
function xiaoqu($db, $table_xq, $house)
{
    $xiaoqu = $house->xiaoqu; // object
    $id = $xiaoqu->id;
    $borough_name = $xiaoqu->borough_name;
    $borough_letter = $xiaoqu->borough_letter;
    $borough_alias = $xiaoqu->borough_alias;
    $cityarea_id = $xiaoqu->cityarea_id;
    $cityarea2_id = $xiaoqu->cityarea2_id;
    $borough_section = $xiaoqu->borough_section;
    $borough_address = $xiaoqu->borough_address;
    $borough_type = $xiaoqu->borough_type;
    $nursery_school = $xiaoqu->nursery_school;
    $elementary_school = $xiaoqu->elementary_school;
    $middle_school = $xiaoqu->middle_school;
    $borough_thumb = $xiaoqu->borough_thumb;
    $sell_num = $xiaoqu->sell_num;
    $rent_num = $xiaoqu->rent_num;
    $sell_time = $xiaoqu->sell_time;
    $borough_avgprice = $xiaoqu->borough_avgprice;
    $borough_evaluate = $xiaoqu->borough_evaluate;
    $evaluate_time = $xiaoqu->evaluate_time;
    $percent_change = $xiaoqu->percent_change;
    $layout_drawing = $xiaoqu->layout_drawing;
    $layout_picture = $xiaoqu->layout_picture;
    $layout_map = $xiaoqu->layout_map;
    $click_num = $xiaoqu->click_num;
    $is_checked = $xiaoqu->is_checked;
    $creater = $xiaoqu->creater;
    $borough_developer_id = $xiaoqu->borough_developer_id;
    $sell_price = $xiaoqu->sell_price;
    $room_type = $xiaoqu->room_type;
    $sell_phone = $xiaoqu->sell_phone;
    $isnew = $xiaoqu->isnew;
    $is_promote = $xiaoqu->is_promote;
    $is_priceoff = $xiaoqu->is_priceoff;
    $isdel = $xiaoqu->isdel;
    $created = $xiaoqu->created;
    $updated = $xiaoqu->updated;
    $video = $xiaoqu->video;
    $borough_nid = $xiaoqu->borough_nid;
    $lat = $xiaoqu->lat;
    $lng = $xiaoqu->lng;
    $borough_properties = $xiaoqu->borough_properties;
    $huanxian = $xiaoqu->huanxian;
    $city_id = $xiaoqu->city_id;
    $borough_sell_tag = $xiaoqu->borough_sell_tag;
    $borough_rent_tag = $xiaoqu->borough_rent_tag;
    $borough_developer = $xiaoqu->borough_developer;
    $borough_company = $xiaoqu->borough_company;
    $borough_costs = $xiaoqu->borough_costs;
    $borough_totalarea = $xiaoqu->borough_totalarea;
    $borough_area = $xiaoqu->borough_area;
    $borough_green = $xiaoqu->borough_green;
    $borough_volume = $xiaoqu->borough_volume;
    $borough_parking = $xiaoqu->borough_parking;
    $borough_number = $xiaoqu->borough_number;
    $borough_completion = $xiaoqu->borough_completion;
    $borough_support = $xiaoqu->borough_support;
    $borough_bus = $xiaoqu->borough_bus;
    $borough_shop = $xiaoqu->borough_shop;
    $borough_hospital = $xiaoqu->borough_hospital;
    $borough_bank = $xiaoqu->borough_bank;
    $borough_dining = $xiaoqu->borough_dining;
    $borough_sight = $xiaoqu->borough_sight;
    $borough_content = $xiaoqu->borough_content;
    $project_site = $xiaoqu->project_site;
    $company_site = $xiaoqu->company_site;
    $sale_office = $xiaoqu->sale_office;
    $sale_licence = $xiaoqu->sale_licence;
    $borough_louzuo = $xiaoqu->borough_louzuo;
    $cityarea_name = $xiaoqu->cityarea_name;

    if ($id == '') {
        echo $id . " xiaoqu数据为空<br>";
    } else {

        $insert_string = array(

            // 'id' => $id,
            'xq_id' => $id,
            'borough_name' => $borough_name,
            'borough_letter' => $borough_letter,
            'borough_alias' => $borough_alias,
            'cityarea_id' => $cityarea_id,
            'cityarea2_id' => $cityarea2_id,
            'borough_section' => $borough_section,
            'borough_address' => $borough_address,
            'borough_type' => $borough_type,
            'nursery_school' => $nursery_school,
            'elementary_school' => $elementary_school,
            'middle_school' => $middle_school,
            'borough_thumb' => $borough_thumb,
            'sell_num' => $sell_num,
            'rent_num' => $rent_num,
            'sell_time' => $sell_time,
            'borough_avgprice' => $borough_avgprice,
            'borough_evaluate' => $borough_evaluate,
            'evaluate_time' => $evaluate_time,
            'percent_change' => $percent_change,
            'layout_drawing' => $layout_drawing,
            'layout_picture' => $layout_picture,
            'layout_map' => $layout_map,
            'click_num' => $click_num,
            'is_checked' => $is_checked,
            'creater' => $creater,
            'borough_developer_id' => $borough_developer_id,
            'sell_price' => $sell_price,
            'room_type' => $room_type,
            'sell_phone' => $sell_phone,
            'isnew' => $isnew,
            'is_promote' => $is_promote,
            'is_priceoff' => $is_priceoff,
            'isdel' => $isdel,
            'created' => $created,
            'updated' => $updated,
            'video' => $video,
            'borough_nid' => $borough_nid,
            'lat' => $lat,
            'lng' => $lng,
            'borough_properties' => $borough_properties,
            'huanxian' => $huanxian,
            'city_id' => $city_id,
            'borough_sell_tag' => $borough_sell_tag,
            'borough_rent_tag' => $borough_rent_tag,
            'borough_developer' => $borough_developer,
            'borough_company' => $borough_company,
            'borough_costs' => $borough_costs,
            'borough_totalarea' => $borough_totalarea,
            'borough_area' => $borough_area,
            'borough_green' => $borough_green,
            'borough_volume' => $borough_volume,
            'borough_parking' => $borough_parking,
            'borough_number' => $borough_number,
            'borough_completion' => $borough_completion,
            'borough_support' => $borough_support,
            'borough_bus' => $borough_bus,
            'borough_shop' => $borough_shop,
            'borough_hospital' => $borough_hospital,
            'borough_bank' => $borough_bank,
            'borough_dining' => $borough_dining,
            'borough_sight' => $borough_sight,

            // 'borough_content' => $borough_content,
            'borough_content' => base64_encode($borough_content),
            'project_site' => $project_site,
            'company_site' => $company_site,
            'sale_office' => $sale_office,
            'sale_licence' => $sale_licence,
            'borough_louzuo' => $borough_louzuo,
            'cityarea_name' => $cityarea_name
        );

        $a = $db->insert($table_xq, $insert_string);
        if ($a == false) {
            echo $id . " INSERT NO<br>";
        } else {
            // echo $id . " INSERT YES<br>";
        }
    }
}

function xiaoqutupian($db, $table_img, $house)
{
    $xiaoqutupian = $house->xiaoqutupian; // array 小区
    $arrlength = count($xiaoqutupian);
    // echo '<br>xiaoqutupian count = ' . $arrlength;
    for ($x = 0; $x < $arrlength; $x++) {
        $xqtp = $xiaoqutupian [$x];

        $id = $xqtp->id;
        $pic_url = $xqtp->pic_url;
        $pic_thumb = $xqtp->pic_thumb;
        $pic_desc = $xqtp->pic_desc;
        $houserent_id = $xqtp->houserent_id;
        $borough_id = $xqtp->borough_id;
        $creater = $xqtp->creater;
        $addtime = $xqtp->addtime;
        $city_id = $xqtp->city_id;

        // 插入数据
        $insert_string = array(

            // 'id' => $id,
            'img_id' => $id,
            'pic_url' => $pic_url,
            'pic_thumb' => $pic_thumb,
            'pic_desc' => $pic_desc,
            'houserent_id' => $houserent_id,
            'borough_id' => $borough_id,
            'creater' => $creater,
            'creater' => $addtime,
            'city_id' => $city_id
        );
        $a = $db->insert($table_img, $insert_string);
        if ($a == false) {
            echo $id . " INSERT NO<br>";
        } else {
            // echo $id . " INSERT YES<br>";
        }
    }
}

function tupian($db, $table_img, $house)
{
    $tupian = $house->tupian; // array 图片
    $arrlength = count($tupian);
    // echo '<br>tupian count = ' . $arrlength;
    for ($x = 0; $x < $arrlength; $x++) {
        $tp = $tupian [$x];
        $id = $tp->id;
        $pic_url = $tp->pic_url;
        $pic_thumb = $tp->pic_thumb;
        $pic_desc = $tp->pic_desc;
        $houserent_id = $tp->houserent_id;
        $borough_id = $tp->borough_id;
        $creater = $tp->creater;
        $addtime = $tp->addtime;
        $city_id = $tp->city_id;
        // 插入数据
        $insert_string = array(

            // 'id' => $id,
            'img_id' => $id,
            'pic_url' => $pic_url,
            'pic_thumb' => $pic_thumb,
            'pic_desc' => $pic_desc,
            'houserent_id' => $houserent_id,
            'borough_id' => $borough_id,
            'creater' => $creater,
            'creater' => $addtime,
            'city_id' => $city_id
        );
        $a = $db->insert($table_img, $insert_string);
        if ($a == false) {
            echo $id . " INSERT NO<br>";
        } else {
            // echo $id . " INSERT YES<br>";
        }
    }
}

function rentxiangqing($db, $table_rent, $house)
{
    $nearby = $house->nearby; // object
    $subway = $nearby->subway;
    $line = $nearby->line;
    $rentxiangqing = $house->rentxiangqing;
    // echo "Array size with count: ".count($rentxiangqing).'<br>';
    $rent = $rentxiangqing [0];
    // print_r($rent);
    $id = $rent->id;
    $broker_id = $rent->broker_id;
    $city_id = $rent->city_id;
    $owner_name = $rent->owner_name;
    $piancha = $rent->piancha;
    $house_type = $rent->house_type;
    $house_deposit = $rent->house_deposit;
    $owner_phone = $rent->owner_phone;
    $cityarea_id = $rent->cityarea_id;
    $cityarea2_id = $rent->cityarea2_id;
    $fukuan_type = $rent->fukuan_type;
    $house_no = $rent->house_no;
    $house_price = $rent->house_price;
    $house_room = $rent->house_room;
    $house_hall = $rent->house_hall;
    $house_fitment = $rent->house_fitment;
    $borough_id = $rent->borough_id;
    $borough_name = $rent->borough_name;
    $house_thumb = $rent->house_thumb;
    $updated = $rent->updated;
    $canlive = $rent->canlive;
    $house_way = $rent->house_way;
    $house_desc = $rent->house_desc;
    $house_floor = $rent->house_floor;
    $house_topfloor = $rent->house_topfloor;
    $house_totalarea = $rent->house_totalarea;
    $rental_area = $rent->rental_area;
    $house_toward = $rent->house_toward;
    $house_support = $rent->house_support;
    $house_feature = $rent->house_feature;
    $house_age = $rent->house_age;
    $click_num = $rent->click_num;
    $vedio_id = $rent->vedio_id;
    $cityarea_name = $rent->cityarea_name;
    $cityarea2_name = $rent->cityarea2_name;
    $title = $rent->title;
    $lat = $rent->lat;
    $lng = $rent->lng;
    $tags_ids = '';
    $tags_id = $rent->tags_id;
    $arrlength = count($tags_id);
    for ($x = 0; $x < $arrlength; $x++) {
        $tags_ids = $tags_ids . $tags_id [$x] . ",";
    }
    if ($id == '') {
        echo $id . " rentxiangqing数据为空<br>";
    } else {
        // 插入数据库
        $insert_string = array(

            // 'id' => $id,
            'house_id' => $id,
            'broker_id' => $broker_id,
            'city_id' => $city_id,
            'owner_name' => $owner_name,
            'piancha' => $piancha,
            'house_type' => $house_type,
            'house_deposit' => $house_deposit,
            'owner_phone' => $owner_phone,
            'cityarea_id' => $cityarea_id,
            'cityarea2_id' => $cityarea2_id,
            'fukuan_type' => $fukuan_type,
            'house_no' => $house_no,
            'house_price' => $house_price,
            'house_room' => $house_room,
            'house_hall' => $house_hall,
            'house_fitment' => $house_fitment,
            'borough_id' => $borough_id,
            'borough_name' => $borough_name,
            'house_thumb' => $house_thumb,
            'updated' => $updated,
            'canlive' => $canlive,
            'house_way' => $house_way,

            // 'house_desc' => $house_desc,
            'house_desc' => base64_encode($house_desc),
            'house_floor' => $house_floor,
            'house_topfloor' => $house_topfloor,
            'house_totalarea' => $house_totalarea,
            'rental_area' => $rental_area,
            'house_toward' => $house_toward,
            'house_support' => $house_support,
            'house_feature' => $house_feature,
            'house_age' => $house_age,
            'click_num' => $click_num,
            'vedio_id' => $vedio_id,
            'cityarea_name' => $cityarea_name,
            'cityarea2_name' => $cityarea2_name,
            'title' => $title,
            'lat' => $lat,
            'lng' => $lng,
            'tags_id' => $tags_ids,
            'subway' => $subway,
            'line' => $subway
        );
        $a = $db->insert($table_rent, $insert_string);
        if ($a == false) {
            echo $id . " INSERT NO<br>";
        } else {
            // echo $id . " INSERT YES<br>";
        }
    }
}