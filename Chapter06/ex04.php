$my_file = file_get_contents('/tmp/some-file.bin');
$binary_data = new XML_RPC_Value(base64_encode($my_file), 'base64');
