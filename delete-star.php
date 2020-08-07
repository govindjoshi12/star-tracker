<?php
    date_default_timezone_set("UTC");
    
    $server = "us-cdbr-east-02.cleardb.com";
    $user = "bf058329e1ede8";
    $pass = "60b4d32e";
    $db = "heroku_955067c7853840e";

    $conn = new mysqli($server, $user, $pass, $db);

    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
    
    $id = $_POST["id"];

    $sql = $conn->prepare("DELETE FROM stars WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute();

    header("Location: ./index.php?deleted_star=true");
    die();
?>