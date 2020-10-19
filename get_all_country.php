<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name ='admin_user';
$con = mysqli_connect($host, $username, $password, $db_name);
$resultset = mysqli_query($con,"SELECT * from countries");
$json_array = array();

while($row = mysqli_fetch_assoc($resultset))
{
    $json_array[] = $row;
}
print(json_encode($json_array));
?>