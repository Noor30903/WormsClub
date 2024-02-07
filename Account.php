<?php
    session_start();
    if(!isset($_SESSION['Email'])){
        header('Location: signin.php');
        exit;
    }
?>

<?php
 
  //ini_set('display_errors', 1);  
  include('db.php');

  $con = new mysqli($db_host, $db_user, $db_pass, $db_database);

  if ($con -> connect_error) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  } 

  if (isset($_SESSION['Email'])) {
    
    $uemail=$_SESSION['Email'];
    
    $query = "SELECT * FROM accounts WHERE Email = '$uemail'";
    $dbresult= mysqli_query($con, $query);
    $rt=mysqli_fetch_array($dbresult);

    $firstname = $rt['firstname'];
    $lastname = $rt['lastname'];
    $phonenumber = $rt['phonenumber'];
    $email = $rt['Email']; 
    
  }
  $con->close(); 

?>

<html>
    <head>
        <title>WormsClub - Account page</title>

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
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet2.css" />
        <style>
          
          body{
              background-color: #f4f7f6;
              margin-top: 20px;
              padding-top: 150px;
          }
          
          label{
            font-family: 'Playfair Display', serif;
            font-size: 30;
            color: #014F86;
          }
          

        </style>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top">
              <div class="container-fluid">
                <a
                  class="navbar-brand"
                  href="main.php"
                  style="
                    color: white;
                    font-family: 'Great Vibes', cursive;
                    font-size: 45;
                  "
                  >WormsClub</a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarCollapse"
                  aria-controls="navbarCollapse"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="bookclub.php"> Our Club</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="library.php">Library</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Account.php">Account</a>
                    </li>
                  </ul>
                  <div>
                    <button class="btn btn-secondary" type="button" id="logout">Log out</button>
                </div>
              </div>
            </nav>
          </header>

          <div class="container justify-content-between align-items-center  w-100 m-auto">
            <div class="p-4 my-4">

              <div class="row g-3">
                <div class="col-sm-6 my-4 ">
                  <label for="firstName" class="form-label">First name</label>
                  <h4 class="h-10 p-2 bg-light border rounded-3"> <?php echo $firstname;?></h4>
                </div>

                <div class="col-sm-6 my-4 ">
                  <label for="lastName" class="form-label">Last name</label>
                  <h4 class="h-10 p-2  bg-light border rounded-3"> <?php echo $lastname;?></h4>
                </div>

                <div class="col-sm-6 my-4 ">
                  <label for="phonenumber" class="form-label">phone number</label>
                  <h4 class="h-10 p-2 bg-light border rounded-3"> <?php echo $phonenumber;?></h4>
                </div>
            
                <div class="col-sm-6 my-4">
                  <label for="email" class="form-label">Email </label>
                  <h4 class="h-10 p-2 bg-light border rounded-3"> <?php echo $email;?></h4>
                </div>

              </div>
            </div>
          </div>
          
          <div class="row">
          <?php
            
            include('db.php');

            $con = new mysqli($db_host, $db_user, $db_pass, $db_database);

            if ($con -> connect_error) {
              echo "Failed to connect to MySQL: " . $con -> connect_error;
              exit();
            } 
          
            if (isset($_SESSION['Email'])) {

              $email=$_SESSION['Email'];

              $query = "SELECT bname, pictureurl, rate FROM books, ratings WHERE Uemail = '$email' and bname=bookname";
              $dbresult= mysqli_query($con, $query);

              while ($rt=mysqli_fetch_array($dbresult)) {
                $bookname = $rt['bname'];
                $bookpic = $rt['pictureurl'];
                $bookrate = $rt['rate'];?>
                <div class="card mb-3 col-md-4" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $bookpic;?>" class="img-fluid rounded-start bd-placeholder-img " />
                    </div>
                   <div class="col-md-8">
                      <div class="card-body">
                      <h5 class="card-title"><?php echo $bookname;?></h5>
                      <p class="card-text">Your rating:<?php echo $bookrate;?></p>
                    </div>
                  </div>
                  </div>
                </div><?php
              }  
            }
            $con->close(); 
          
          ?>
          </div>


          <footer class="d-flex flex-wrap justify-content-between align-items-center py-5 border-top">
            <p class="col-sm-4 mb-0 text-white">Contact us: fake@outlook.com</p>
            <a
              class="navbar-brand"
              href="main.php"
              style="
                color: white;
                font-family: 'Great Vibes', cursive;
                font-size: 45;
              "
              >WormsClub</a>

            <ul class="nav  col-sm-4 justify-content-end">
              <li class="nav-item"><a class="nav-link text-white" href="bookclub.php"> Our Club</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="library.php">Library</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="Account.php">Account</a></li>
            </ul>
            <p class="text-white col-sm-4"> &copy; 2022 Company, Inc</p>
          </footer>
          <script>
            let btn1=document.getElementById("logout");
            //console.log(btn1);
            btn1.addEventListener('click',
            (e)=>{
              e.preventDefault();
              alert("are you sure you want to log out?");
              window.location="logout.php"; 

            })
          </script>
    </body>
</html>