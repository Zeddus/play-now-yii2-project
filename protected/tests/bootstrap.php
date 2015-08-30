<?php

// change the following paths if necessary
$yiit='C:\WebServers\home\play-now.ua\www\framework\yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
