

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "root", "","library");
if(!$conn){
die("Connection Failed" . mysqli_connect_error());
}
//Insert into database
$name = $_POST['name'];
$sirname = $_POST['sirname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$number = $_POST['number'];
$sql = "INSERT INTO userdata (name, sirname, gender, address, state, city, username, pwd, email, number) VALUES ('$name', '$sirname', '$gender', '$address', '$state', '$city', '$username', '$pwd', '$email', '$number')";
if(mysqli_query($conn,$sql)) {
echo "Successfully inserted into table";
}else{
echo "Error in inserting table";
}
?>