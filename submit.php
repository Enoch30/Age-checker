<?php
    //echo 'Test';
    $name = $_GET['fullname'];
    $dob = $_GET['date'].' '.$_GET['time'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "agechecker";

    // echo $dob;

    $conn = new mysqli( $servername, $username, $password, $database);
    if($conn->connect_error){
        die("Connection failes: " . $conn->connect_error);
    }
    // echo "Connected successfully <br>";
    $sql = "INSERT INTO `people` ( `name`, `dob`) VALUES ('$name', '$dob')";
    if ($conn->query($sql) === TRUE) {
        // echo "Created new record successfully";
    } else {
        echo "There was an error <br>". $sql . "<br>". $conn->error;
    }

    $sql = "SELECT * FROM people";
    $result = $conn->query($sql);
    // $now = new DateTime()->format('Y-m-d h');
    // echo $now

    if ($result->num_rows > 0){
        echo "
        <h3>Everyone's age are as follows;</h3><hr>
        <ul>";
        $now = new  DateTime(date("Y-m-d h:m:s"));
        while ($row = $result->fetch_assoc()){
            echo "<li>" . $row["name"]." - ". $now->diff( new DateTime($row["dob"]))->format('%y years %d days %h hours old') ."</li><br><br>";
        }
        echo "</ul>";
    } else {
        echo "There is no data";
    }

    $conn->close();

?>