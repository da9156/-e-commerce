<head>
<link rel="stylesheet" href="dist/css1/login1.css">
<?php include 'includes/header.php'; ?>
</head>


<?php include 'includes/session.php'; ?>
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
        <!-- Forgot password -->
        <form class="login-content animate form_container-2" action="reset.php" method="post">
            <div class="logo_container"></div>
            <div class="title_container">
                <p class="title">Forgot Password</p>
                <span class="subtitle">Change your password.</span>
            </div>
            <br>
            <div class="input_container">
                <label class="input_label" for="email_field">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <br>
            <button title="Sign In" type="submit" class="sign-in_btn" name="reset">
            <i class="fa fa-mail-forward"></i>
                <span> Send </span>
            </button>
            <br>
            <p class="signup">
              I rememberd my password
                <a href="login.php" style="cursor: pointer; color:blue">Log In Now</a>
            </p>
            Go to
            <a href="index.php"><i class="fa fa-home"></i> Home</a>

        </form>
    <!-- Forgot password -->
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>