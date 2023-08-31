
<?php
require('config.php');
require('function.php');
if(isset($_POST['login'])){
    $username=get_safe_value($con,$_POST['username']);
    $password=get_safe_value($con,$_POST['user_password']);
    $query ="SELECT * FROM `user` WHERE user_name='$username' and user_password='$password'";
    $res= mysqli_query($con,$query);
    $count = mysqli_num_rows($res);
    if($count>0){
		echo "<script>alert('Successfully LOGIN')</script>";

		session_start();
        $_SESSION['USER_LOGIN']=true;
        $_SESSION['USER_USERNAME']=$username;
        header('location:index.php');
        die();

    }
    else{
		echo "<script>alert('LOGIN FAILED')</script>";
    }
}

?>
<?php
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $p_dec = $_POST['email'];
    $category_type = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Establish a database connection here using mysqli_connect()

    $exists_sql = "SELECT * FROM `user` WHERE user_name = '$name'";
    $resu = mysqli_query($con, $exists_sql);

    $numexits = mysqli_num_rows($resu);

    if ($numexits > 0) {
        echo "<script>alert('Username already exists')</script>";
    } else {
        if ($category_type == $cpassword) {
            $insert_sql = "INSERT INTO `user`(`user_name`, `user_email`, `user_password`) VALUES ('$name', '$p_dec', '$category_type')";
            $res = mysqli_query($con, $insert_sql);

            if ($res) {
                echo "<script>alert('Successfully registered')</script>";
            } else {
                echo "<script>alert('Error while inserting data')</script>";
            }
        } else {
            echo "<script>alert('Password and confirm password do not match')</script>";
        }
    }
}
?>


<!doctype html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">

</head>
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0  pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
                                            <form method="POST">
											<div class="form-group">
												<input type="text" name="username" class="form-style" placeholder="username">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="user_password" class="form-style" placeholder="Password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn mt-4" name="login">Login</button>
											<p class="mb-0 mt-4 text-center"><label for="reg-log">I don't Have Account</label></p>
                                            </form>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3">Sign Up</h4>
                                            <form method="POST" enctype="multipart/form-data" >
											<div class="form-group">
												<input type="text" name="name" class="form-style" placeholder="Full Name">
												<i class="input-icon uil uil-user"></i>
											</div>		
                      <div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Email">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Password">
												<i class="input-icon uil uil-lock-alt"></i>
                                              </div>
                                             <div class="form-group mt-2">
											 <div class="form-group mt-2">
												<input type="password" name="cpassword" class="form-style" placeholder="confirmPassword">
												<i class="input-icon uil uil-lock-alt"></i>
                                              </div>
                                           
											<button name="insert" type="submit" class="btn mt-4">Register</button>
                                            </form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>