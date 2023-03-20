<?php
include 'includes/conn.php';
include 'drctfl.php';


$stmt = $conn->prepare("SELECT * FROM tblraffle WHERE Status = ?");
$status = 'Active';
$stmt->bind_param("s", $status);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

// Create an array to store the raffle data
$raffleData = array();

// Loop through the result and add the data to the array
while ($row = $result->fetch_assoc()) {
    $raffleData[] = $row;
}

// Convert the array to JSON and output it
echo json_encode($raffleData);



?>