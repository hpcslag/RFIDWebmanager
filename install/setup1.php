<?php
   if($_POST["hostname"] == null || $_POST["username"]==null ||$_POST["password"]==null){
   	header("Location: index.php?error=2");
   }
   if($_POST["hostname"] != null && $_POST["username"]!=null && $_POST["password"]!=null){
   	$hostname = $_POST["hostname"];
   	$username = $_POST["username"];
   	$password = $_POST["password"];
   	
   	$link = mysql_connect($hostname,$username,$password);
   	if(!$link){
   		header("Location: index.php?error=1");
   		die("伺服器已掛,自己的伺服器自己救 #1");
   	}else{
   		echo "Connect finish , now loading...";
   	}
   	mysql_set_charset('utf8',$link);
   	//$result = mysql_query($sql,$link);
   	//你他媽的我連 $link都沒有補上去程式就對了, 管他那麼多能用就好 (? 還有他媽php沒辦法多行一次執行，誰叫mysql_query一次只能回應一個
   	mysql_query("CREATE DATABASE admin;",$link)or die("伺服器已掛，自己的伺服器自己救#21");
   	mysql_query("USE admin;")or die("伺服器已掛，自己的伺服器自己救#22");
   	mysql_query("CREATE TABLE users(username varchar(32),password varchar(64));")or die("伺服器已掛，自己的伺服器自己救#23");
   	mysql_query("CREATE DATABASE rfid;")or die("伺服器已掛，自己的伺服器自己救#24");
   	mysql_query("USE rfid;")or die("伺服器已掛，自己的伺服器自己救#25");
   	mysql_query("CREATE TABLE users(username varchar(32),rfid varchar(64),lastlog varchar(32));")or die("伺服器已掛，自己的伺服器自己救#26");
   	mysql_query("CREATE TABLE history(history TEXT);")or die("伺服器已掛，自己的伺服器自己救#27");
   	/*if(!$result){
   		die("伺服器已掛，自己的伺服器自己救#2");
   		exit;
   	}else{
   		echo "Create Finish , now setup your account!";
   	}*/
   	
   	
   	$f = fopen("../setting.php", 'w') or die("can't open file");
   	fwrite($f, "
   	<?php 
      $"."host='$hostname';
      $"."db='rfid';
      $"."dbuser='$username';
      $"."dbpw='$password';
      $"."hostname='$hostname';
      $"."dbname='admin';
      $"."dbusername='$username';
      $"."dbpassword='$password';
      ?>");
fclose($f);
mysql_close($link);
echo '
<meta http-equiv=REFRESH CONTENT=1;url=setup2.php>
';
/*CREATE DATABASE admin;
USE admin;
CREATE TABLE `users`(username varchar(32),password varchar(64));
INSERT INTO `users`(username,password) VALUES('使用者自行輸入',MD5('使用者自行輸入'));
CREATE DATABASE rfid;
USE rfid;
CREATE TABLE `users`(username varchar(32),password varchar(64));
CREATE TABLE `history`(history TEXT);*/
}else{
header("Location: index.php?error=1");
exit;
}
?>