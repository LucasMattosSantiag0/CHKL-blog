<?php 
 $db = mysqli_connect("localhost", "root", "usbw", "chkl");
 
if(isset($_GET['id'])){
        $id = $_GET['id'];
		
        $sql = "DELETE FROM comentario WHERE id_comentario = $id";

        if($db->query($sql) === TRUE){
		
            header('Location: gerenciar_comentario.php');
        }else{
            echo "something went wrong";
        }
        
	

		
    }else{
        // redirect to show with error
        die('id not provided');
    }






 ?>