<?php session_start(); 

if (isset($_POST['login'])) { 

// Connect to the database 
$mysqli = new mysqli("localhost", "root", "Sports4users1425*", "sportssite"); 

// Check for errors 
if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 

// Prepare and bind the SQL statement 
$stmt = $mysqli->prepare("SELECT id, password FROM users WHERE username = ?"); $stmt->bind_param("s", $username); 

// Get the form data 
$username = $_POST['username']; $password = $_POST['password']; 

// Execute the SQL statement 
$stmt->execute(); $stmt->store_result(); 

// Check if the user exists 
if ($stmt->num_rows > 0) { 

// Bind the result to variables 
$stmt->bind_result($id, $hashed_password); 

// Fetch the result 
$stmt->fetch(); 

// Verify the password 
if (password_verify($password, $hashed_password)) { 

// Set the session variables 
$_SESSION['loggedin'] = true; $_SESSION['id'] = $id; $_SESSION['username'] = $username; 

// Redirect to the user's dashboard 
header("Location: Carm's Sports.php"); exit; } else { echo '<p style="color:red;">
    Incorrect Password! </p> '; } } else { echo "User not found!"; } 

// Close the connection 
$stmt->close(); $mysqli->close(); }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="newAccount.css">
</head>
<body>
<fieldset>
<h1>Login</h1>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
<form action="login.php" method="post">
  <label for="username">Username:</label>
  <input id="username" name="username" required="" type="text" />
  <label for="password">Password:</label> 
  <input id="password" name="password" required="" type="password" />
  <input name="login" type="submit" value="Login"></
</form>
<div>
    <button class="button"><a href="Carm's Sports.html">Back to home Page</a></button>
</div>

    </fieldset>
    </div>
</body>
</html>