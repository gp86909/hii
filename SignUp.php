<!DOCTYPE html>
<head>
    <title>Sign Up Form</title>
    <style>
        body {
            font-family: serif ;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('recources/background4.jpg');
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat; 
            color: white; 
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgb(0, 0, 0);
            width: 100%;
            max-width: 400px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-spacing: 10px;
        }

        td {
            padding: 5px;
        }

        label {
            font-weight: bold;
            font-size: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .back-button{
            padding: none;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            background-color: transparent;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .buttons button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons .sign-up {
            background-color: #4CAF50;
            color: white;
        }

        .buttons .cancel {
            background-color: #f44336;
            color: white;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link a {
            text-decoration: none;
            color: #007BFF;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="SignUpdata.php" method="post">
            <table>
                <tr>
                   <td><a href="index.php" target="_top">
                            <img src="recources/logo.png" alt="logo" width="150" height="150">
                    </a></td> 
                   <td><h1>RENTITALL</h1></td>
                </tr>
                <tr>
                    <td><label htmlfor="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" placeholder="User"required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" placeholder="Password"required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" placeholder="email@gmail.com"required></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" id="phone" name="phone" placeholder="07xxxxxxxx" required></td>
                </tr>
                <tr>
                    <td><div class="buttons">
                            <button class="back-button" onclick="window.location.href='index.php'">< Back</button>
                    </div> 
                </td>
                    <td>
                        <div class="buttons">
                            <button type="button" class="cancel">Clear</button>
                            <button type="submit" class="sign-up">Sign Up</button>
                        </div>
                    </td>
                </tr>
            </table>
            
        </form>
        <div class="login-link">
            Already have an account? <a href="SignIn.php"><b>Click here</b> to Sign in</a><br><br>
            © 2025.All rights reserved
            </div>
    </div>
</body>
</html>
