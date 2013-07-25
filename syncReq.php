<?php

$securImg = array("dnow3hn8dn3.jpg","kdm2lfno3ndoi35.jpg","new081643nkf3.jpg","oj890h4iubn9.jpg","skd9he4ui9d3.jpg");
$securAns = array("24","5","40","6","3");


if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
  $ip=$_SERVER['REMOTE_ADDR'];
}


/*if (isset($_POST['msgStr']))
	echo $_POST['msgStr'];
echo ' - ';
if (isset($_POST['emailStr']))
	echo $_POST['emailStr'];
echo ' - ';
if (isset($_POST['userStr']))
	echo $_POST['userStr'];
echo ' - ';*/
$j = 'false';


if (isset($_POST['secur'])){
	for($i=0;$i<5;$i++){
		if($securImg[$i] == $_POST['secur'])
			if(isset($_POST['securUsrAns']))
				if($securAns[$i] == $_POST['securUsrAns']){
					$j = 'true';
					require 'mysql.php' ;
					$query="insert into user_vote(vote_counter,vote_user,vote_email,vote_date,vote_content,vote_user_ip) value('".$_POST['voteNumber']."','".$_POST['userStr']."','".$_POST['emailStr']."','".date("Y-m-d H:i:s")."','".$_POST['msgStr']."','".$ip."')";
					mysql::sql_execute($query);
				}
	}
	echo $j;
	echo ' ';
	echo $securImg[rand(0,4)];
	echo ' ';
	echo date("Y-m-d H:i:s");
}
?>