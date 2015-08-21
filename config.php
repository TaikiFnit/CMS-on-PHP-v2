<?php

// DB接続に必要な設定
define('DB_NAME', 'ircnews');
define('DSN', 'mysql:host=localhost;dbname=' . DB_NAME);
define('DB_USER', 'irc_user');
define('DB_PASSWORD', 'irc_password');

error_reporting(E_ALL & ~E_NOTICE);

// DBのteam番号に対応したチーム名とその画像
const TEAMSCLASS = array('irc', 'hard', 'soft', 'web');
const TEAMSNAME = array('IRC', "ハード班", "ソフト班", "ウェブ班");
const TEAMSIMG = array('/images/irc.jpg', '/images/irc.jpg', '/images/irc.jpg', '/images/irc.jpg');
