<?php
//patient details insert into the database


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
  $pat_num=$_GET['phone_num'];
  $pat_name=$_GET['name'];
  $pat_age=$_GET['age'];
  $doc_id=$_GET['doc_id'];
  // $pat_ph=$_GET['pat_ph'];`
  $sql="INSERT INTO PATIENT(phone_num,name,age,doc_id) values('$pat_num','$pat_name','$pat_age',$doc_id);";
  if($mysqli->query($sql) == TRUE)
  echo 'Success';
  else
  echo 'Fail';
}
else
{
  $name=$_GET['name'];
  $sql="DELETE FROM PATIENT WHERE NAME='$name';";
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
