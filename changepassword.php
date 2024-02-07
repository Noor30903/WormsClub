<html>
  <head>
    <title>Sign Up</title>
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
      
      body {
        height: 100%;
      }
      .form-signup {
        max-width: 450px;
        padding: 15px;
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
  <body class="container">
    <form class="form-signup w-100 m-auto" method="post" action='changepassword.php'>
      <div class="p-4 border rounded-3" style="background-color: #edf2fb">
        <h1
          class="h3 mb-3 fw-normal text-center"
          style="
            color: #013a63;
            font-family: 'Great Vibes', cursive;
            font-size: 60;
          "
        >
          WormsClub
        </h1>
        <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <div class="row g-3 r">

          <div class="col-12">
            <label for="email" class="form-label">Email </label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="you@example.com"
              name="email"/>
          </div>

          <div class="col-12">
            <label for="phonenumber" class="form-label">phone number</label>
            <input
              type="text"
              class="form-control"
              id="phonenumber"
              name="phonenumber"/>
          </div>

          <div class="col-12">
          <label  class="form-label">What was your favorite school teacher's name?</label>
            
            <input
              type="text"
              class="form-control"
              id="Security question"
              placeholder="Security question"
              name="Securityquestion"/>
          </div>

          <div class="col-12">
              <label for="password" class="form-label">New Password</label>
              <input
                type="password"
                class="form-control"
                id="Password"
                placeholder="Password"
                name="password"/>
            </div>
            </div>
            <hr class="my-4" />
          <input class="w-100 btn btn-lg btn-primary" type="submit"/>
          </div>
    </form>
  </body>
</html>
<?php
  ini_set('display_errors', 1);  
  include('db.php');
  $con = new mysqli($db_host, $db_user, $db_pass, $db_database);
  if ($con -> connect_error) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  } 
  
  if (isset($_POST['email'])) {
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email']; 
    $sq = $_POST['Securityquestion'];
    $pass = $_POST['password'];

    if (empty($email)) {
      header("Location: changepassword.php?error=Email address is required");
      exit();
    } 

    if (empty($phonenumber)) {
      header("Location: changepassword.php?error=Phone number is required");
      exit();
    }

    if (empty($pass)) {
      header("Location: changepassword.php?error= please enter your new password");
      exit();
    }

    $checkemail="SELECT * FROM accounts Where Email=? AND phonenumber=? AND sec_question = sha1(?)";
    if ($s = $con->prepare($checkemail)) {
      $s->bind_param('sis', $email,$phonenumber,$sq);
      $s->execute(); 
      $result = $s->get_result();
      if ($row = $result -> fetch_row())
      {                          
        $query = "UPDATE accounts SET password = sha1(?) Where Email = ? ";
        if ($stmt = $con->prepare($query)) {
          $stmt->bind_param("ss", $pass, $email);
          $stmt->execute();
          header("Location: signin.php"); 
          exit();
        }
      }else {
        header("Location: changepassword.php?error=incorrect email or phonenumber or security question");
        exit();
      }
    }
  }            
  $con->close(); 
?>       
      

