<?php 
 $db = mysqli_connect("localhost", "root", "usbw", "chkl");
 
if(isset($_GET['id'])){
        $id = $_GET['id'];
		
        $sql = "DELETE FROM images WHERE id = $id";

        if($db->query($sql) === TRUE){
		
            header('Location: gerenciar_conteudo_editar.php');
        }else{
            echo "something went wrong";
        }
        
	

		
    }else{
        // redirect to show with error
        die('id not provided');
    }






 ?>