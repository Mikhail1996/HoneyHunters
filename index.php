<?php

include_once('config.php');

$params = '';
$action = 'action_index';

$controller = new C_Index();

$controller->Request($action, $params);

?>