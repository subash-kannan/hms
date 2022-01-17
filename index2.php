
<?php
$connect=mysqli_connect("localhost","root","","hmss") or die("connection failed");
if(ISSET($_GET['submit'])){
$username = $_GET['email'];
$password = $_GET['psw'];
// require_once('dbConnect.php');
$sql= "SELECT username,passwrd FROM doclogin WHERE username = '$username' AND passwrd = '$password' ";
$result = mysqli_query($connect,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'Login success';
echo file_get_contents("D:\dbms proj\database.html");
}else{
echo 'Login failed';
}
}
?>