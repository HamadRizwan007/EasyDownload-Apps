<?php
// $app_id =  $_POST['id'];
// $app_id =  'com.vpn4games.android';
$app_id =  'com.rockers.mastvpn';
$result = file_get_contents("http://appsvista.com/playstore_api/playstore_api.php?appid=".$app_id);
// $result = file_get_contents("http://appsvista.com/playstore_api/playstore_api.php?appid=com.miniclip.cricketleague");
echo ($result); 
if ($result != 'error nknksd')
{
    $arr = unserialize(urldecode($result));
 
    // print_r($arr);
    // $data['id'] = $arr['app_id'];
    // $data['name'] = $arr['app_title'];
    // echo json_encode($data);

    $data['app_title'] = $arr['app_title'];
    $data['app_version'] = $arr['app_version'];
    $data['app_developer'] = $arr['app_developer'];
    $data['updated_date'] = $arr['updated_date'];
    $data['created_date'] = $arr['created_date'];
    $data['app_icon'] = $arr['app_icon'];
    $data['screen_shots'] = $arr['screen_shots'];
    $data['app_rating'] = $arr['app_rating'];
    $data['app_version'] = $arr['app_version'];
    $data['app_description'] = $arr['app_description'];
    $data['app_votes'] = $arr['app_votes'];
    $data['screen_shots'] = $arr['screen_shots'];
    $data['app_nature'] = $arr['app_nature'];
    $data['app_installs'] = $arr['app_installs'];
    $data['app_category'] = $arr['app_category'];

    echo json_encode($data);
}

?>