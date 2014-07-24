<?php
   if($_POST["username"] != null && $_POST["password"] != null){
   	include '../setting.php';
   	
   	$un = $_POST["username"];
   	$up = $_POST["password"];
   	
   	$link = mysql_connect($host,$dbuser,$dbpw);
   	if(!$link){
   		die("伺服器已掛，自己的伺服器自己救 #1");
   		exit;
   	}else{
   		echo "Connect finish, now loading...";
   	}
   	mysql_set_charset('utf8',$link);
   
   	//選擇 rfid資料庫
   	if(!@mysql_select_db($dbname)){
   		die("抱歉已掛，自己的伺服器自己救 #2");
   	}
   	
   	$result = mysql_query("INSERT INTO users(username,password) VALUES('$un',MD5('$up'));",$link);
   	if(!$result){
   		die("伺服器已掛，自己的伺服器自己救 #2");
   		exit;
   	}
   	
   	mysql_close($link);
   	echo '<meta http-equiv=REFRESH CONTENT=1;url=setup4.php>';
   }else{
   	header("Location: setup2.php?error=1");
   	exit;
   }
   ?>