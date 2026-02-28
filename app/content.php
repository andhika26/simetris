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

			case 'formulir-kibb':
                include "view/formulir-kibb.php";
				break;

			case 'formulir-kibc':
                include "view/formulir-kibc.php";
				break;

			case 'kiba':
				include "view/data-kiba.php";
				break;

			case 'kibb':
				include "view/data-kibb.php";
				break;

			case 'kibc':
				include "view/data-kibc.php";
				break;

			case 'data-ruangan':
				include "view/data-ruangan.php";
				break;

			case 'ruangan':
				include "view/ruangan.php";
				break;

			case 'user':
				include "view/data-user.php";
				break;

			case 'formulir-user':
				include "view/formulir-tambahuser.php";
				break;

			// proses data

			case 'proses_tambahuser':
				include "action/proses_tambahuser.php";
				break;

			
            default:
				include "view/404.php";
				break;
		}
	}else{
		include "view/home.php";
	}
 
?>