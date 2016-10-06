require 'Auth/Auth.php';
$opts = array('table' => 'users',
              'dsn' => 'mysql://phpgems:phpgems1@localhost/phpgems');
// define the function to print the login page
function custom_login() {
print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
<table>
<tr bgcolor="#cccccc"><td colspan="2" align="center">Please Log In</td></tr>
<tr><td>Username: </td>
    <td><input type="text" name="username" size="20"/></td></tr>
<tr><td>Password: </td>
        <td><input type="password" name="password" size="20"/></td></tr>
        <tr bgcolor="#cccccc"><td colspan="2" align="center">
        <input type="submit" value="Log In"/></td></tr>
</table>
</form>
_HTML_;
}
// The name of the function that prints the login form is passed to the
// Auth constructor as the third argument
$a = new Auth('DB',$opts,'custom_login');
$a->start();
if (! $a->getAuth()) {
    // the user isn't logged-in, so don't show them anything else
    exit();
}
// Anything past here is shown to only those users who are successfully
// logged in
