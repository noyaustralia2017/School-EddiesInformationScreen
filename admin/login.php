<?php include('adminserver.php') ?> 
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>St Edmund's Information Screen Login</title>
	<link rel="icon" href="https://sec.act.edu.au/wp-content/uploads/2017/10/Crest.png"> <!--This is the tab logo -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> <!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Bootstrap JS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font Awesome Stylesheet-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> <!-- Bootstrap JS-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> <!-- Bootstrap JS-->


  </head>
  <br>
  <body class="text-center">
    <form class="form-signin" method="post" action="login.php">
      <img class="mb-4" src="https://sec.act.edu.au/wp-content/uploads/2017/10/St-Edmunds-College-Website-Logo.png" alt="" >
      <h1 class="h3 mb-3 font-weight-normal">St Edmund's Information Screen Login</h1>
	  							<?php include('errors.php'); ?> 
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="txt_uname" class="form-control" placeholder="Username" name="usernames">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
     
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user" id="but_submit"> Sign in</button> 
<p class="mt-5 mb-3 text-muted">© St Edmund's College Canberra - 2020. </p>

    </form>
</body>

<style>
html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #B4B7B9;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
</html>