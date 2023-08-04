<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travpress";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    echo "not connected" . mysqli_connect_error();
    exit;
}

echo "Connection successful!";

// Assume the HTML form fields have names: first_name, last_name, username, email, phone, location, gender, password, confirm_password

// Check if the form is submitted
if (isset($_POST["submit"])) {

    // Fetch data from the form and set variables
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $user_input_username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if password and confirm_password match
    if ($password !== $confirm_password) {
        echo "Password do not match.";
        exit;
    }

    // Check if the email is already registered
    $query_email = "SELECT * FROM readers WHERE email = ?";
    $stmt_email = mysqli_prepare($con, $query_email);
    mysqli_stmt_bind_param($stmt_email, "s", $email);
    mysqli_stmt_execute($stmt_email);
    mysqli_stmt_store_result($stmt_email);
    if (mysqli_stmt_num_rows($stmt_email) > 0) {
        echo "Email already registered.";
        mysqli_stmt_close($stmt_email);
        exit;
    }
    mysqli_stmt_close($stmt_email);

    // Check if the username is already registered
    $query_username = "SELECT * FROM readers WHERE username = ?";
    $stmt_username = mysqli_prepare($con, $query_username);
    mysqli_stmt_bind_param($stmt_username, "s", $user_input_username);
    mysqli_stmt_execute($stmt_username);
    mysqli_stmt_store_result($stmt_username);
    if (mysqli_stmt_num_rows($stmt_username) > 0) {
        echo "Username already taken.";
        mysqli_stmt_close($stmt_username);
        exit;
    }
    mysqli_stmt_close($stmt_username);

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO readers (first_name, last_name, username, email, phone, location, gender, user_image, password) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_prepare($con, $sql);

    // Check if the statement preparation was successful
    if (!$stmt) {
        echo "Error: " . mysqli_error($con);
        exit;
    }

    // Bind the parameters to the statement
    mysqli_stmt_bind_param($stmt, "sssssssss", $first_name, $last_name, $user_input_username, $email, $phone, $location, $gender, $target_file, $hashed_password);

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profilephoto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["profilephoto"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["profilephoto"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["profilephoto"]["tmp_name"], $target_file)) {

            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                echo "Registration successful!";
            } else {
                echo "Error: " . mysqli_error($con);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($con);
?>
