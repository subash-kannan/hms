<style>
    .dbresult,.dbresult td,.dbresult th
    {
        border-collapse:collapse;
        border:1px solid black;
        padding: 8px;
    }
    .dbresult tr:nth child(odd)
    {
        background-color:grey;
    }
    .dbresult
    {
        margin:auto;
        width:800px;
    }
</style>

<?php
//my appointment page redirecting
$connect=mysqli_connect("localhost","root","","hmss") or die("connection failed");
$sql= "SELECT * FROM appointmentbooking";
$result = mysqli_query($connect,$sql);
$check = mysqli_fetch_array($result);
if($check > 0)
{
    echo '<table class="dbresult">';
    echo '<tr>';
    echo '<th> name </th>';
    echo '<th> disease </th>';
    echo '<th> fee </th>';
    echo '<th> date </th>';
    echo '<th> time </th>';

    while($row=mysqli_fetch_array($result))
    {
        echo '<tr>';
        echo '<td>' .$row['name'] . '</td>';
        echo '<td>' .$row['disease'] . '</td>';
        echo '<td>' .$row['fee'] . '</td>';
        echo '<td>' .$row['date'] . '</td>';
        echo '<td>' .$row['time'] . '</td>';
    }
}
else
{
    echo "record not found";
}

?>