<?php 
    
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
		    
		    case 'home':
                include "view/home.php";
				break;

			case 'formulir-kiba':
                include "view/formulir-kiba.php";
				break;

			case 'kiba':
				include "view/data-kiba.php";
				break;



            default:
				include "view/404.php";
				break;
		}
	}else{
		include "view/home.php";
	}
 
?>