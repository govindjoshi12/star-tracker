<?php
    date_default_timezone_set("UTC");
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "star-tracker";

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