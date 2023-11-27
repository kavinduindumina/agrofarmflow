<?php
session_start();
?>
<?php
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "connection.php";
    if ($email=='admin@gmail.com'&& $password=="1234"){
        session_start();
         $_SESSION["user"] = "yes";
        header("Location:admin.php");
        die();
    }
    if ($email=='f@gmail.com'&& $password=="1234"){
        session_start();
         $_SESSION["user"] = "yes";
        header("Location:feildofficer.php");
        die();
    }

    else{


        $sql = "SELECT * FROM farmers WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = "yes";

                header("Location: home.php");
                die();
            }else{
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    }

}
?>
