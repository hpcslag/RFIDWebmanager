<?php session_start();?>
<?php
   include "setting.php";
   
    $link = mysql_connect($hostname,$dbusername,$dbpassword);
    if(!$link){
      die("伺服器已掛，自己的伺服器自己救#1");
    }
    mysql_set_charset('utf8',$link);
    mysql_select_db('rfid',$link);
    $result = mysql_query('SELECT * from users where 1');
   
    if(!$result){
      die("伺服器已掛，自己的伺服器自己救#2");
      exit;
    }
    $num = 1;
   
    //new in history
    $sqls = mysql_select_db('rfid');
    $doresult = mysql_query('SELECT * FROM history where 1');
   
    if(!$doresult){
      die("伺服器已掛，自己的伺服器自己救#3");
      exit;
    }
   ?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>簽到資料登記表</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <style type="text/css">
         html,body{margin: 0;border:0;}
         .nav{
         height:41px;
         border-bottom: 1px solid #dfdfdf;
         background:#eee;
         }
         a{outline: none; color: #0e83cd;}
         .god{
         height:41px;
         width: 150px;
         background:#eee;;
         float: right;
         border-left: 1px solid #dfdfdf;
         border-right: 1px solid #dfdfdf;
         padding: 10px 31px;
         color: #0e83cd;
         border-bottom:1px solid #dfdfdf;
         }
         .god:hover{
         background: #f60;
         color:#fff;
         }
         a:link {
         text-decoration: none;
         }
         a:visited {
         text-decoration: none;
         }
         a:hover {
         text-decoration: none;
         }
         a:active {
         text-decoration: none;
         }
         .feather{
         height:41px;
         width: 450px;
         background:#eee;
         float: left;
         border-left: 1px solid #dfdfdf;
         border-right: 1px solid #dfdfdf;
         padding: 10px 31px;
         color: #f60;
         }
         p{font-family:"微軟正黑體";}
      </style>
   </head>
   <body>
      <div class="nav">
         <div class="god"><a href="logout.php">Logout</a></div>
         <div class="god"><a href="new.php">New Records</a></div>
         <div class="feather">
            <p>Account: <?php echo $_SESSION["username"]?></p>
         </div>
      </div>
      <!--檢查Session 是否登入-->
      <?php if(isset($_SESSION["username"]) != null){ ?>
      <br>
      <pre><p>所有社員名單</p></pre>
      <table class="table table-striped">
         <thead>
            <tr>
               <th>#</th>
               <th>社員名稱</th>
               <th>RFID Card</th>
               <th>最後報到時間</th>
            </tr>
         </thead>
         <tbody>
            <!--look this-->
            <?php while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?>
            <tr>
               <td><?php  echo $num;?></td>
               <?php foreach ($row as $key) { ?>
               <td>&nbsp<?php echo $key;?></td>
               <?php } $num+=1;}?>
            </tr>
            <!--look end-->
         </tbody>
      </table>
      <br>
      <pre>
      <h1>History</h1>
      <?php while ($row = mysql_fetch_array($doresult,MYSQL_ASSOC)) {?>
        <pre><?php foreach ($row as $key) { echo $key;/*對應使用者名稱IDCard*/ }?></pre>
      <?php } ?>
    </pre>
      <?php 
         mysql_free_result($result);
         mysql_free_result($doresult);
         mysql_close($link);
         }else{ header("Location: /login.php"); } //跳轉登入 ?>
   </body>
</html>