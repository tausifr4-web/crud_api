<?php
header("Content-Type: application/json");
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->id) && isset($data->name) && isset($data->email) && isset($data->phone)) {
    $id = $data->id;
    $name = $data->name;
    $email = $data->email;
    $phone = $data->phone;

    $query = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'";

    if ($conn->query($query) === TRUE) {
        echo json_encode(["message" => "User updated successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $conn->error]);
    }
} else {
    echo json_encode(["error" => "Invalid input"]);
}
?>
