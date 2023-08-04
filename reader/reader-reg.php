<?php

include '../database/dbcon.php';

if (isset($_POST['submit'])) {
    // Retrieve form data and sanitize input to prevent SQL injection
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // SQL query to insert data into the database
    $sql = "INSERT INTO readers (first_name, last_name, username, email, phone, location, gender, password) 
            VALUES ('$first_name', '$last_name', '$username', '$email', '$phone', '$location', '$gender', '$password')";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        // Redirect to the display page after successful insertion
        header('location: reader-login.php');
    } else {
        // Display error message in case of failure
        die(mysqli_error($con));
    }
}
?>



<!DOCTYPE html>

<html>
<head>
    <title>TravPress- Registration</title>
    <style>
        body {
            
            
            color: #000;
            font-family: Arial, sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        form {
            background-color: #00A388;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
            margin: 40px auto;
            max-width: 600px;
            padding: 40px;
            text-align: left;
        }

        h3 {
            color: #00A388;
            font-size: 2rem;
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 2px 2px #fff;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="file"],
        input[type="password"] {
            background-color: #fff;
            border: none;
            border-radius: 4px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
            display: block;
            margin-bottom: 20px;
            padding: 10px;
            width: 100%;
        }

        label[for="gender"] {
            display: block;
            margin-bottom: 10px;
            color: black;
        }

        /* Style for the select */
        select[name="gender"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            color: #333;
        }

        input[type="submit"] {
            background-color: #000;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 30px;
            padding: 10px;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <header>
            <h3>Create a TravPress account below</h3>
        </header>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="username">Username: <p style="font-size: 10px; color: yellow;">Will be used as your author name in case you make a publication.</p></label>
        <input type="text" name="username" required>
 
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required>

        <label for="location">Location:</label>
        <input type="text" name="location" required>

        <label for="gender">Gender:</label>
        <select name="gender" style="margin-bottom: 20px;" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required>

        
        <input type="submit" value="Register">
        <p>Already Registered? login to your account <span style="text-decoration: underline;"><a href="reader-login.php">Here</a></p></small>
    </form>

</body>
</html>
