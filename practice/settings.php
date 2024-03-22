<?php
    $dsn = "mysql:host=localhost;dbname=eoi";
    $dbusername = "root";
    $dbpassword = "";

    try{
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //if we get an error -> thrown an exception
    }catch(PDOException $e){
        echo "Connection failed: ". $e->getMessage();
    }
    
?>


<!-- for submission to Mercury Server
      $host = "feenix-mariadb.swin.edu.au";
      $user = "s105004243";
      $pwd = "131104";  -> initial pwd
      $sqp_db = "s105004243_db";
?> -->