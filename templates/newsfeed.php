<?php

include("header.php");

 ?>
      <div class="container">
         <h2>Siste nytt</h2>
         <?php if(sizeof($headlines)>0){?>
         <ul class="list-group">
         <?php foreach($headlines as $h){?>
            <li class="list-group-item"><a href="<?php echo $h['link'];?>"><?php echo $h['text']; ?></a></li>
         <?php } ?>
         </ul>
         <?php } ?>
      </div>
   </body>
</html>
