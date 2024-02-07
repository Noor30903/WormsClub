<?php
  session_start();
  ini_set('display_errors', 1);  
  include('db.php');

  $con = new mysqli($db_host, $db_user, $db_pass, $db_database);
  if ($con -> connect_error) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }
  if(isset($_GET['rate'])){
    $email=$_SESSION['Email'];
    $bookname=$_SESSION['bname'];
    $therate=$_GET['rate'];
  
    $query = "INSERT into ratings(Uemail, bookname, rate) values(?,?,?)";
    if($stmt = $con->prepare($query)){
        $stmt->bind_param("ssi",$email, $bookname,$therate);
        $stmt->execute();  
    }
  }
  
  $con->close(); 
  header("Location: library.php");
  exit;
?>


  

  