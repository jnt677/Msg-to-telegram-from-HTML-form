<?php
define ('url',"8030393083:AAGTL5sEG46M8kyiFvW0n55j6bA-QWVTY2c");

$name = $_GET['name'];

$message = $_GET['message'];

$phone = $_GET['phone'];

$chat_id = '{7049134666}';

$message = urlencode("Name:".$name."\nPhone: ".$phone."\nMessage: ".$message);

file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>
