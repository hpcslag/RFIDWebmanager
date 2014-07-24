<?php 
   session_start();
   
   if($_POST["username"]!=null && $_POST["rfid"]!=null){
      
         include 'setting.php';
         
         $link = mysql_connect($host,$dbuser,$dbpw);
         if(!$link){
            die("伺服器已掛，自己的伺服器自己救, #1");
            exit;
         }else{
            echo "Connect finish, now loading...";
         }
         
         mysql_set_charset('utf8',$link);
         
         if(!@mysql_select_db($db)){ //@mysql_select_db();
            die("伺服器已掛，自己的伺服器自己救, #2");
            exit;
         }
         
         $usernames = $_POST["username"];
         $rfid = $_POST["rfid"];
         date_default_timezone_set("Asia/Taipei");
         $date = date('Y-m-d_(G:i)');
         
         $has_name = mysql_query("select * from users where username = '$usernames'",$link);
         $row = @mysql_fetch_row($has_name);
         if($row[0] == $usernames){
            mysql_free_result($result);
            mysql_close($link);
            header("Location: new.php?error=3");
         }
         echo "<h1>$row</h1>";
   
         $result = mysql_query("INSERT INTO users (username,rfid,lastlog) VALUES ('$usernames', '$rfid','$date')",$link);
         
         if(!$result){
            die("伺服器已掛，自己的伺服器自己救, #3");
            exit;
         }
         
         
      //新增完資料後跳回index.php
         //mysql_free_result($result);
         mysql_close($link);
         echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
   }else{
      header("Location: new.php?error=2");
   }
   ?>