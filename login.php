<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users 
          WHERE username='$username' AND password='$password'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $_SESSION['admin'] = $username;

    echo "<script>
            alert('Login successful 🎉');
            window.location.href='messages.php';
          </script>";

  } else {
    echo "<script>
            alert('Invalid username or password ❌');
            window.location.href='login.html';
          </script>";
  }
}
?>