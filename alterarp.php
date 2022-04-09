<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "usbw", "chkl");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
	$id = $_GET['id'];
	
  	$image = $_FILES['image']['name'];
	
	$titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  	// Get text
	$categoria = mysqli_real_escape_string($db, $_POST['categoria']);
	
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	
	$resumo = mysqli_real_escape_string($db, $_POST['resumo']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "UPDATE images SET image = '$image',
	titulo = '$titulo',
	categoria = '$categoria',
	image_text = '$image_text',
	resumo = '$resumo'
	WHERE id = $id";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		?>
    
    <script type="text/javascript">
		alert("Publicação realizada com sucesso!")
		window.location="./gerenciar_conteudo_editar.php";
    </script>
	
    <?php
  	}else{
  		?>
    
    <script type="text/javascript">
		alert("Erro ao publicar!")
		window.location="./gerenciar_conteudo.php";
    </script>
	
	 <?php
  	}
  }
  
?>