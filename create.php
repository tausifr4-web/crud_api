<?php
header("Content-Type: application/json");
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->name) && isset($data->email) && isset($data->phone)) {
    $name = $data->name;
    $email = $data->email;
    $phone = $data->phone;

    
    $checkQuery = "SELECT id FROM users WHERE email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        
        echo json_encode(["error" => "Email already exists"]);
        exit; 
    } 

    
    $query = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    
    if ($conn->query($query) === TRUE) {
        echo json_encode(["message" => "User created successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $conn->error]);
    }
} else {
    echo json_encode(["error" => "Invalid input"]);
}
?>
