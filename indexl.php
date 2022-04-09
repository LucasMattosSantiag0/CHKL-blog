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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fontawesome CSS-->
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
<style>
.carousel img {
width: 1000px;
height: 500px !important;
object-fit: cover;}

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

    <title>CHKL - seu blog de tecnologia</title>
  </head>

  <body class="home">
    
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

    <section class="d-flex justify-content-center mt-3 ">
       <div id="carousel-indicadores" class="carousel" data-ride="carousel" data-interval="10000"><!--Carousel -->

          <!-- Indicadores -->
          <ol class="carousel-indicators">

            <li class="active" data-target="#carousel-indicadores" data-slide-to="0"></li>

            <li data-target="#carousel-indicadores" data-slide-to="1"></li>

            <li data-target="#carousel-indicadores" data-slide-to="2"></li>

          </ol>

          <div class="carousel-inner"><!--Inner -->
              <?php 
			  $db = mysqli_connect("localhost", "root", "usbw", "chkl");
			  
			            $carrosel = mysqli_query($db, "SELECT * FROM images ORDER BY id DESC LIMIT 1;");
    while ($crow = mysqli_fetch_array($carrosel)) {
           echo " <div class='carousel-item active'> ";
          echo "  <a href='./noticial.php?id=" .$crow['id'] ."'> 
              <img src='images/".$crow['image']."' class='img-fluid border rounded' width='700px' height='400px'> 
			 </a>"; 
             echo " <div class='carousel-caption'>
                  <p class='h3'> ";
             echo " ".$crow['titulo']." ";
             echo "     </p>
              </div>
            </div> "; }
			  $carrosel2 = mysqli_query($db, "SELECT * FROM images ORDER BY id DESC LIMIT 2 OFFSET 1;");
    while ($crow2 = mysqli_fetch_array($carrosel2)) {
           echo " <div class='carousel-item'> ";
          echo "  <a href='./noticial.php?id=" .$crow2['id'] ."'> 
              <img src='images/".$crow2['image']."' class='img-fluid border rounded' width='700px' height='400px'> 
			 </a>"; 
             echo " <div class='carousel-caption'>
                  <p class='h3'> ";
             echo " ".$crow2['titulo']." ";
             echo "     </p>
              </div>
            </div> "; }
			
?>
           
          </div><!--/Inner -->

            <!-- Controles -->
          <a href="#carousel-indicadores" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>

          <a href="#carousel-indicadores" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div><!--/Carousel -->

    </section>
   
    <h1 class="mt-5 d-flex justify-content-center mb-0 ">Destaques</h1>

    <section class="caixa home "><!--/Início seção saiba -->
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex ">
            <div class="align-self-center">
			 <?php 
			  
			            $principal = mysqli_query($db, "SELECT * FROM images ORDER BY id DESC LIMIT 3 OFFSET 3;");
    while ($prow = mysqli_fetch_array($principal)) {
           echo "<h3> ".$prow['titulo']."</h3> ";
			  
           echo " <img src='images/".$prow['image']."' class='border rounded' width='660px' height='330px'>
              <p><pre>
               ".$prow['resumo']."
              </p></pre> ";
               echo "  <a href='./noticial.php?id=" .$prow['id'] ."' class='btn btn-dark'>  Leia mais</a> <br>";
	}?>
              


            </div>
          </div>
          <div class="margem col-md-4">
            <h5>Postagens Recentes</h5>
			<?php 
			 $laterals = mysqli_query($db, "SELECT * FROM images ORDER BY id DESC LIMIT 4;");
    while ($lrow = mysqli_fetch_array($laterals)) {
            echo "<div class='postagem-lateral mt-2'> ";
              
            echo " <p>
                 ".$lrow['titulo']."
              </p>" ;
             echo " <ul class='navbar-nav ml-auto '>
                <li class='nav-item'>
                  <a href='./noticial.php?id=" .$lrow['id'] ."' class='nav-link text-secundary'>Leia mais</a>
                </li>
              </ul>
             
	</div> ";}
            
?>
           

              
            
            
            
          </div>
        </div>
      </div>
    </section><!--/FIM seção saiba -->

    <div class="border rounded-top"></div>

    <h3 class="mt-5 d-flex justify-content-center mb-0">Mais Lidas</h3>
    <section class="caixa d-flex"><!--/Início seção recursos -->
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
      echo "  <a href='./noticial.php?id=" .$rowvjb['id'] ."' class='nav-link text-secundary'> ".$rowvjb['titulo']."</a> "; 
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
      echo "  <a href='./noticial.php?id=" .$rowvjt['id'] ."' class='nav-link text-secundary'> ".$rowvjt['titulo']."</a> "; 
      echo "           </li>
                </ul>
              </div>
            </div>
	</div> 
          



      </div>
    </div> "; }
	?>
    </section><!--/FIM seção recursos -->

    

   
      <div class="col-md-12 mt-4 mb-4">
        <div class="d-flex justify-content-center">
          <button class="btn btn-outline-dark btn-lg">Carregar Mais</button>
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

  </body>

</html>