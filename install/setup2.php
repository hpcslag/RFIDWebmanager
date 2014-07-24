<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>新增管理者帳號</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
      <script src="./js/bootstrap.min.js"></script>
      <link href="./css/signin.css" rel="stylesheet">
      <script src="./js/ie-emulation-modes-warning.js"></script>
      <style type="text/css"></style>
      <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
      <script src="js/ie10-viewport-bug-workaround.js"></script>
      <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">
         body,html{font-family: "微軟正黑體" ,'Noto Sans', sans-serif;
         background: url(./img/shattered.png);}
         .bg-warning ,.bg-success {padding: 15px; color:#333}
         .bg-warning{background-color: #f2dede;color: #b94a48;}
      </style>
   </head>
   <body>
      <div class="container">
         <form class="form-signin" role="form" action="setup3.php" method="post">
            <h2 class="form-signin-heading">Register your Account</h2>
            <?php if(isset($_GET["error"])){
               if($_GET["error"]==1)echo "<p class='bg-warning'>None Word Enter - 000</p>
               <div class='form-group has-error has-feedback'>
                  <input type='email' class='form-control' id='inputError2' placeholder='Username is Email' name='username' required=''>
                  <input type='password' class='form-control' id='inputError2' name='password' placeholder='Password'>
               </div>";
               }else{?>
            <input type="email" class="form-control" id="inputError1" placeholder="Username is Email" name="username" required="" autofocus="">
            <input type="password" class="form-control" placeholder="Password" name="password" required="">
            <?php }?>
            <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
         </form>
      </div>
   </body>
</html>