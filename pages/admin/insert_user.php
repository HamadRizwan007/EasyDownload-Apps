<?php
    include('../../connection.php'); 


    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $pswd= $_POST['pswd'];

    echo $fname;
    echo $lname;
    echo $email;
    echo $pswd;

    $sql = "INSERT INTO user (name, email, pass) VALUES (CONCAT('$fname', ' ', '$lname'), '$email', '$pswd')";
    $conn->query($sql);
    echo "data inserted";
?>