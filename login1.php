 
 <!doctype html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Login Form</title>
 	<link rel="stylesheet" href="login.css">
 </head>
 <body>
<div class="title"><h1><center>Sign In Form</center></h1></div>
<div class="container">
<div class="left"></div>
<div class="right">
	<div class="formBox">
      <form action=check.php method=post>
      
      <p>Username</p><input type="text" name=username placeholder="enter your username..." required="required"><?php if(isset($_GET['msg'])) echo "<font color=red>$_GET[msg]</font"; ?>
  <p>Password</p>
  <input type="password" name=password placeholder="enter your password..." required="required">
   <input type="submit" name="" value="Sign In">
   <a href="#">Forgot Password</a>
      </form>
  </div>
</div>
</div>

  </body>
      <center>
      </html>