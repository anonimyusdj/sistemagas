<?php
  class Database{
    public static function conectar(){
          $host="35.231.175.105";
          $dbname="gasolinerapuma";
          $charset="utf8";
          $user="root";
          $pass="2016.Deisy";
      $pdo=new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=".$charset,$user,$pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      return $pdo;
    }
  }
Database::conectar();
echo "Conectado a la BD";
?>
