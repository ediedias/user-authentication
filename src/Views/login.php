<?php include 'partials/header.php' ?>
     <h1>Login</h1>
     <form action="/login" method="POST">
          <input type="email" name="username" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit">Login</button>
     </form>
<?php include 'partials/footer.php' ?>   