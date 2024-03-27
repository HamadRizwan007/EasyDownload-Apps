<?php
    include('../../connection.php'); 


    $id = $_POST['id'];

    $sql = "DELETE FROM app_ids_info WHERE app_id='$id'";
    $conn->query($sql);

    echo "Deleted";
?>