<?php 
include('../../connection.php'); 
$email= $_POST['email'];
$pswd= $_POST['pswd'];
$sql = "SELECT * FROM user WHERE email = '$email'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
if($pswd== $row['pass'])
{
    echo "Matched";
}
else{
    echo "UnMatched";
}
?>