<?php session_start(); ?>
<meta charset="utf-8">
<?php

   include 'setting.php';

   $link = mysql_connect($hostname,$dbusername,$dbpassword);
   if(!$link){
   	die("抱歉伺服器已掛, 自己的網站自己救 #1");
   }else{
   	echo "Connect finish, now loading...";
   }
   
   mysql_set_charset('utf8',$link);
   
   if(!@mysql_select_db($dbname)){
   	die("抱歉已掛，自己的伺服器自己救 #2");
   }
   
   $usernames = $_POST["username"];
   $userpassword = md5($_POST["password"]);
   
   $sql = "select * from users where username = '$usernames'";
   $result = mysql_query($sql);
   $row = @mysql_fetch_row($result);
   

   if($usernames != null && $userpassword != null && $row[0]==$usernames && $row[1] == $userpassword){ //Login Session
   		$_SESSION["username"] = $usernames; //Create Session
   		mysql_free_result($result);
   		mysql_close($link);
   		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
   }else{
   	mysql_free_result($result);
   	mysql_close($link);
   	header("Location: login.php?error=1");
   }
   ?>