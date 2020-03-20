<?php
$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
?>
 <div id="container">
      <?php
      switch ($module) {  
	  default:
	    include("loginapi.php");
	    break;
		 
        }
          ?>
  </div>
