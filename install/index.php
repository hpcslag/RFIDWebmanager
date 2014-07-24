<!DOCTYPE html>
<html>
   <head>
      <title>install gem RFID</title>
      <link rel="stylesheet" href="css/foundation.css" />
      <link rel="stylesheet" href="css/sqls.css"/>
      <script src="js/vendor/modernizr.js"></script>
      <script src="js/vendor/jquery.js"></script>
      <script src="js/foundation.min.js"></script>
      <script type="text/javascript">$(document).foundation();</script>
   </head>
   <body>
      <div id="content">
         <h2>Setup your database</h2>
         <?php if(isset($_GET["error"])){
            if($_GET["error"] == 1)echo "<div data-alert class='alert-box alert'>Connect ERROR - 404<a href='index.php' class='close'>&times;</a> </div>";
            if($_GET["error"] == 2)echo "<div data-alert class='alert-box warning'>None Word Enter! - 000<a href='index.php' class='close'>&times;</a> </div>";
            }?>
         <form action="setup1.php" method="post">
            <div class="row">
               <div class="large-12 columns">
                  <label>
                  <input type="text" name="hostname" placeholder="hostname: localhost" />
                  <input type="text" name="username" placeholder="username: root" />
                  <input type="text" name="password" placeholder="password: 1234" />
                  <input type="submit" class="success button" value="Finish!"/>
                  </label>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>