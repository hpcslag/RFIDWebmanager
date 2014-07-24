<?php session_start();
   if(isset($_SESSION["username"])!=null){header("Location: index.php");}?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Game Design Club自動簽到系統</title>
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
      <style type="text/css">
         body,html{font-family: "微軟正黑體" ,'Noto Sans', sans-serif;}
         .bg-warning ,.bg-success {padding: 15px; color:#333}
      </style>
   </head>
   <body>
      <p></p>
      <br /><br />
      <div class="container">
         <form action="connect.php" method="post" class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <?php if(isset($_GET["error"])){ 
               if($_GET["error"]==1)echo "<p class='bg-warning'><span style='color:red'>帳號或密碼錯誤</span>，如何破解本系統: 偽造Session即可 XD ,破解者有賞一碗拉麵</p>"; 
               if($_GET["error"]==0)echo "<p class='bg-success'>登出成功</p>";
               }?>
            <input type="email" class="form-control" placeholder="Username" name="username" required="" autofocus="">
            <input type="password" class="form-control" placeholder="Password" name="password" required="">
            <div class="checkbox">
               <label>
               <input type="checkbox" value="remember-me"> Remember me
               </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         </form>
      </div>
   </body>
</html>