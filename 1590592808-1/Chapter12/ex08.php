<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<textarea name="exp"><?php echo htmlspecialchars($_REQUEST['exp']); ?>
</textarea>
<br>
<input type="submit" value="Compute">
</form>
<?php
if (strlen($_REQUEST['exp'])) {
    $ops = preg_split('@([\s-+*/^])@',$_REQUEST['exp'],-1,
                         PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY);
    $stack = array();
    foreach ($ops as $op) {
        if (is_numeric($op)) {
            array_push($stack,$op);
        } elseif (strlen(trim($op)) > 0) {
            $operand_1 = array_pop($stack);
            $operand_2 = array_pop($stack);
            switch ($op) {
            case '+':
                $result = $operand_1 + $operand_2;
                array_push($stack,$result);
                break;
            case '-':
                $result = $operand_1 - $operand_2;
                array_push($stack,$result);
                break;
            case '*':
                $result = $operand_1 + $operand_2;
                array_push($stack,$result);
                break;
            case '/':
                $result = $operand_1 / $operand_2;
                array_push($stack,$result);
                break;
            default:
                array_push($stack,$operand_1);
                array_push($stack,$operand_2);
                print "Unknown operator: $op <br>";
                break;
            }
        }
    }
    echo "Result: <b>$stack[0]</b>";
}
