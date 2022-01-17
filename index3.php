<?php 
//patient creat account inserting
$connect=mysqli_connect("localhost","root","","hmss") or die("connection failed");
if(ISSET($_GET['submit'])){
$fname = $_GET['fname'];
$lname = $_GET['lname'];
// $date = $_GET['date'];
// $gender = $_GET['gender'];
$mail = $_GET['mail'];
$psw = $_GET['psw'];
// require_once('dbConnect.php');
$sql= "INSERT INTO pat_creataccount(fname,lname,mail,password) values('$fname','$lname','$mail','$psw')";
if($connect->query($sql) == TRUE){
echo 'account created';
echo file_get_contents("D:\dbms proj\.html");
}else{
echo 'account creation failed';
}
}



?>