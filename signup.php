<?php
// Assuming connection.php contains your database connection code
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];

    // Debugging to check the values of passwords
    var_dump($password, $confirmPassword);

    // Check if the passwords match
    if ($password === $confirmPassword) {
        // Check if the username already exists
        $checkQuery = "SELECT * FROM signup WHERE username = '$username'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if ($checkResult) {
            // Check if a row exists (if username already exists)
            if (mysqli_num_rows($checkResult) == 0) {
                // Insert new user into the database
                $insertQuery = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
                
                if (mysqli_query($conn, $insertQuery)) {
                    // If insertion is successful, redirect the user
                    header("Location: tred.html");
                    exit();
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo '<script>
                        alert("User with the same username already exists. Please choose a different username.");
                        window.location.href = "signup_page.php";
                      </script>';
                exit();
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo '<script>
                alert("Password and confirm password do not match. Please try again.");
                // window.location.href = "signup_page.php";
              </script>';
        exit();
    }
}
?>
