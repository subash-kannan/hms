<?php 
//doctor details insert into the database;

$mysqli = new mysqli("localhost","root","","hmss");

if ($mysqli -> connect_errno) {
  
  echo "Failed to connect to database: " . $mysqli -> connect_error;
  exit();
}

// $mysqli -> query("SELECT * FROM doctor");
// echo "Affected rows: " . $mysqli -> affected_rows;
if(ISSET($_GET['submit']))
{
  //$id=$_GET['doc_id'];
  $name=$_GET['doc_name'];
  $dept=$_GET['doc_dept'];
  $ph=$_GET['doc_ph'];
  $sql="INSERT INTO doctor(name,department,phone_num) values('$name','$dept',$ph);";
  if($mysqli->query($sql) == TRUE)
  // echo 'Success';
  echo file_get_contents("D:\dbms proj\patient.html");
  else
  echo 'Fail';
}
else
{
  $name=$_GET['doc_name'];
  $sql="DELETE FROM DOCTOR WHERE NAME='$name';";
  if($mysqli->query($sql)==TRUE)
  echo 'Del Success';
  else
  echo 'Del Fail';
}

/*
$sql = "INSERT INTO doctor
VALUES (100, 'mouvig', 'cardiology',9786608746)";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/


/*$sql1 = "DELETE FROM DOCTOR WHERE doc_id=100";
if($mysqli->query($sql1)===true)
echo "deleted successfully";
else
echo "failed deletion";s
*/

$mysqli -> close();
?>


<!-- $name= $_POST['name'];
$dept=$_POST['dept'];
$ph=$_POST['ph'];

$mysqli->query("insert into doctor(name,deprtment,phno) values($name,$dept,$ph)")
