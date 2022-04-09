<?PHP

 $db = mysqli_connect("localhost", "root", "usbw", "chkl");

// If upload button is clicked ...
  if (isset($_POST['publicar'])) {
 

	
	$comentario = mysqli_real_escape_string($db, $_POST['comentario']);
	
	$id_post = mysqli_real_escape_string($db, $_POST['id_post']);
	
	$nome = mysqli_real_escape_string($db, $_POST['nome']);
	
	
	$sql = "INSERT INTO comentario (comentario, id_post,nome) values ('$comentario', '$id_post', '$nome');";

	if (mysqli_query($db,$sql)){
	?>
    
    <script type="text/javascript">
		alert("Comentario realizado com sucesso!")
		window.location="./index.php";
    </script>
	
    <?php
  	}else{
  		?>
    
    <script type="text/javascript">
		alert("Erro ao cadastrar!")
		window.location="./index.php";
    </script>
	
	 <?php
  	}
  }
?>