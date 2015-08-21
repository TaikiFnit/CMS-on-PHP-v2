<?php

$sysRoot = 'C:xampp/htdocs/CMS-on-PHP-v2';

require_once $sysRoot . '/config.php';
require_once $sysRoot . '/Controller/dispatcher.php';

$dispatcher = new dispatcher($sysRoot);
$dispatcher->run();
