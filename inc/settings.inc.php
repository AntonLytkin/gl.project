<?php
session_start();
define('CLIENT_ID', '4148428'); // ID приложения
define('CLIENT_SECRET', '7ihhqhbUsFiosQZ9VdWw'); // Защищённый ключ
define('INDEX_URI', "http://$_SERVER[HTTP_HOST]/glitch/");
define('REDIRECT_URI', "http://$_SERVER[HTTP_HOST]/glitch/get_token.php"); //
define('VIEW_URI', "http://$_SERVER[HTTP_HOST]/glitch/view.php");
define('URL', 'http://oauth.vk.com/authorize');
define('TOKEN', 'https://oauth.vk.com/access_token');
define('FRIENDS', 'https://api.vk.com/method/friends.get');
define('F_COUNT', 25);
define('PHOTO', 'photo_big');
define('CONNECTION_ERROR', 'Невозможно подключиться к серверу vk!');
define('TITLE', 'Глитч-арт аватарок друзей вконтакте!');
define('FOOT_LINK', 'REGLITCH EM!');