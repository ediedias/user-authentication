<?php

namespace App\Core;

use PDO;

class Database
{
     protected $pdo;

     public function __construct() {
          $this->pdo = new PDO('sqlite:../database/db.sqlite');
          $this->initializeDatabase();
     }

     private function initializeDatabase()
     {
          $this->pdo->exec("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMRAY KEY, username TXT UNIQUE, password, TEXT)");
     }     
}