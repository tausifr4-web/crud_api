<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_api";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}
?>


 <?php


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "crud_api";

// $coon = new mysqli($servername, $username, $password, $dbname);
// if($coon->connect_error){
//     die(json_encode(["error" => "connection failed: " . $coon->connect_error]));
// }

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "crud_api";

// $coon = new mysqli($servername, $username, $password, $dbname);

// if($coon->connect_error){
//     die(json_encode(["error"=>"connection failed: " . $coon->connect_error]));
// }

// $servername = "localhost";
// $username = "root";
// $password ="";
// $dbname ="crud-api";

// $coon = new mysqli($servername, $username, $password, $dbname);

// if($coon->connect_error){
//     die(json_encode(["error"=>"connection faild: " . $conn->connect_error]));
// }

//  $servername ="localhost";
//  $username ="root";
//  $password ="";
//  $dbname ="crud_api";

//  $coon = new mysqli($servername,$username,$password,$dbname);
//  if($coon->connect_error){
//     die(json_encode(["error"=>"connection faild: " . $conn->connect_error]));
//  }

// $servername ="localhost";
// $username ="root";
// $password="";
// $dbname="crud_api";

// $coon = new mysqli($servername,$username,$password,$dbname);
//   if($coon->connect_error){
//      die(json_encode(["error"=>"connection faild: " . $coon->connect_error]));
// }

//  $servername ="localhost";
//  $username ="root";
//  $password ="";
//  $dbname= "crude_api";
//  $conn = new mysqli($servername, $username,$password,$dbname);
//     if($coon->connect_error){
//         die(json_encode(["error"=>"connection faild: " . $coon->connect_error]));
//     }


// $srvername = "localhost";
// $username ="root";
// $password ="";
// $dbname ="crud_api";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if($coon->connect_error){
//     die(json_encode(["error"=>"connection faild: " . $coon->connect_error]));
// }


// $servername ="localhost";
// $username ="root";
// $password ="";
// $dbname ="crud_api";

// $coon = new mysqli($servername, $username, $password, $dbname);

// if($coon->connect_error){
//     die(json_encode(["error"=>"connection faild: " .$coon->connect_error]));
// }


// $servername ="localhost";
// $username ="root";
// $password ="";
// $dbname ="crud_api";

// $coon = new mysqli($servername, $username, $password, $dbname);

// if($coon->connect_error){
//     die(json_encode(["error"=>"connection faild:" .$coon->connect_error]));
// }
