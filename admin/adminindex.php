<?php 
	session_start(); //starting the session, to use and store data in session variable

	//if the session variable is empty, this means the user is yet to login
	//user will be sent to 'login.php' page to allow the user to login
	if (!isset($_SESSION['usernames'])) {
		$_SESSION['msg'] = "You have to log in first";
		header('location: login.php');
	}

	// logout button will destroy the session, and will unset the session variables
	//user will be headed to 'login.php' after loggin out
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['usernames']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<style>
html, body{
	background-color:rgba(170,170,170);
	height: 10%;
}
body {
 overflow-x: hidden; /* Hide horizontal scrollbar */
}
 .navbar{
	 background-color:#FFC72C;
 }
 
 #red{
	 color:#282828;
 }
  .mainpoint{
	 color:#002D72;
	 font-size:35px;
 }
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> <!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Bootstrap JS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font Awesome Stylesheet-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> <!-- Bootstrap JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> <!-- Bootstrap JS-->
<link href="../assets/css/style.css" rel="stylesheet" type="text/css"> <!-- Link to CSS Stylesheet -->
<title> Eddies Admin Portal </title> <!--tab Title -->
<link rel="icon" href="https://sec.act.edu.au/wp-content/uploads/2017/10/Crest.png"> <!--This is the tab logo -->
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="adminindex.php">
          <img src="https://sec.act.edu.au/wp-content/uploads/2017/10/St-Edmunds-College-Website-Logo.png" alt="">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">  <!--Bootstrap code for making the navbar responsive. -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">  <!--This highlights the link and it pretty much shows the user what page they are -->
          <a id="red" class="nav-link" href="adminindex.php" style="font-size:20px">Home
                <span class="sr-only" >(current)</span>
              </a>
        </li>	  
		<li  class="nav-item dropdown"> 
			<a class="nav-link dropdown-toggle" id="red" href="#" id="navbarDropdown" style="font-size:20px" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users		</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a  id="red"style="font-size:20px" class="dropdown-item" href="admincrud/userlist.php">View Admins</a>
				<a  id="red"style="font-size:20px" class="dropdown-item" href="adminregister.php">Create admin user</a>
			</div>
      </li> 
        <li class="nav-item">
          <a  id="red" class="nav-link" href="noticecrud/notice.php"  style="font-size:20px">Daily Notices</a>
        </li>
		<li id="red" class="nav-item dropdown">  <?php  if (isset($_SESSION['usernames'])) : ?>
			<a  id="red"class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="font-size:20px" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php echo $_SESSION['firstname']; ?> <?php endif ?>			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a id="red" style="font-size:20px" class="dropdown-item" href="adminindex.php?logout='1'">Logout</a>
			</div>
      </li>

      </ul>
    </div>
  </div>
</nav>
</head>

<body> 
<div class=""> <br> <br><br> <br> <br> <br> <br> <br> <br> <!-- We are making the "body" (main content) of the website inside this container to allow styling of the site. We are using grey as it is a neutral colour and doesn't create strain to the eyes like white. -->
  <h2 class="mainpoint"> <center> Welcome  <?php echo $_SESSION['firstname']; ?> to the Admin Dashboard </center></h2> 
  <a class="weatherwidget-io" href="https://forecast7.com/en/n35d31149d12/canberra/" data-label_1="CANBERRA" data-label_2="WEATHER" data-theme="original" >CANBERRA WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<h4 class="car"> Screen Management:</h4>
                          <div class="card-deck">    <!-- This is the source for the cards: https://getbootstrap.com/docs/4.0/components/card/ -->
                <!-- Service Card -->
                <div class="card">
                      <a href="noticecrud/notice.php">  <img class="card-img-top" src="assets/image/jay.jpg" alt="Students">  <!-- Generic Stock Image from Mazda USA -->
                    <div class="card-block">
                        <h4 class="car">Update Daily Notices</h4>
                        <p class="car" > </p> </a><!--Change Subtitle here -->
                    </div>
                </div>
              <!-- Meet our Team Card -->
                <div class="card">
                     <a href="adminregister.php"> <img class="card-img-top" src="assets/image/peter.jpg" alt="Peter brown with umbrella in rain" >  <!-- Image from Rolfe Motors Stock -->
                    <div class="card-block">
                        <h4 class="car"> Register Admins </h4> <!--Change Title here -->
                        <p class="car"></p> </a><!--Change Subtitle here -->
                    </div>
                </div>

			    <!-- Blog Card -->
				 <div class="card">
                     <a href="admincrud/userlist.php">  <img class="card-img-top" src="assets/image/noz.jpg" alt="Eddies Staff">  <!-- picture. -->
                    <div class="card-block">
                        <h4 class="car"> View Admins</h4> <!--Change Title here -->
                        <p class="car"> </p> </a> <!--Change Subtitle here -->
                    </div>
                </div>
                
                				 <div class="card">
                     <a href="https://embedsocial.com/" target="_blank">  <img class="card-img-top" src="assets/image/jacob.jpg" alt="Jacob">  <!-- picture of jacob knowles. -->
                    <div class="card-block">
                        <h4 class="car"> EmbedSocial</h4> <!--Change Title here -->
                        <p class="car"> </p> </a> <!--Change Subtitle here -->
                    </div>
                </div>
                
                				 <div class="card">
                     <a href="https://tockify.com/" target="_blank">  <img class="card-img-top" src="assets/image/sonny.jpg" alt="Sunny with some kids">  <!--picture. -->
                    <div class="card-block">
                        <h4 class="car"> Tockify </h4> <!--Change Title here -->
                        <p class="car"> </p> </a> <!--Change Subtitle here -->
                    </div>
                </div>
            </div>
</html>
</body>
</html>