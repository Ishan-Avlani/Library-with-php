<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "root", "","library");
if(!$conn){
die("Connection Failed" . mysqli_connect_error());
}
//Insert into database
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_POST['image'];

$sql = "INSERT INTO books_data (title, description, image) VALUES ('$title', '$description', '$image')";
if(mysqli_query($conn,$sql)) {
echo "Successfully inserted into table";
}else{
echo "Error in inserting table";
}
?>