<?php	session_start();	?>
<!DOCTYPE html>
<html>
    <head>
        <title>Free Writers Forum</title>
        <link rel="icon" href="images\fav.jpg">
        <link rel="stylesheet" href="styleind.css">
    </head>
    
    <body>
        <header class="header">
            <div class="logo">
               
              
            <nav>
                      <ul>
                          <li><a href="index.php"><img src="images\fav.jpg" height="50px" width="60px"></a></li>
                          <li><a href="index.php">Homepage</a></li>
                          <li><a href="categories.php">Categories</a></li>
                          <li><a href="writeup.php">Write up!</a></li>
                          <li> <a href="guidelines.php">Guidelines</a></li>
                          <li><a href="contact.php">Contact us</a></li>
                          <li><a href="signup.php">Sign up!</a></li>
                          <li><a href="Login.php">Login now</a></li>
                          <li> <a href="search.php">Search</a></li>
                          
                          
                      </ul>
                  </nav>
              
                 
              </div>

              
      </header>
        <h1 class="h">
            Login
        </h1>
        <div class="main">

        <div class="box">
        <form id="box" method="post" action="login.php">
            <input type="text" placeholder="Enter your Username" id="a" name="unam">
            <br><br>
            <input type="password" placeholder="Enter your Password" id="a" name="pass">
            <br><br>
            <input type="submit" value="Login" id="submit">
        </form>
        </div>

        <?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "myDB7";

// Establish the database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the input from the form
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    // Hash the password (for demonstration purposes only; use a more secure hashing method in production)
    

    // Prepare and execute the SQL query to check if the user exists
    $sql = "SELECT * FROM users WHERE uname = '$uname' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        // User found, login successful
        echo "Login successful!";
    } else {
        // User not found, login failed
        echo "Invalid username or password.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

    </div>
        <div>
            <h3 class="h">
                Not registered then do so!
            </h3>
            <a href="signup.html" id="submit">Signup</a>
        </div>




        <footer class="ifooter">
            <div class="page-up">
                <a href="index.html"><img src="images\goup.jpg" height="50px" width="50px"></a>
            </div>
                   <div>
                    <div class="in"><a href="index.html">Free Writers Forum</a> </div>
                       <ul>
                           <li><a href="index.html">Homepage</a></li>
                           <li><a href="categories.html">Categories</a></li>
                           <li><a href="writeup.html">Write up!</a></li>
                           <li> <a href="guidelines.html">Guidelines</a></li>
                           <li><a href="contact.html">Contact us</a></li>
                           <li><a href="signup.html">Sign up!</a></li>
                           <li><a href="Login.html">Login now</a></li>
                       </ul>
                    </div>
          </footer>

        

    </body>
</html>
