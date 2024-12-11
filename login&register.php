<?php
require("connect.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM `register_users` WHERE `email` = ? OR `username` = ?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Directly compare passwords (not secure)
        if ($password === $user['password']) {
            echo "<script>alert('WELCOME TO OUR WEBSITE'); window.location.href='index2.php';</script>";
        } else {
            echo "<script>alert('The password you enterd is incorrect. Please try again'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Email or username not registered'); window.location.href='login.php';</script>";
    }
    $stmt->close();
}

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $password = $_POST['password']; // No hashing

    // Check for existing users
    $stmt = $con->prepare("SELECT * FROM `register_users` WHERE `username` = ? OR `email` = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['username'] == $username) {
            echo "<script>alert('Username already taken'); window.location.href='index.php';</script>";
        } elseif ($user['email'] == $email) {
            echo "<script>alert('Email already registered'); window.location.href='index.php';</script>";
        }
    } else {
        // Insert new user
        $insert_stmt = $con->prepare("INSERT INTO `register_users` (`fullname`, `username`, `email`, `password`) VALUES (?, ?, ?, ?)");
        $insert_stmt->bind_param("ssss", $fullname, $username, $email, $password);

        if ($insert_stmt->execute()) {
            echo "<script>alert('Account created successfully, Please login.'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Could not create account. Please try again.'); window.location.href='index.php';</script>";
        }
        $insert_stmt->close();
    }
    $stmt->close();
}
?>
