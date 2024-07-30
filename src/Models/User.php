<?php

namespace App\Models;

use App\Core\Database;

use PDO;

class User extends Database
{
     public function create($username, $password)
     {
          $stmt = $this->pdo->prepare("INSERT INTO users (username,password) VALUES (?, ?)");
          return $stmt->execute([$username, $password]);
     }

     public function authenticate($username, $password)
     {
          $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = ?");          
          $stmt->execute([$username]);
          $user = $stmt->fetch(PDO::FETCH_ASSOC);

          echo $user['password'];

          if ($user && password_verify($password, $user['password'])) {
               return true;
          }

          return false;
     }
}