<?php
include 'inc/settings.inc.php';
if(!empty($_SESSION))
session_destroy();
$params = array('client_id' => CLIENT_ID, 'redirect_uri' => REDIRECT_URI, 'response_type' => 'code');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=TITLE?></title>
    <meta charset="windows-1251" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="divbutton">
  <div>
    <a href="<?=URL?>?<?=urldecode(http_build_query($params))?>">
        <img src="img/button.jpg">
    </a>
  </div>
</div>

</body>
</html>