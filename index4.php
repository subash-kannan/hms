<?php 
//patient appointment booking insertion in to the db
$connect=mysqli_connect("localhost","root","","hmss") or die("connection failed");
if(ISSET($_GET['submit'])){
$name = $_GET['name'];
$disease = $_GET['disease'];
// $fee = $_GET['fee'];
$date = $_GET['date'];
$time = $_GET['time'];

// $date = $_GET['date'];
// $gender = $_GET['gender'];
// $mail = $_GET['mail'];
// $psw = $_GET['psw'];
// require_once('dbConnect.php');
$sql= "INSERT INTO appointmentbooking(name,disease,date,time) values('$name','$disease','$date','$time')";
if($connect->query($sql) == TRUE){
echo 'Appointment booked. . . ';
// echo file_get_contents("D:\dbms proj\UIpage.html");
}else{
echo 'account creation failed';
}
}



?>