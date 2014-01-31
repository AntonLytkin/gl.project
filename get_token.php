<?php
include 'inc/settings.inc.php';

if (isset($_GET['code'])) {
    $params = array(
        'client_id' => CLIENT_ID,
        'client_secret' => CLIENT_SECRET,
        'code' => $_GET['code'],
        'redirect_uri' => REDIRECT_URI
    );

    $token = json_decode(file_get_contents(TOKEN.'?'.urldecode(http_build_query($params))), true);

    $_SESSION['token']=$token;

    header('Location:'.VIEW_URI);
    }else
        echo CONNECTION_ERROR;