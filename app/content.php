<?php 
    
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
		    
		     case 'home':
                include "view/home.php";
				break;

            default:
				include "404.php";
				break;
		}
	}else{
		include "view/home.php";
	}
 
?>