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
    <form action="functions.php" method="POST">
        <header>
            <h3>Login to your account</h3>
        </header>
        
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Register">
        <smalltext> Not Registered? Create an account <span style="text-decoration: underline;"><a href="reader-reg.php">Here</a></span></smalltext>
    </form>
</body>
</html>
