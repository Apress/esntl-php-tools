require 'adodb/rsfilter.inc.php';
setlocale(LC_MONETARY,'en_US');
$rs = $conn->Execute('SELECT flavor,calories,price FROM ice_cream');
$rs = RSFilter($rs,'fix_price');
function fix_price(&$ar,$rs) { $ar[2] = money_format('%.2n',$ar[2]); }
