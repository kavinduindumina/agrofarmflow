<?php
if (isset($_GET['id'])) {
    include("connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `farmers` WHERE  id= '$id'";
    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["delete"] = "Deleted!";
        header("Location: admin.php");
    }else{
        die("Something went wrong");
    }
}else{
    echo "Waiting for Delete...";
}
?>