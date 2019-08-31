<?php
require './database/db_connect.php';

$name = ucwords($_REQUEST['name']);
$age = $_REQUEST['age'];
$gender = $_REQUEST['sex'];

// Checking validation
if ($name === "" || strlen($name) <  3) {
  echo "Please enter the name or make sure your name is 3 character length!";
  die();
} else if ($age === "" || $age > 149) {
  echo "Please enter the age or you are died!";
  die();
} else if ($gender === "") {
  if ($gender === "MALE") {
    //Male logic
  }
  else if($gender === "FEMALE") {

  }
  else if($gender === "OTHERS") {

  }
  else {
    echo "You are the alien!";
  }
  die();
} else {
  echo "<div style='color:green'>Hello, my name is ".$name." and i'm ".$age." years old. Here is my gender: ".$gender."!</div>";
}

//save to database
$sql = "INSERT INTO user (name, age, gender)
VALUES ('$name', '$age', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo $name." record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

require_once("displayData.php");