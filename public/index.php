<?php

$sysRoot = '/';

require_once $sysRoot . '/config.php';
require_once $sysRoot . '/Controller/dispatcher.php';

$dispatcher = new dispatcher($sysRoot);
$dispatcher->run();
