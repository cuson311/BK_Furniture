<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION['role'] == 'customer'){
    header("location: ../Homepage/homepage.php");
    exit;
}else{
	//navigate to admin page
}
 
// Include config file
require_once "../config/config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
	if(isset($_POST['customer-login-btn'])){
		// Validate credentials
		if(empty($username_err) && empty($password_err)){
			// Prepare a select statement
			$sql = "SELECT id, username, password FROM customer WHERE username = ?";
			
			if($stmt = mysqli_prepare($connection, $sql)){
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $param_username);
				
				// Set parameters
				$param_username = $username;
				
				// Attempt to execute the prepared statement
				if(mysqli_stmt_execute($stmt)){
					// Store result
					mysqli_stmt_store_result($stmt);
					
					// Check if username exists, if yes then verify password
					if(mysqli_stmt_num_rows($stmt) == 1){                    
						// Bind result variables
						mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
						if(mysqli_stmt_fetch($stmt)){
							if(password_verify($password, $hashed_password)){
								// Password is correct, so start a new session
								// session_start();
								
								// Store data in session variables
								$_SESSION["loggedin"] = true;
								$_SESSION["id"] = $id;
								$_SESSION["username"] = $username;                            
								$_SESSION["role"] = "customer";  

								$sql = "UPDATE customer set active=1 where username = '".$username."'";
								$connection->query($sql);

								mysqli_close($connection);
								$stmt->close();
								// Redirect user to welcome page
								header("location: ../Homepage/homepage.php");
								exit;
								
							} else{
								// Password is not valid, display a generic error message
								$login_err = "Invalid username or password.";
							}
						}
					} else{
						// Username doesn't exist, display a generic error message
						$login_err = "Invalid username or password.";
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}

				// Close statement
				mysqli_stmt_close($stmt);
			}
		}
	}
    else{
        if(empty($username_err) && empty($password_err)){
			// Prepare a select statement
			$sql = "SELECT COUNT(*) FROM admin WHERE username = '$username' && password = SHA('$password');";
            $res = mysqli_query($connection, $sql);
            $val = mysqli_fetch_assoc($res);
            
			if ($val['COUNT(*)'] == 1) {
                // session_start();						
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username; 
                $_SESSION["role"] = "admin";                                                                           
                // header("location: /dashboard");
                echo "<script>window.location.href = 'http://localhost:3000/dashboard'</script>";
				mysqli_close($link);
            } else{
                // Password is not valid, display a generic error message
                $login_err = "Invalid username or password.";
            }
		}
    }
}
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./signinstyle.css">
    <title>Homepage</title>
</head>
<body>
    <?php 
		include("../base/header.php");
	?>
    <main>
        <div class="container sign-in" style="margin-top: 4%; margin-bottom: 4%;">
            <div class="signin-signup">
                <form class="sign-in-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" class="form-control  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        <!-- <span class="invalid-feedback"><?php echo $username_err; ?></span> -->
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <!-- <span class="invalid-feedback"><?php echo $password_err; ?></span> -->
                    </div>

                    <input type="submit" value="Login" class="btn" name="customer-login-btn">
                    
                    <label>
                        <input id="login-remember" checked="checked" type="checkbox" name="remember" value="1"> Ghi nhớ đăng nhập
                    </label>
                   
                    <div>
                    <a class="psw" href="#">Forgot Password?</a>
                    </div>
                    <p class="social-text">Or Sign in with social platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
                </form>
                <form class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Sign up" class="btn">
                    <p class="social-text">Or Sign in with social platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Member of Brand?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                        <button class="btn" id="sign-in-btn">Sign in</button>
                    </div>
                    <img src="signin.svg" alt="" class="image">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>New to Brand?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                        <button class="btn" id="sign-up-btn">Sign up</button>
                    </div>
                    <img src="signup.svg" alt="" class="image">
                </div>
            </div>
        </div>


        <?php include('../base/footer.php'); ?>
    </main>

    <script src="./signinscript.js"></script>
</body>
</html>
