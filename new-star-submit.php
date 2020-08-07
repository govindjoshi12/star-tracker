<?php
    date_default_timezone_set("UTC");
    
    $password = $_POST["password"];
    if($password != "noneOfYourBusiness420") {
        header("Location: ./index.php?incorrect_password=true");
        die();
    }

    $server = "us-cdbr-east-02.cleardb.com";
    $user = "bf058329e1ede8";
    $pass = "60b4d32e";
    $db = "heroku_955067c7853840e";

    $conn = new mysqli($server, $user, $pass, $db);

    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
    
    $subject = $_POST["subject"];
    $color = $_POST["color"];
    $details = $_POST["details"];
    $num = (int)$_POST["num"];

    if($num <= 0 || $num > 5) {
        header("Location: ./index.php?amount_error=true");
        die();
    }

    $sql = $conn->prepare("INSERT INTO stars (subject, color, details) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $subject, $color, $details);

    for($i = 0; $i < $num; $i++) {
        $sql->execute();
    }

    header("Location: ./index.php");
    die();
?>