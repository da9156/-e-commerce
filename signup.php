<head>
<link rel="stylesheet" href="dist/css1/login1.css">
</head>

<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

?>
<?php include 'includes/header.php'; ?>
<body>
<div class="">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
        <!-- signup -->
        <form class="login-content animate form_container-2" action="register.php" method="post" style="margin: 2.5% 39%; width: 25.2%;">
            <div class="logo_container"></div>
            <div class="title_container">
                <p class="title">Sign up to your Account</p>
                <span class="subtitle">Create a free account with your email.</span>
            </div>
            <br>
            <div class="input_container">
                <label class="input_label" for="name_field">Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
            </div>
            <div class="input_container">
                <label class="input_label" for="name_field">Lastname</label>
                <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
            </div>
            <div class="input_container">
                <label class="input_label" for="email_field">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
            </div>
            <div class="input_container">
                <label class="input_label" for="password_field">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="input_container">
                <label class="input_label" for="password_field">Confirm password</label>
                <input type="password" class="form-control" name="repassword" placeholder="Confirm password" required>
            </div>
            <br>
            <button title="Sign In" type="submit" class="sign-in_btn" name="signup">
            <i class="fa fa-pencil"></i> <span> Sign up </span>
            </button>
            <br>
            <p class="signup">
                I already have a account?
                <a href="login.php" style="cursor: pointer; color:blue">Log in</a>
            </p>
            Go to 
            <a href="index.php"><i class="fa fa-home"></i> Home</a>

        </form>
    <!-- signup -->
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>