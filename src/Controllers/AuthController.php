<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
     public function showLogin() {
          include "../src/Views/login.php";
     }

     public function showRegister() 
     {
          include "../src/Views/register.php";
     }

     public function register()
     {
          $username = $_POST["username"];
          $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

          $user = new User;

          if ($user->create($username, $password)) {
               header('Location: /login');
          } else {
               echo "Registration failed.";
          }

     }

     public function login()
     {
          $username = $_POST['username'];
          $password = $_POST['password'];

          $user = new User;

          if ($user->authenticate($username, $password)) {               
               session_start();
               $_SESSION["user"] = $username;
               header('Location: /dashboard');
          } else {
               echo "Invalid credentials";
          }
     }

     public function logout()
     {
          session_start();
          session_destroy();
          header('Location: /login');
     }

     public function dashboard()
     {
          include '../src/Views/dashboard.php';
     }
}