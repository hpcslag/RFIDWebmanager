<?php session_start();?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>新增社團成員資料</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
      <script src="./js/bootstrap.min.js"></script>
      <link href="./css/bootstrap.min.css" rel="stylesheet">
      <link href="./css/signin.css" rel="stylesheet">
      <script src="./js/ie-emulation-modes-warning.js"></script>
      <style type="text/css"></style>
      <link href='./css?family=Noto+Sans' rel='stylesheet' type='text/css'>
      <script src="./js/ie10-viewport-bug-workaround.js"></script>
      <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">blockquote {
         padding: 10px 20px;
         margin: 0 0 20px;
         font-size: 17.5px;
         border-left: 5px solid #f00;
         }
      </style>
      <style type="text/css">
         body,html{font-family: "微軟正黑體" ,'Noto Sans', sans-serif;
                   font-family: 'Microsoft JhengHei UI',Calibri,'Segoe UI',Meiryo,'Microsoft YaHei UI','Malgun Gothic','Khmer UI','Nirmala UI',Tunga,'Lao UI',Ebrima,sans-serif;}
         .bg-warning ,.bg-success {padding: 15px; color:#333}
      </style>
   </head>
   <body>
      <?php if(isset($_SESSION["username"]) != null){ ?>
      <div class="container">
         <form class="form-signin" action="new_member.php" method="post">
            <h2 class="form-signin-heading">New Data</h2>
            <?php  if(isset($_GET["error"])){
               if($_GET["error"] == 1)echo "<p class='bg-warning'><span style='color:red'>新增資料發生錯誤</p></span>";
               if($_GET["error"] == 2)echo "<p class='bg-warning'>這是一筆空的資料</p>";
               if($_GET["error"] == 3)echo "<p class='bg-warning'>該資料已經存在</p>"; 
               }?>
            <input type="text" class="form-control" placeholder="Name: Json" name="username" required="" autofocus="">
            <input type="text" class="form-control" placeholder="RFID: 123456789" name="rfid" required=""><BR>
            <button class="btn btn-lg btn-success btn-block" type="submit">NEW</button>
         </form>
      </div>
      <?php }else{
         header("Location: login.php");
         }?>
   </body>
</html>