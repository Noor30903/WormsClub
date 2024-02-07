<?php
    session_start();
    if(!isset($_SESSION['Email'])){
        header('Location: signin.php');
        exit;
    }
?>
<html>
  <head>
    <title>WormsClub- Our Club</title>
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=Great+Vibes&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="stylesheet2.css" />

    <style>
      
      body {
        background-color: #f4f7f6;
        margin-top: 20px;
        padding-top: 150px;
      }
      
    
      .chat-online {
        color: #34ce57;
      }

      .chat-offline {
        color: #e4606d;
      }

      .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 800px;
        overflow-y: scroll;
      }

      .chat-message-left,
      .chat-message-right {
        display: flex;
        flex-shrink: 0;
      }

      .chat-message-left {
        margin-right: auto;
      }

      .chat-message-right {
        flex-direction: row-reverse;
        margin-left: auto;
      }
      
      .flex-grow-0 {
        flex-grow: 0 !important;
      }
      .border-top {
        border-top: 1px solid #dee2e6 !important;
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

    <main class="content">
      <div class="container p-0 my-4">
        <h1 class="h3 mb-3">Messages</h1>

        <div class="card px-4">
          <div class="row g-0">
            
          <div> 
            <div class="position-relative">
              <div class="chat-messages p-4">
                <!--select from messeges-->
                
                <?php
                  include('db.php');

                  $con = new mysqli($db_host, $db_user, $db_pass, $db_database);
      
                  if ($con -> connect_error) {
                    echo "Failed to connect to MySQL: " . $con -> connect_error;
                    exit();
                  } 
                  date_default_timezone_set ('Asia/Riyadh');
                  $email = $_SESSION['Email'];
                  if(isset($_POST['message'])){
                    $msg=$_POST['message'];
                    $datemsg=$_POST['date'];
                    $query = "INSERT into messages(Useremail, message, date) values(?,?,?)";
                    if ($stmt = $con->prepare($query)) {
                      if(isset($_POST['submit'])){
                        $stmt->bind_param("sss",$email, $msg, $datemsg);
                        $stmt->execute(); 
                      }  
                    }
                  }
                  
                  $query = "SELECT firstname, message, date, Email FROM messages, accounts WHERE Email = Useremail ORDER BY date";
                  $dbresult= mysqli_query($con, $query);
                  while($rt=mysqli_fetch_array($dbresult)){
                    
                    $firstname = $rt['firstname'];
                    $msg = $rt['message'];
                    $user = $rt['Email'];
                    $date = $rt['date'];

                    if($user===$email){
                     echo '<div class="chat-message-right mb-4">
                      <div>
                      </div>
                       <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                       <div class="font-weight-bold mb-1">You</div>
                      ',$msg.'<div class="text-muted small text-nowrap mt-2">
                      ',$date.'
                      </div>
                      </div>
                      </div>';
                    }else{
                      echo '<div class="chat-message-left pb-4">
                      <div>
                      </div>
                       <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                         <div class="font-weight-bold mb-1">',$firstname.'</div>
                         ',$msg.'<div class="text-muted small text-nowrap mt-2">
                         ',$date.'
                      </div>
                      </div> 
                     </div>';
                   }
                  }
                  echo '<form class="flex-grow-0 py-3 px-4 border-top" method="post">
                  <div class="input-group">
                  <input
                  type="text"
                  class="form-control"
                  placeholder="Type your message"
                  name="message"
                  />
                <input class="btn btn-primary" name="submit" value="Send" type="submit"/>
                <input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'"/>
              </div>
              </form>';
              $con->close();     
              ?>
              
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
      <p class="col-md-4 mb-0 text-white">Contact us: fake@outlook.com</p>
      <a
        class="navbar-brand"
        href="main.html"
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
