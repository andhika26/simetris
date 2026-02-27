<?php 

    error_reporting(0);
	session_start();
	if(isset($_SESSION['username'])){
	 
	    ?>
<script type="text/javascript">
document.location = "./app/home";
</script>
<?php
} else {
?>
<script type="text/javascript">
document.location = "./oss/index.php";
</script>
<?php
}
?>