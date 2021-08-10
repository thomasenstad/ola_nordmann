<?php
namespace OlaCrawler\Classes;

class Register {

   private $username,
            $password;

   function __construct($user, $pass)
   {
      $this->username = $user;
      $this->password = $pass;
   }

}
