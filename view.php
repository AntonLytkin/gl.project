<?php
include 'inc/settings.inc.php';
include 'get_images.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=TITLE?></title>
    <meta charset="windows-1251" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php

$next=0;

for($t=1; $t<=5; $t++){

    echo "<div id='divimg'>";

        for($j=0; $j<5; $j++){
            $img=$userInfo['response'][$j+$next][PHOTO];
            if(!empty($img))
            echo "<img src='glitch.php?photo=$img'>";
    }

    echo "</div>";
    $next=$t*5;
}
?>
<hr>
<div class="foot">
    <div class="footl"><a href="<?=INDEX_URI?>"><img src="img/back-button.gif"></a></div>
    <div class="footc"><h2><a class="link" href="<?=VIEW_URI?>"><?=FOOT_LINK?></a></h2></div>
    <div class="footr"><a href=#><img src="img/up-button.gif"></a></div>
</div>
</body>
</html>