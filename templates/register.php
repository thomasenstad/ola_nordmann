<?php

include("header.php");

      // define variables and set to empty values
      $username = $password = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = sanitize($_POST["username"]);
        $password = sanitize($_POST["password"]);
      }

      function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      ?>

      <div class="container">
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3">
               <label for="username" class="form-label">Brukernavn</label>
               <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
               <label for="password" class="form-label">Password</label>
               <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>

      <?php
         echo $username;
         echo "<br>";
         echo $password;
      ?>

   </body>
</html>
