<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.html");
  exit();
}
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Customer Messages</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ✅ ADMIN NAVBAR -->
<header>
  <nav class="navbar">
    <div class="nav-logo">
      <h1 class="logo-text">🎂 Admin Panel</h1>
      <h2 class="tagline">Customer Messages</h2>
    </div>

    <ul class="nav-menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="messages.php" class="active">Messages</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
</header>

<!-- ✅ MESSAGES SECTION -->
<section class="contact">
  <h2 class="contact-title">Customer Messages 💌</h2>

  <div class="contact-container">

<?php
$sql = "SELECT * FROM message ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "
      <div class='contact-info'>
        <h3>{$row['name']}</h3>
        <p><strong>Email:</strong> {$row['email']}</p>
        <p>{$row['message']}</p>
      </div>
    ";
  }
} else {
  echo "<p style='text-align:center;'>No messages yet.</p>";
}
?>

  </div>

  <!-- ✅ LOGOUT BUTTON -->
  <div style="text-align:center; margin-top:40px;">
    <a href="logout.php" class="cake-btn">Logout</a>
  </div>

</section>

</body>
</html>