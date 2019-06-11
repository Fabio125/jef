<?php

    session_start();        
	if($_SESSION["usuario"]==null){

            header("Location: ../../index.php");      
            exit();
          
    }
    
?>