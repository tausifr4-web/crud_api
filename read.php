<?php
header("Content-Type: application/json");
include 'db.php';

$query = "SELECT * FROM users";
$result = $conn->query($query);

$users = [];

while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);
?>
<?php


header ("content-type: application/json");
include 'db.php';
$query ="SELECT * FROM users";
$result = $conn->query($query);

$users =[];
while($row = $result->fetch_assoc()){
    $users[]= $row;

}
echo json_encode($users);


header("connect-type: application/json");
include 'db.php';

$query = "SELECT * FROM users";
$result = $conn->query($query);
$users = [];
while($row = $result->fetch_assoc()){
    $users[]= $row;

}
echo json_encode($users);




header("content-type: application/json");
include 'db.php';

$query = "SELECT * FROM users";
$result = $conn->query($query);
$users = [];
while($row = $result->fetch_assoc()){
    $users[] = $row;

}
echo json_encode($users);



header("content-type: application/json");
include 'db.php';

$query = "SELECT * FROM users";
$result =$conn->query($query);

$users = [];
 while($row = $result->fetch_assoc()){
    $users[] =$row;

 }
 echo json_encode($users);




header("comntent->type: application/json");
include 'db.php';
$query = "SELECT * FROM users";
$users = $conn->query($query);
$user =[];
while($row = $result->fetch_assoc()){
    $user[]= $row;

}
echo json_encode($users);



// header ("contrent-type: application/json");
// include 'db.php';
//  $query = "SELECT * FROM users";
//  $result = $coon->query($query);

//  $user = [];

//  while ($row = $result->fetch_assoc()){
//     $user[] =$row;
//  }
// echo json_encode($users);



