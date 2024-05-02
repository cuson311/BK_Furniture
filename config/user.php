<!--<?php
$servername = "localhost";

function checkuser($user,$pass) {
  $conn=config();
  $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."' ");
  $stmt ->execute();
  $result = $stmt ->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchALL();
  return $kq[0]['role'];
}
?> 