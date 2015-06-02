<?php
session_start();
/* 
Created By Adam Khoury @ www.flashbuilding.com 
-----------------------June 20, 2008----------------------- 
*/
session_destroy(); 
if(!session_is_registered('id')){ 
$msg = "You are now logged out";
} else {
$msg = "<h2>could not log you out</h2>";
} 
?> 
<?php
include_once "layout/header.php";
?>

<div class="row">
	<div class="large-12 columns">
<?php echo "$msg"; ?><br>
<p><a href="index.php">Click here</a> to return to our home page </p>
</div>
</div>

<?php
include_once "layout/footer.php";
?>