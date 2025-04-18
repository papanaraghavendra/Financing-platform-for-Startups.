<?php
$conn = new mysqli("localhost", "root", "", "hanush"); // Changed database name here

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($email && $password) {
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $message = "User already exists.";
        } else {
            $stmt->close();
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $hashed);
            if ($stmt->execute()) {
                session_start();
                $_SESSION['user'] = $email;
                header("Location: index.php");
                exit();
            } else {
                $message = "Error creating account.";
            }
        }
        $stmt->close();
    } else {
        $message = "Please fill in all fields.";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      body {
        background: linear-gradient(120deg, #edf2f4 60%, #fff 100%);
        font-family: 'Segoe UI', Arial, sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      header {
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        padding: 1em 0;
        text-align: center;
      }
      .logo {
        font-size: 2em;
        font-weight: bold;
        color: #2b2d42;
        letter-spacing: 1px;
      }
      .login-container {
        max-width: 500px;
        margin: 4.5em auto 2em auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        padding: 3em 2.5em 2.5em 2.5em;
        border: 1px solid #f1f1f1;
        display: flex;
        flex-direction: column;
        align-items: stretch;
      }
      .login-container h2 {
        text-align: left;
        color: #2b2d42;
        margin-bottom: 1.5em;
        font-size: 1.3em;
        font-weight: 700;
        letter-spacing: 0.01em;
      }
      .login-form label {
        display: block;
        margin-bottom: 0.5em;
        color: #2b2d42;
        font-weight: 500;
      }
      .login-form input[type="email"],
      .login-form input[type="password"] {
        width: 100%;
        padding: 0.8em;
        margin-bottom: 1.2em;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1em;
        background: #f6f6f6;
        transition: border 0.2s;
      }
      .login-form input[type="email"]:focus,
      .login-form input[type="password"]:focus {
        border: 1.5px solid #ef233c;
        outline: none;
      }
      .login-form .btn {
        width: 100%;
        padding: 0.9em;
        font-size: 1.1em;
        margin-top: 0.5em;
        background: #ef233c;
        color: #fff !important;
        border: none;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
      }
      .login-form .btn:hover {
        background: #d90429;
      }
      .login-form .register-link {
        display: block;
        text-align: center;
        margin-top: 1.5em;
        color: #2b2d42;
        text-decoration: none;
        font-size: 0.98em;
        transition: color 0.2s;
      }
      .login-form .register-link:hover {
        text-decoration: underline;
        color: #ef233c;
      }
      footer {
        background: #2b2d42;
        color: #fff;
        text-align: center;
        padding: 1.5em 0 1em 0;
        margin-top: auto;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        font-size: 1em;
      }
      @media (max-width: 600px) {
        .login-container {
          margin: 2em 1em;
          padding: 1.5em 1em;
        }
      }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Create Account</h2>
        <?php if ($message): ?>
            <p style="color:red;"><?= $message ?></p>
        <?php endif; ?>
        <form class="login-form" method="POST">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />

            <button type="submit" class="btn">Create Account</button>
            <a href="login.php" class="register-link">Back to Login</a>
        </form>
    </div>
</body>
</html>