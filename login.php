<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM login WHERE username = '$username'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if ($row && $password === $row['password']) {

        session_start();
        $_SESSION['username'] = $username;
        header("Location: welcome_back.php");
        exit();
    } else {
        echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid username or password!!");
              </script>';
    }
        
}
?>
