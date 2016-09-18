<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require '../libs/Smarty.class.php';
require dirname(__FILE__) . '/controllers/SensorsController.php';

$smarty = new Smarty;
$controller = new SensorsController();

//$smarty->force_compile = true;
//$smarty->debugging = false;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;

$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'view';

switch($_action) {
    case 'update':
        $smarty->assign("sensors", $controller->index());
        break;
    case 'view':
    default:
        $smarty->assign("sensors", $controller->index());
        break;
}

$smarty->display('index.tpl');
