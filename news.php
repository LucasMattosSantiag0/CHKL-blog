<?PHP

 $db = mysqli_connect("localhost", "root", "usbw", "chkl");

// If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name

	
	$email = mysqli_real_escape_string($db, $_POST['email']);
	
	$sql = "INSERT INTO news (email) value ('$email');";

	if (mysqli_query($db,$sql)){
	?>
    
    <script type="text/javascript">
		alert("Cadastro realizado com sucesso!")
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