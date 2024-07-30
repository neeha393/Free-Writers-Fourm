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
        <div >
            <h3 class="ha">
                Welcom to Free Writers Forum
            </h3>
            <h2 class="h">
                Sign up!
            </h2>
        </div>
        <div class="main">
        <div class="box">
            <form method="post" action="signup.php">
            <input type="text" placeholder="Enter your Name" id="a" name="name">
            <br><br>
            <input type="email" placeholder="Enter your E-mail id" id="a" name="email">
            <br><br>
            <input type="text" placeholder="Enter your Username" id="a" name="uname">
            <br><br>
            <input type="password" placeholder="Enter your Password" id="a" name="pass">
            <br><br>
            <input type="password" placeholder="Confirm your Password" id="a" >
            <br><br>
            <input type="submit" value="Sign-up" id="submit">
            </form>
        </div>
    </div>
        <div>
            <h3 class="h">
                Already registered, then sign in!
            </h3>
            <a href="login.html" id="submit">Login</a>
        </div>
        <?php
// Replace these values with your actual database connection credentials
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
    $email = $_POST["email"];
    $name = $_POST["name"];

    // Hash the password (for demonstration purposes only; use a more secure hashing method in production)
    

    // Prepare and execute the SQL query to check if the username already exists
    $checkUsernameQuery = "SELECT * FROM users WHERE uname = '$username'";
    $result = mysqli_query($conn, $checkUsernameQuery);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        // Username already exists
        echo "Username already taken. Please choose another one.";
    } else {
        // Username is available, proceed with user registration
        $insertUserQuery = "INSERT INTO users (name ,uname, pass, email) VALUES ('$name, '$username', '$password', '$email')";
        if (mysqli_query($conn, $insertUserQuery)) {
            // User registration successful
            echo "User registered successfully!";
        } else {
            // User registration failed
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>



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
