<?php
session_start();
$conn = new mysqli("localhost", "root", "", "hanush"); // Changed database name here

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email && $password) {
    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user'] = $email;
            header("Location: index.php");
            exit();
        } else {
            $error = "Password is wrong";
        }
    } else {
        $error = "Email is wrong";
    }
    $stmt->close();
} else {
    $error = "Please fill in all fields.";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Error</title>
    <script>
      window.onload = function() {
        <?php if (!empty($error)): ?>
          alert("<?= htmlspecialchars($error) ?>");
        <?php endif; ?>
      };
    </script>
</head>
<body>
    <p style="color:red; text-align:center;"><?= htmlspecialchars($error) ?></p>
    <div style="text-align:center;">
        <a href="login.php" style="display:inline-block;padding:0.7em 2em;background:#ef233c;color:#fff;text-decoration:none;border-radius:4px;font-weight:600;">Back to Login</a>
    </div>
</body>
</html>