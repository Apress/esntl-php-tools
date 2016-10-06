$basedir = '/usr/local/share/textfiles';
// canonicalize pathname
$file = realpath($basedir.$_SERVER['PATH_INFO']);
// make sure $file is readable, is actually a file (not a directory)
// and is under $basedir (no ../.. stuff in PATH_INFO)
if (is_readable($file) && is_file($file) && preg_match("@^$basedir/@",$file)) {
    $smarty->assign('file',$file);
}
$smarty->display('fetch.tpl');
