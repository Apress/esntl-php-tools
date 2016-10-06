define('SMARTY_DIR','/usr/lib/php/smarty/');
require SMARTY_DIR.'Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir = SMARTY_DIR.'templates/';
$smarty->compile_dir = SMARTY_DIR.'templates_c/';
$smarty->config_dir = SMARTY_DIR.'configs/';
$smarty->cache_dir = SMARTY_DIR.'cache/';
