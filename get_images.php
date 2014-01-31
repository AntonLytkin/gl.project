<?php
$token=$_SESSION['token'];

$params = array(
    'counters'	=> 'friends',
    'access_token' => $token['access_token']

);

$friends = json_decode(file_get_contents(FRIENDS.'?'.urldecode(http_build_query($params))), true);

$num_friends = count($friends['response']);
if($num_friends<=F_COUNT)
    $offset=0;
else{
    $max_offset=$num_friends-F_COUNT;
    $offset=rand(0, $max_offset);
}

$params = array(
    'user_id'	=> $token['user_id'],
    'count'	=> F_COUNT,
    'offset'       => $offset,
    'fields'       => PHOTO,
    'access_token' => $token['access_token']

);

$userInfo = json_decode(file_get_contents(FRIENDS.'?'.urldecode(http_build_query($params))), true);