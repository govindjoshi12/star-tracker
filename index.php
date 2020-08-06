<html>
    <head>
        <title>Star Tracker</title>
        <script src="https://kit.fontawesome.com/aa049954cc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div id="star-container">
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

            $sql = "SELECT id, subject, color, details, date FROM stars";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $subject = $row["subject"];
                $color = $row["color"];
                $details = $row["details"];
                
                $date = strtotime($row["date"]);
                $date = date('l jS, F Y, h:i:s A', $date);

                echo "<div class='star'>";
                    echo "<span style='color: " . $color . "' onclick='openStarModal(event);'>";
                        echo "<i class='far fa-star fa-10x'></i>";
                    echo "</span>";
                    echo "<div class='star-modal'>";
                        echo "<div class='star-modal-content'>";
                            echo "<div class='star-modal-header' style='background-color: " . $color . ";'>";
                                echo $subject;
                            echo "</div>";
                            echo "ID: " . $id . "<br>";
                            echo "Color: " . $color . "<br>";
                            echo "Subject: " . $subject . "<br>";
                            echo "Details: " . $details . "<br>";
                            echo "Date: " . $date . "<br><br>";
                            echo "<div class='star-modal-footer' style='background-color: " . $color . "'>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }
        ?>
        </div>
        <button id="modal-btn">Open</button>
        <div id="modal">
            <div id="modal-content">
                <span id="close">&times;</span>
                <div id="modal-header">
                    Add new star
                </div>
                <div id="modal-body">
                    <form method="GET">
                        <br><label>Subject: </label>
                        <select id="subjet" name="subject-choices" class="input-box">
                            <option value="math">Math</option>
                            <option value="english">English</option>
                        </select><br><br>
                        <label>Color: </label>
                        <select id="color" name="color-choices" class="input-box">
                            <option value="red">Red</option>
                            <option value="orange">Orange</option>
                            <option value="yellow">Yellow</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                            <option value="indigo">Indigo</option>
                        </select><br><br>
                        <label>Link: </label>
                        <input type="url" class="input-box"><br><br>
                        <label>Details: </label><br>
                        <textarea id="details" rows="4" cols="25" class="input-box">
                        </textarea><br><br>
                        <button type="submit">Add Star</button>
                    </form>
                </div>
                <div id="modal-footer">
                </div>
            </div>
        </div>
    </body>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="./css/stars.css">
</html>