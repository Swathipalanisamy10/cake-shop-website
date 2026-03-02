<<<<<<< HEAD
<?php
include "db.php";

$result = $conn->query("SELECT name, email, message FROM message ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Messages</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <nav class="navbar">
    <div class="nav-logo">
      <h1 class="logo-text">🎂Cake Shop</h1>
      <h2 class="tagline">Baked with Love💗</h2>
    </div>
    <ul class="nav-menu">
      <li><a href="index.php#Home">Home</a></li>
      <li><a href="index.php#Contact">Contact</a></li>
    </ul>
  </nav>
</header>

<section class="view-messages">
  <h2 class="contact-title">Customer Messages 💌</h2>

  <div class="messages-grid">

    <?php if ($result && $result->num_rows > 0) { ?>
        <?php while ($msg = $result->fetch_assoc()) { ?>
            <div class="message-card">
                <h3><?php echo htmlspecialchars($msg['name']); ?></h3>
                <p class="message-email">
                    <strong>Email:</strong> <?php echo htmlspecialchars($msg['email']); ?>
                </p>
                <p><?php echo htmlspecialchars($msg['message']); ?></p>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p>No messages yet.</p>
    <?php } ?>

  </div>

  <a href="index.php#Contact" class="cake-btn">← Back to Contact</a>

</section>

</body>
</html>
=======
<?php
include "db.php";

$result = $conn->query("SELECT name, email, message FROM message ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Messages</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <nav class="navbar">
    <div class="nav-logo">
      <h1 class="logo-text">🎂Cake Shop</h1>
      <h2 class="tagline">Baked with Love💗</h2>
    </div>
    <ul class="nav-menu">
      <li><a href="index.php#Home">Home</a></li>
      <li><a href="index.php#Contact">Contact</a></li>
    </ul>
  </nav>
</header>

<section class="view-messages">
  <h2 class="contact-title">Customer Messages 💌</h2>

  <div class="messages-grid">

    <?php if ($result && $result->num_rows > 0) { ?>
        <?php while ($msg = $result->fetch_assoc()) { ?>
            <div class="message-card">
                <h3><?php echo htmlspecialchars($msg['name']); ?></h3>
                <p class="message-email">
                    <strong>Email:</strong> <?php echo htmlspecialchars($msg['email']); ?>
                </p>
                <p><?php echo htmlspecialchars($msg['message']); ?></p>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p>No messages yet.</p>
    <?php } ?>

  </div>

  <a href="index.php#Contact" class="cake-btn">← Back to Contact</a>

</section>

</body>
</html>
>>>>>>> e79dea0f365ff9665af8e4a165b203b458e7321d
