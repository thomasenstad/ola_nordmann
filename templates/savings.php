<?php
include("header.php");
?>
   <link rel="stylesheet" href="assets/style/savings.css">
      <div class="container">
         <div class="row">
            <div class="col-md-6 justify-content-center text-center ola-col">
               <canvas id="ola-graph" height="225px" width=296px></canvas>
            </div>
            <div class="col-md-6 justify-content-center ola-col">
               <ul class="list-group">
                  <li class="list-group-item">Utgangspunkt: <span id="savings-initial"></span>,-</li>
                  <li class="list-group-item">Månedlig innskudd: <span id="savings-monthly"></span>,-</li>
                  <li class="list-group-item">Antall måneder: <span id="savings-length-months"></span></li>
                  <li class="list-group-item">Mål: <span id="savings-goal"></span>,-</li>
                  <li class="list-group-item"><b>Spart:</b> <span id="savings-total"></span>,-</li>
               </ul>
               <span id="savings-feedback"></span>
            </div>
         </div>
      </div>
    <script src="assets/script/savings.js" charset="utf-8"></script>
  </body>
</html>
