<?php
//
//$developer_id = $_POST["developer_id"];
//$developer_name = $_POST["developer_name"];
//$location = $_POST["location"];
//$average_game_rating = $_POST["average_game_rating"];
//
//$servername = "localhost";
//$username = "root";
//$password = "zhengjia";
//$dbname = "gamedb";
//
///* connect to database */
//$conn = new mysqli($servername, $username, $password, $dbname);
//if ($conn->connect_error) {
//    echo "Connection failed.";
//    die("Connection failed: " . $conn->connect_error);
//}
//
///* insert function */
//
///* user */
//$sql = "INSERT INTO User
//		VALUES ('$user_id', '$age', '$gender', '$job')";
//if ($conn->query($sql) === TRUE) {
//    echo "Insertion success.\n";
//}
//else {
//    echo "Insertion error: " . $conn->error;
//}
//
///* developer */
//$sql = "INSERT INTO Developer
//		VALUES ('$developer_id', '$developer_name', '$location', '$average_game_rating')";
//if ($conn->query($sql) === TRUE) {
//    echo "Insertion success.\n";
//}
//else {
//    echo "Insertion Error: " . $conn->error;
//}
//
///* game */
//$sql = "INSERT INTO Game
//		VALUES ('$game_id', '$game_name', '$genre', '$rating', '$release_date', '$developer_id')";
//if ($conn->query($sql) === TRUE) {
//    echo "Insertion success.\n";
//}
//else {
//    echo "Insertion Error: " . $conn->error;
//}
//
///* platform */
//$sql = "INSERT INTO Platform
//		VALUES ('$platform_id', '$platform_name')";
//if ($conn->query($sql) === TRUE) {
//    echo "Insertion success.\n";
//}
//else {
//    echo "Insertion Error: " . $conn->error;
//}
//
///* purchased */
//$sql = "INSERT INTO Purchased
//		VALUES ('$user_id', '$game_id', '$purchase_date', '$rating')";
//if ($conn->query($sql) === TRUE) {
//    echo "Insertion success.\n";
//}
//else {
//    echo "Insertion Error: " . $conn->error;
//}
//
///* belongs to */
//$sql = "INSERT INTO Game
//		VALUES ('$game_id', '$platform_id')";
//if ($conn->query($sql) === TRUE) {
//    echo "Insertion success.\n";
//}
//else {
//    echo "Insertion Error: " . $conn->error;
//}
//
///* res after insertion */
//
///* user */
//$sql = "SELECT *
//		FROM User";
//$res = $conn->query($sql);
//if ($res->num_rows > 0) {
//    echo "<table><tr><th>user_id</th><th>age</th><th>gender</th><th>job</th></tr>";
//    while($row = $res->fetch_assoc()) {
//        echo "<tr><td>".$row["user_id"]."</td><td>".$row["age"]."</td><td> ".$row["gender"]."</td><td>".$row["job"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//
///* developer */
//$sql = "SELECT *
//		FROM Developer";
//$res = $conn->query($sql);
//if ($res->num_rows > 0) {
//    echo "<table><tr><th>developer_id</th><th>developer_name</th><th>location</th><th>average_game_rating</th></tr>";
//    while($row = $res->fetch_assoc()) {
//        echo "<tr><td>".$row["developer_id"]."</td><td>".$row["developer_name"]."</td><td> ".$row["location"]."</td><td>".$row["average_game_rating"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//
///* game */
//$sql = "SELECT *
//		FROM Game";
//$res = $conn->query($sql);
//if ($res->num_rows > 0) {
//    echo "<table><tr><th>gamer_id</th><th>game_name</th><th>genre</th><th>rating</th><th>release_date</th><th>developer_id</th></tr>";
//    while($row = $res->fetch_assoc()) {
//        echo "<tr><td>".$row["game_id"]."</td><td>".$row["game_name"]."</td><td> ".$row["genre"]."</td><td>".$row["rating"]."</td><td>".$row["release_date"]."</td><td>".$row["developer_id"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//
///* platform */
//$sql = "SELECT *
//		FROM Platform";
//$res = $conn->query($sql);
//if ($res->num_rows > 0) {
//    echo "<table><tr><th>platform_id</th><th>platform_name</th></tr>";
//    while($row = $res->fetch_assoc()) {
//        echo "<tr><td>".$row["platform_id"]."</td><td>".$row["platform_name"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//
///* purchased */
//$sql = "SELECT *
//		FROM Purchased";
//$res = $conn->query($sql);
//if ($res->num_rows > 0) {
//    echo "<table><tr><th>user_id</th><th>game_id</th><th>purchase_date</th><th>rating</th></tr>";
//    while($row = $res->fetch_assoc()) {
//        echo "<tr><td>".$row["user_id"]."</td><td>".$row["game_id"]."</td><td>".$row["purchase_date"]."</td><td>".$row["rating"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//
///* belongs to */
//$sql = "SELECT *
//		FROM BelongsTo";
//$res = $conn->query($sql);
//if ($res->num_rows > 0) {
//    echo "<table><tr><th>game_id</th><th>platform_id</th>></tr>";
//    while($row = $res->fetch_assoc()) {
//        echo "<tr><td>".$row["game_id"]."</td><td>".$row["platform_id"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//
//$conn->close();
//
//?>