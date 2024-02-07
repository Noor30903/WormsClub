
<html>
  <head>
    <title>Sign in</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=Great+Vibes&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="formstyle.css" />
    <style>
      
      .form-signin {
        max-width: 400px;
        padding: 15px;
      }

      .form-signin .form-floating:focus-within {
        z-index: 2;
      }

      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      
      .error {

        background: #F2DEDE;

        color: #0c0101;

        padding: 10px;

        width: 95%;

        border-radius: 5px;

        margin: 20px auto;
            
      }
    </style>
  </head>

  <body class="container text-center">

    <form class="form-signin w-100 m-auto" method="post" action='signin.php'>
      <div class="p-4 border rounded-3" style="background-color:#edf2fb;">
        <h1 class="h3 mb-3 fw-normal text-center" style="color: #013a63; font-family: 'Great Vibes', cursive; font-size: 50;">WormsClub</h1>
        <?php if (isset($_GET['error'])) { ?>

          <p class="error"><?php echo $_GET['error']; ?></p>

          <?php } ?>
        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
            name="email"
          />
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
            name="password"
          />
          <label for="floatingPassword">Password</label>
        </div>

        <input class="btn w-100 btn-lg btn-primary" type="submit" placeholder="Sign in"/>
        <p class="mt-3 mb-3 text-muted">
          dont have an account?
          <a type="submit" href="signup.php"> Sign Up </a>
        </p>
        <p class="mt-3 mb-3 text-muted">
          forgot your password?
          <a type="submit" href="changepassword.php"> change password </a>
        </p>
      </div>
    </form>
  </body>
</html>

<?php 

  session_start();

  ini_set('display_errors', 1);  
  include('db.php');
  
  //include('signin.php');


  $con = new mysqli($db_host, $db_user, $db_pass, $db_database);

  if ($con -> connect_error) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  } 
  if (isset($_POST['email'])) { 
    $useremail = $_POST['email']; 
    $pass = $_POST['password'];
    if (empty($useremail)) {

      //echo"<h2>Email address is required</h2>";
      header("Location: signin.php?error=Email address is required");
      exit();

    }else if(empty($pass)){

      //echo"<h2>Password is required</h2>";
      header("Location: signin.php?error=Password is required");

      exit();
    }

    $query = "SELECT Email FROM accounts WHERE Email = ? AND password = sha1(?)";
  
    if ($stmt = $con->prepare($query)) {
      $stmt->bind_param('ss', $useremail, $pass);
      $stmt->execute(); 
      $result = $stmt->get_result();
      if ($row = $result -> fetch_row()) {
        //echo "Logged in!";
        $_SESSION['Email'] = $useremail;
        header("Location: Account.php");
        exit();
      }else{
        header("Location: signin.php?error=incorrect email or password");
      }   
    }
  }    
  $con->close();
?>