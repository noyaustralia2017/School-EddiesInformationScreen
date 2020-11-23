<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$usernames = mysqli_real_escape_string($mysqli, $_POST['usernames']);
	$firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, md5($_POST['password']));	


	// checking empty fields
	if(empty($usernames) || empty($firstname) ||empty($lastname) || empty($email)|| empty($password)) {	
			
		if(empty($usernames)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($firstname)) {
			echo "<font color='red'>Firstname field is empty.</font><br/>";
		}
		
			if(empty($lastname)) {
			echo "<font color='red'>Lastname field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}	
	
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE adminusers SET usernames='$usernames',firstname='$firstname',email='$email', password='$password' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("location: userlist.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM adminusers WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$usernames = $res['usernames'];
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$email = $res['email'];
	$password = $res['password'];


}
?>
<?php 
	session_start(); //starting the session, to use and store data in session variable

	//if the session variable is empty, this means the user is yet to login
	//user will be sent to 'login.php' page to allow the user to login
	if (!isset($_SESSION['usernames'])) {
		$_SESSION['msg'] = "You have to log in first";
		header('location: ../login.php');
	}

	// logout button will destroy the session, and will unset the session variables
	//user will be headed to 'login.php' after loggin out
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['usernames']);
		header("location: ../login.php");
	}

?>
<html>
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
</style>
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> <!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Bootstrap JS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font Awesome Stylesheet-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> <!-- Bootstrap JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> <!-- Bootstrap JS-->
<link href="../assets/css/style.css" rel="stylesheet" type="text/css"> <!-- Link to CSS Stylesheet -->
<title> Edit </title> <!--tab Title -->
<link rel="icon" href="https://sec.act.edu.au/wp-content/uploads/2017/10/Crest.png"> <!--This is the tab logo -->
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="../adminindex.php">
          <img src="https://sec.act.edu.au/wp-content/uploads/2017/10/St-Edmunds-College-Website-Logo.png" alt="">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">  <!--Bootstrap code for making the navbar responsive. -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">  <!--This highlights the link and it pretty much shows the user what page they are -->
          <a id="red" class="nav-link" href="../adminindex.php" style="font-size:20px">Home
                <span class="sr-only" >(current)</span>
              </a>
        </li>	  
		<li  class="nav-item dropdown"> 
			<a class="nav-link dropdown-toggle" id="red" href="#" id="navbarDropdown" style="font-size:20px" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users		</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a  id="red"style="font-size:20px" class="dropdown-item" href="userlist.php">View Admins</a>
				<a  id="red"style="font-size:20px" class="dropdown-item" href="../adminregister.php">Create admin user</a>
			</div>
      </li> 
        <li class="nav-item">
          <a  id="red" class="nav-link" href="../noticecrud/notice.php" target="_blank" style="font-size:20px">Daily Notices</a>
        </li>
		<li id="red" class="nav-item dropdown">  <?php  if (isset($_SESSION['usernames'])) : ?>
			<a  id="red"class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="font-size:20px" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php echo $_SESSION['firstname']; ?> <?php endif ?>			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a id="red" style="font-size:20px" class="dropdown-item" href="../adminindex.php?logout='1'">Logout</a>
			</div>
      </li>

      </ul>
    </div>
  </div>
</nav>
</head>

<body style="background:rgba(170,170,170);"> <br> <br> <br> <br><br> <br> <br> <br><br> <br>
<center>
	    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Admin Details</h2>
                    </div>
                    <p>Please edit the text boxes and press update to update user data.</p>
<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="usernames" readonly value="<?php echo $usernames;?>"></td>
			</tr>
			<tr> 
				<td>Firstname</td>
				<td><input type="text" name="firstname" required value="<?php echo $firstname;?>"></td>
			</tr>
						<tr> 
				<td>Lastname</td>
				<td><input type="text" name="lastname" required value="<?php echo $lastname;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" required value="<?php echo $email;?>"></td>
			</tr>
						<tr> 
				<td>Password</td>
				<td><input type="text" name="password" required minlength="8" value="<?php echo $password;?>"></td>
			</tr>
									<tr> 
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" id="but" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	<style>
	     #but {
        background-color:#0080C5;
        color: white;
  padding: 10px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
    }
	</style>
</body>
</html>
