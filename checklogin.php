<?php
$uid = $_POST['uid'];
$pw = $_POST['pw'];

if($uid == 'prasb' and $pw == 'prasb')
{	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:securepage.php");
}
?>
