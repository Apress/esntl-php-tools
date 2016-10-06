// Use /etc/passwd for authentication
$a = new Auth('File','/etc/passwd');
// Use /etc/samba/smbusers for authentication
$a = new Auth('SMBPasswd','/etc/samba/smbusers');
