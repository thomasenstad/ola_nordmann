<?php
namespace App\Classes;

class Register {

   private $username="",
            $password="";

   function __construct($username, $password)
   {
      $this->username=$this->sanitize($username);
      $this->password=$this->sanitize($password);
   }

   function sanitize($data)
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }

   function do()
   {
      echo "user:" . $this->username;
      echo "pass:" . $this->password;
   }
}
