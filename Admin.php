<?PHP
    session_start();
    $_SESSION['RealName'];
?>
<?PHP
echo '<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <title>About Malcolm Lismore</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .login-container {
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      width: 500px;
      height: auto;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <form action="AdminLoginProcess.php" method="post">
      <input type="text" name="txtUN" placeholder="Username" required>
      <input type="password" name="txtPwd" placeholder="Password" required>
      <input type="submit" value="Login" name="btnLogin">
    </form>
  </div>
</body>

</html>';
?>