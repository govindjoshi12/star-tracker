<html>
    <head>
        <title>Star Tracker</title>
        <script src="https://kit.fontawesome.com/aa049954cc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div id="header">
            <span id="left-col"></span>
            <span id="middle-col">Janvi's Star Tracker</span>
            <span id="right-col">
                <?php
                    if(isset($_GET["incorrect_password"])) {
                        echo "<strong style='color: white'>Wrong Password!</strong>";
                    }
                ?>
                <button id="modal-btn">New Star</button>
            </span>
        </div>
        <div id="star-container">
        <?php
            if(isset($_GET["deleted_star"])) {
                echo "<strong style='color: purple'>Star Deleted!</strong>";
            }

            date_default_timezone_set("UTC");

            $server = "us-cdbr-east-02.cleardb.com";
            $user = "bf058329e1ede8";
            $pass = "60b4d32e";
            $db = "heroku_955067c7853840e";

            $conn = new mysqli($server, $user, $pass, $db);

            if($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, subject, color, details, timestamp FROM stars ORDER BY timestamp DESC";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $subject = $row["subject"];
                $color = $row["color"];
                $details = $row["details"];
                
                $date = strtotime($row["timestamp"]);
                $date = date('l jS, F Y, h:i:s A', $date);

                echo "<div class='star'>";
                    echo "<span style='color: " . $color . "' onclick='openStarModal(event);'>";
                        echo "<i class='far fa-star fa-5x'></i>";
                    echo "</span>";
                    echo "<span class='star-subject' style='color: " . $color . "'>";
                        echo $subject;
                    echo "</span>";
                    echo "<div class='star-modal'>";
                        echo "<div class='star-modal-content'>";
                            echo "<div class='star-modal-header' style='background-color: " . $color . ";'>";
                                echo $subject;
                            echo "</div>";
                            echo "Details: " . $details . "<br><br>";
                            echo "Date: " . $date . "<br>";
                            echo "<div class='star-modal-footer' style='background-color: " . $color . "'><br>";
                                echo "<form method='POST' action='./delete-star.php'>";
                                    echo "<input style='display: none' name='id' value='" . $id . "'>";
                                    echo "<input class='input-box' name='password'>";
                                    echo "<button type='submit'>Delete Star</button>";
                                echo "</form>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }
        ?>
        </div>
        <?php 
            if(isset($_GET["amount_error"])) {
                echo "<strong style='color: red'>Amount must be between 1 and 5...</strong>";
            }
        ?>
        <div id="modal">
            <div id="modal-content">
                <span id="close">&times;</span>
                <div id="modal-header">
                    Add new star
                </div>
                <div id="modal-body">
                    <form method="POST" action="./new-star-submit.php">
                        <br><label>Subject: </label>
                        <select id="subject" name="subject" class="input-box">
                            <option value="math">Math</option>
                            <option value="english">English</option>
                        </select><br><br>
                        <label>Color: </label>
                        <select id="color" name="color" class="input-box">
                            <option value="red">Red</option>
                            <option value="orange">Orange</option>
                            <option value="yellow">Yellow</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                            <option value="indigo">Indigo</option>
                            <option value="pink">Pink</option>
                        </select><br><br>
                        <label>Details: </label><br>
                        <textarea id="details" rows="4" cols="25" name="details" class="input-box">
                        </textarea><br><br>
                        <label>Amount: </label>
                        <input type="text" name="num" pattern="\d*" maxlength="1" class="input-box"><br><br>
                        <label>Password: </label>
                        <input type="password" name="password" class="input-box"><br><br>
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