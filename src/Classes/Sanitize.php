<?php

class Sanitize {

   private $item_to_sanitize;

   function __construct($item)
   {
      $this->item_to_sanitize = $item;
   }

   function sanitize_input()
   {
      $this->item_to_sanitize = $item;
      $item = trim($item);
      $item = stripslashes($item);
      $item = htmlspecialchars($item);
      return $item;
   }

}
