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
                          <?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
					<li><a href="logout.php">Logout</a></li>
				<?php 
					}
					else{
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>

                          
                          <li> <a href="search.html">Search</a></li>
                          
                          
                      </ul>
                  </nav>
              
                 
              </div>

              
      </header>
        <div class="fir">
            <h1>Free Writers Forum</h1><br>
           <marquee> <h2>Write your soul away!!!</h2></marquee><br>
            <h3>The platform to show your soul through writing. </h3>
        </div>
        <div class="sec">
            <h2>
                Write what you feel, read what you want. 
            </h2>
            <br>
            <h3>
                There are many things you want to express, so why wait just write them off so we can read!!!
            </h3>
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