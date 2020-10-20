<?php
$id = $_GET['country_id'];
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'admin_user';
$db = mysqli_connect($host, $username, $password, $db_name);
$result = mysqli_query($db,"SELECT * from states where country_id=$id");
$json_array = array();
while($row = mysqli_fetch_assoc($result))
{
    $json_array[] = $row;
}
print(json_encode($json_array));
mysqli_close($db);
?>