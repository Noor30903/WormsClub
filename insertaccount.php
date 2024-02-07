<?php
    ini_set('display_errors', 1);  
    include('db.php');
    
    $con = new mysqli($db_host, $db_user, $db_pass, $db_database);
    if ($con -> connect_error) {
      echo "Failed to connect to MySQL: " . $con -> connect_error;
      exit();
    } 
    if(isset($_POST['email'])) {
      $email= $_POST['email'];
      $firstname= $_POST['fname'];
      $lastname= $_POST['lastname'];
      $pass= $_POST['password'];
      $phonenumber= $_POST['phonenumber'];
      $security_q= $_POST['Securityquestion'];

      $query = "INSERT into accounts(Email, firstname, lastname, password, phonenumber, sec_question) values(?,?,?,sha1(?),?,sha1(?))";
      if ($stmt = $con->prepare($query)) {
        $stmt->bind_param("ssssis",$email, $firstname, $lastname, $pass, $phonenumber,$security_q);
        $stmt->execute();
        header("Location: signin.php");
        exit();
      }
                 
    }    
    $con->close(); 
?>

