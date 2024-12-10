<?php
if ($data == true && sizeof($data) > 0) {
    ?> <ul>  <?php
   foreach($data as $ingredients){
    ?>  <li> <?php echo $ingredients['nom'] . "<br>"; ?>  </li> <?php
   }
   ?>  </ul> <?php
}