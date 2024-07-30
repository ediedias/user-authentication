<?php

session_start();

if(!isset($_SESSION['user'])) {
     header("Location: /login");
     exit();
}

?>

<?php include 'partials/header.php' ?>
     <h1>Welcome, <?= htmlspecialchars($_SESSION['user']); ?></h1>
     <a href="/logout">Logout</a>
<?php include 'partials/footer.php' ?>   