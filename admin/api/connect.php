
<?php
$link = mysqli_connect('localhost', 'root','');
if (!$link) {
die('Not connected : ' . mysqli_error($link));
}
// make foo the current db
$db_selected = mysqli_select_db($link,'laptrinhweb_db');
if (!$db_selected) {
die ('Can\'t use: ' . mysqli_error($link));
}
?>
