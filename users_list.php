<?php
$conn = new mysqli("localhost", "root", "", "startupfund"); // Update credentials if needed

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, password FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Users</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f8f9fa; }
        .user-table-container { max-width: 600px; margin: 3em auto; background: #fff; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); padding: 2em; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 0.8em; border-bottom: 1px solid #eee; text-align: left; }
        th { background: #edf2f4; color: #2b2d42; }
        tr:last-child td { border-bottom: none; }
    </style>
</head>
<body>
    <div class="user-table-container">
        <h2>All Users</h2>
        <table>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Password (hashed)</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['password']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="2">No users found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php $conn->close(); ?>