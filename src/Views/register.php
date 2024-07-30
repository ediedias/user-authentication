<?php include 'partials/header.php' ?>
     <h1>Register User</h1>
     <form action="/register" method="POST">
          <input type="email" name="username" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit">Register</button>
     </form>
<?php include 'partials/footer.php' ?>   