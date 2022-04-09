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

<style>
pre {
font-family: Arial;
font-size: 16px;
white-space: pre-wrap;       /* Since CSS 2.1 */
    white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
    white-space: -pre-wrap;      /* Opera 4-6 */
    white-space: -o-pre-wrap;    /* Opera 7 */
    word-wrap: break-word;       /* Internet Explorer 5.5+ */
}
</style>
    <title>CHKL-Informática</title>
  </head>

  <body class="home">
    
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
          <a href="index.php" class="navbar-brand">
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
                   <a href="gerenciar_conteudo.php" class="dropdown-item text-light bg-dark ">Gerenciar Conteúdo</a>
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

   
    <h1 class="mt-5 d-flex justify-content-center mb-0 ">Destaques Informática</h1>

    <section class="caixa home mt-0 "><!--/Início seção destaques -->
      <div class="container">
        <div class="row">
		
          <div class="col-md-9 d-flex ml-5 ">
            <div class="align-self-center">
            <?php
			 $db = mysqli_connect("localhost", "root", "usbw", "chkl");
  $result = mysqli_query($db, "SELECT * FROM images WHERE categoria ='informatica' ORDER BY id desc");
    while ($row = mysqli_fetch_array($result)) {
			echo "<h4>".$row['titulo']."</h4> ";
            echo "  <img class='border rounded img-fluid'  src='images/".$row['image']."'>
              <p><pre>
                ".$row['resumo']."
              </p></pre>
	<a href='./noticia.php?id=" .$row['id'] ."' class='btn btn-dark'>Leia mais</a> ";}

?>


            </div>
          </div>
          
            
            
          </div>
        </div>
    </section><!--/FIM seção destaques -->

    <div class="border rounded-top"></div>

    <h3 class="mt-5 d-flex justify-content-center mb-0">Mais Lidas</h3>
    <section class="caixa d-flex "><!--/Início seção mais lidas -->
      <?php $vjb = mysqli_query($db, "SELECT * FROM images ORDER BY visitas DESC limit 3 ;");
    while ($rowvjb = mysqli_fetch_array($vjb)) {
      echo "<div class='container'>
        <div class='row'>
          <div class='col-md-4'>
            <div class='media'> ";
      echo "<img src='images/".$rowvjb['image']."' width='210px' height='500px' class='img-fluid border rounded mr-2 align-self-center'> ";
      echo "        <div class='media-body'>
                <ul class='navbar-nav ml-auto '>
                  <li class='nav-item'>";
      echo "  <a href='./noticia.php?id=" .$rowvjb['id'] ."' class='nav-link text-secundary'> ".$rowvjb['titulo']."</a> "; 
      echo "           </li>
                </ul>
              </div>
            </div>
	</div> 
          



      </div>
    </div> "; }
	?>
    </section><!--/FIM seção recursos -->

      <section class="caixa d-flex"><!--/Início seção recursos -->
      <?php $vjt = mysqli_query($db, "SELECT * FROM images ORDER BY visitas DESC LIMIT 3 OFFSET 3;");
    while ($rowvjt = mysqli_fetch_array($vjt)) {
      echo "<div class='container'>
        <div class='row'>
          <div class='col-md-4'>
            <div class='media'> ";
      echo "<img src='images/".$rowvjt['image']."' width='210px' height='500px' class='img-fluid border rounded mr-2 align-self-center'> ";
      echo "        <div class='media-body'>
                <ul class='navbar-nav ml-auto '>
                  <li class='nav-item'>";
      echo "  <a href='./noticia.php?id=" .$rowvjt['id'] ."' class='nav-link text-secundary'> ".$rowvjt['titulo']."</a> "; 
      echo "           </li>
                </ul>
              </div>
            </div>
	</div> 
          



      </div>
    </div> "; }
	?>
    </section><!--/FIM seção mais lidas -->

   
      
    

    <footer class="mt-2 mb-0 bg-dark"> <!--Inicio rodape -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p>
             <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="index.php" class="nav-link text-light">Home</a>
                </li>
                <li class="nav-item">
                  <a href="celularesl.php" class="nav-link text-light">Celulares</a>
                </li>
                <li class="nav-item">
                  <a href="informatica.php" class="nav-link text-light">Informática</a>
                </li>
                <li class="nav-item">
                  <a href="seguranca.php" class="nav-link text-light text-outline-dark">Segurança</a>
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

  </body>

</html>