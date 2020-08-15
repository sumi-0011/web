<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a> 
    <?php if(isset($_GET['id'])) {
      ?> <a href="update.php?id=<?$_GET['id']?>">update</a>   
      <?php } ?>
    <h2>
      <?php
       print_title();
      ?>
    </h2>
   <?php
    print_description();
   ?>
   <?php
   require_once('view/bottom.php');
   ?>