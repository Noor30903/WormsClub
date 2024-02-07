<?php
    ini_set('display_errors', 1);  
    include('db.php');

    $con = new mysqli($db_host, $db_user, $db_pass, $db_database);
    if ($con -> connect_error) {
      echo "Failed to connect to MySQL: " . $con -> connect_error;
      exit();
    }

    

    //if(isset($_POST['close'])) {
    //    header("Location: library.php");
    //    exit();
    //}
  
    if (isset($_GET["bname"])) { 
        $pass=$_POST['password'];
        $email=$_POST['email'];
        $book=$_GET['bname'];

        $query = "DELETE FROM ratings WHERE bookname=?;";
        if($stmt = $con->prepare($query)){
            $stmt->bind_param("s",$book);
            $stmt->execute();
        }
        $q = "DELETE FROM books WHERE bname=?;"; 
        if($s = $con->prepare($q)){
            $s->bind_param("s",$book);
            $s->execute(); 
            header("Location: library.php");
            exit();
        }                                 
    }
  
    $con->close(); 
    
?>