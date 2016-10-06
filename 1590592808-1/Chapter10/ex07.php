require 'Auth/Auth.php';
$opts = array('table' => 'users',
              'dsn' => 'mysql://phpgems:phpgems1@localhost/phpgems');
function custom_login($username = null,$status = null) {
    // If a username was passed in, encode any special
    // characters to prevent a cross-site scripting attack
    if (! is_null($username)) { $username = htmlspecialchars($username); }
    // Create a status message if $status is set
    if (! is_null($status)) {
        if ($status == AUTH_WRONG_LOGIN) {
            $status_msg = 'Incorrect username or password.';
        } elseif ($status == AUTH_IDLED) {
            $status_msg = 'You have been idle too long.';
        } elseif ($status == AUTH_EXPIRED) {
            $status_msg = 'Your session has expired.';
        }
    } else {
        $status_msg = '';
    }
    // Display the beginning of the form
    print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
<table>
<tr bgcolor="#cccccc"><td colspan="2" align="center">Please Log In</td></tr>
_HTML_;
    // Display a status message if there is one 
    if ($status_msg) {
        print '<tr><td colspan="2" align="center"><font color="#ff0000">' .
            $status_msg . '</font></td></tr>';
    }
    // Display the rest of the form
    print<<<_HTML_
<tr><td>Username: </td>
    <td><input type="text" name="username" size="20" value="$username"/>
</td></tr>
<tr><td>Password: </td>
        <td><input type="password" name="password" size="20"/></td></tr>
        <tr bgcolor="#cccccc"><td colspan="2" align="center">
<input type="submit" value="Log In"/></td></tr>
</table>
</form>
_HTML_;
}
$a = new Auth('DB',$opts,'custom_login');
$a->start();
if (! $a->getAuth()) {
    // the user isn't logged-in, so don't show them anything else
    exit();
}
// Anything past here is shown only to those users who are successfully
// logged in
