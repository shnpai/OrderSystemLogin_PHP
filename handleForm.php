<?php  
session_start();
require_once('dbConfig.php');
require_once('functions.php');

// Handling user registration
if (isset($_POST['regBtn'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if username or password is empty
    if(empty($username) || empty($password)) {
        echo '<script> 
        alert("The input field is empty!");
        window.location.href = "register.php";
        </script>';
    } else {
    	 // Add user to database and redirect accordingly
        if(addUser($conn, $username, $password)) {
            header('Location: login.php');
        } else {
            header('Location: register.php');
        }
    }
}
// Handling user login
if (isset($_POST['loginBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
     // Check if username and password are filled
    if(empty($username) && empty($password)) {
    	// Redirect with alert if fields are empty
        echo "<script>
        alert('Input fields are empty!');
        window.location.href='index.php'
        </script>";
    } else {
    	// Check user and redirect accordingly
        if(login($conn, $username, $password)) {
            $_SESSION['username'] = $username; // Store username in session
            header('Location: index.php');
        } else {
            header('Location: login.php');
        }
    }
}
?>
