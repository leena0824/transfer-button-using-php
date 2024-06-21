<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

// Check if the row has already been transferred
$sql_check = "SELECT * FROM `transfer` WHERE id = ? AND transferred = 1";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("i", $id);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    echo "already_transferred";
    $stmt_check->close();
    $conn->close();
    exit();
}

// Insert or update the data in the database
$sql = "INSERT INTO `transfer`(id, name, email, address, transferred) VALUES (?, ?, ?, ?, 1)
        ON DUPLICATE KEY UPDATE name = ?, email = ?, address = ?, transferred = 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issssss", $id, $name, $email, $address, $name, $email, $address);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
