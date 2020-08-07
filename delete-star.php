<?php
    date_default_timezone_set("UTC");
    
    $server = "localhost";
    $user = "root";
    $pass = "caffreyNeal$12";
    $db = "star-tracker";

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