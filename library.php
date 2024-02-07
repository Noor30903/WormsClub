<?php
    session_start();
    if(!isset($_SESSION['Email'])){
        header('Location: signin.php');
        exit;
    }
?>
<html>
  <head>
    <title>WormsClub - Library</title>
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
    <link rel="stylesheet" href="stylesheet2.css" />
   

    <style>
      body {
        margin-top: 20px;
        padding-top: 150px;
      }
     
      .card-body{
        width :100%;
        height:250px;

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
        </div>
      </nav>

    </header>
    
          <div class="container m-auto ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <?php

              include('db.php');

              $con = new mysqli($db_host, $db_user, $db_pass, $db_database);

              if ($con -> connect_error) {
                echo "Failed to connect to MySQL: " . $con -> connect_error;
                exit();
              } 

              $email=$_SESSION['Email'];
              $query = "SELECT * FROM books";
              $dbresult= mysqli_query($con, $query);
              while ($rt=mysqli_fetch_array($dbresult)) {
                $bookname = $rt['bname'];
                $bookpic = $rt['pictureurl'];
                $book = $rt['burl'];
                $bdesc = $rt['bookdesc'];
                ?>
                <div class="col-lg-4  col-md-6 col-sm-12">
                  <div class="card shadow-sm ">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="300" src="<?php echo $bookpic;?>"/>
                    <div class="card-body" >
                      <h4><?php echo $bookname;?></h4>
                      <p class="card-text"><?php echo $bdesc;?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group mt-3 mb-3">
                          <a  href="<?php echo $book;?>" type="button" class=" btn btn-md btn-outline-secondary">View</a>
                          <a href="rating.php?bname=<?php echo $bookname;?>"  type="button" class=" btn btn-md btn-outline-secondary" >Rate </a>
                          <?php
                          if ($_SESSION['Email']=='you@gmail.com')
                          { ?>
                            <a href="deletebook.php?bname=<?php echo $bookname;?>"  type="button"  class=" btn btn-md btn-outline-secondary" >delete </a>
                          <?php } ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }  
              $con->close(); 
              ?>
            </div>
          </div>

        <hr class="featurette-divider" />
  
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
          <p class="col-md-4 mb-0 text-white">Contact us: fake@outlook.com</p>
          <a
            class="navbar-brand"
            href="main.php"
            style="
              color: white;
              font-family: 'Great Vibes', cursive;
              font-size: 45;
            "
            >WormsClub</a>
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a class="nav-link text-white" href="bookclub.php"> Our Club</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="library.php">Library</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="Account.php">Account</a></li>
          </ul>
          <p class="text-white col-md-4"> &copy; 2022 Company, Inc</p>
        </footer>

  </body>
</html>
