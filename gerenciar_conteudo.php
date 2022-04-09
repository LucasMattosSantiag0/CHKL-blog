<?php
     session_start();

    if(isset($_SESSION['email']))
    {
     
    }
    else
    {
		header("location:index.php");
    }
?>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome CSS-->
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/editor.css">


    <title>CHKL-Postagem</title>

  </head>

  <body class="gerenciar">
    
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
          <a href="indexl.php" class="navbar-brand">
            <img src="img/logo.png" width="200">
          </a> 

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="nav-principal">
            <ul class="navbar-nav ml-auto ">
              
              <li class="nav-item">
                <a href="indexl.php" class="nav-link text-light">Home</a>
              </li>
              <li class="nav-item">
                <a href="celularesl.php" class="nav-link text-light">Celulares</a>
              </li>
              <li class="nav-item">
                <a href="informatical.php" class="nav-link text-light">Informática</a>
              </li>
              <li class="nav-item">
                <a href="segurancal.php" class="nav-link text-light">Segurança</a>
              </li>

              <li class="nav-item ml-2">
			  <form method="POST" action="pesquisal.php">
                <div class="input-group">
                  <input type="text" placeholder="Pesquisar..." class="form-control" name="src">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-light btn-sm" name="pesquisar">
                      Pesquisar
                    </button></form>
                   </div>
                </div>
              </li>
              <br>
             
              <li class="nav-item dropdown ml-5">
                <i class="fas fa-user-circle tam bg-dark"></i>
                <a href="" class="ml-2 nav-link dropdown-toggle text-light" data-toggle="dropdown">
				<?php
				$db = mysqli_connect("localhost", "root", "usbw", "chkl");
				$adm = mysqli_query($db, "SELECT*FROM usuario WHERE email ='".$_SESSION['email']."'");
    while ($arow = mysqli_fetch_array($adm)) {
		echo "".$arow['nome']."";
	}

				?></a>

                 <div class="dropdown-menu bg-dark">
                   <a href="gerenciar_conteudo_editar.php" class="dropdown-item text-light bg-dark ">Gerenciar Conteúdo</a>
                   <a href="gerenciar_comentario.php" class="dropdown-item text-light bg-dark">Gerenciar Comentário</a>
                   <a href="newsletter.php" class="dropdown-item text-light bg-dark">Enviar Newsletter</a>
				   <a href="logout.php" class="dropdown-item text-light bg-dark">Logout</a>
                 </div>
              </li>

            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->

  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item ">
          <a class="nav-link text-dark active" href="gerenciar_conteudo.php">Publicar Conteúdo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="gerenciar_conteudo_editar.php">Editar/Excluir Conteúdo</a>
        </li>
         
      </ul>
    </div>
    
 
    <section class="ml-5" >
	<form method="POST" action="efetuar.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	 <label for="titulo" class="h3">Imagem de Capa</label><br><input type="file" name="image" class="form-control border-dark " style="max-width:58%;">
  	</div>
	 <label for="titulo" class="h3">Título da Matéria</label><br>
	 <input class=" form-control border-dark" type="text" name='titulo' id="titulo" style="max-width:58%;">
  	<div>
	
	 <label for="titulo" class="h3">Categoria</label><br><select name="categoria" id="categoria" class="form-control border-dark " style="max-width:58%;">
				<option value=""></option>
				<option value="celulares">Celulares</option>
				<option value="informatica">Informatica</option>
                <option value="seguranca">Segurança</option>
				</select> <br>
     <p class="h3">Resumo</p>
	 
	 <textarea class="border-dark" id="parentEditor2"
      	id="text" 
      	cols="20" 
      	rows="4" 
      	name="resumo" 
		maxlength = "301"></textarea>
		
		 <p class="h3">Conteúdo</p>
	 
	 <textarea class="border-dark" id="parentEditor2"
      	id="text" 
      	cols="40" 
      	rows="10" 
      	name="image_text" 
      	placeholder=""></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload" class=" ml-0	mt-5 mb-3 btn btn-block btn-outline-dark" style="max-width: 60%;">Publicar</button>
  	</div>
  </form>
	
</section>

    <div>
	
      
    </div>

  </div>

  <footer class="mt-2 mb-0 bg-dark"> <!--Inicio rodape -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item">
                <a href="indexl.php" class="nav-link text-light">Home</a>
              </li>
              <li class="nav-item">
                <a href="celularesl.php" class="nav-link text-light">Celulares</a>
              </li>
              <li class="nav-item">
                <a href="informatical.php" class="nav-link text-light">Informática</a>
              </li>
              <li class="nav-item">
                <a href="segurancal.php" class="nav-link text-light text-outline-dark">Segurança</a>
              </li>
                
            </ul>
          </p>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-self-center mt-3 ">
          <a href="" class="btn btn-outline-light">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="" class="btn btn-outline-light ml-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="btn btn-outline-light ml-2">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="btn btn-outline-light ml-2">
            <i class="fab fa-youtube"></i>
          </a>
        </div>

        <div class="col-md-12 text-center text-light">
          <h5>&copy; Copyright CHKLBlog<h5>
        </div>

      </div>
       
    </div>
  </footer> <!--Fim rodape -->


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="js/jscolor.min.js"></script>
  <script src="js/editor.js"></script>

</body>

</html>