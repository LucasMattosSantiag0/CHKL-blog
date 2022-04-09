
<?php
    if(!isset($_GET['id'])){
        // redirect to show page
        die('id not provided');
    }
$db = mysqli_connect("localhost", "root", "usbw", "chkl");

$id =  $_GET['id'];
    $sql = "SELECT * FROM images where id = $id";
    $result = $db->query($sql);
    if($result->num_rows != 1){
        // redirect to show page
        die('id is not in db');
    }
    $data = $result->fetch_assoc();
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


    <title>CHKL-Celulares-Noticia</title>

  </head>

  <body class="home">
    
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
          <a href="#" class="navbar-brand">
            <img src="img/logo.png" width="200">
          </a> 

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="nav-principal">
            <ul class="navbar-nav ml-auto ">
              
              <li class="nav-item">
                <a href="index.html" class="nav-link text-light">Home</a>
              </li>
              <li class="nav-item">
                <a href="celulares.html" class="nav-link text-light">Celulares</a>
              </li>
              <li class="nav-item">
                <a href="informatica.html" class="nav-link text-light">Informática</a>
              </li>
              <li class="nav-item">
                <a href="seguranca.html" class="nav-link text-light">Segurança</a>
              </li>

              <li class="nav-item ml-2">
                <div class="input-group">
                  <input type="pesquisar" placeholder="Pesquisar..." class="form-control">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-outline-light btn-sm" id="pesquisar">
                      Pesquisar
                    </button>
                   </div>
                </div>
              </li>
              <br>
              <li class="nav-item">
                <a href="login.html" class="btn btn-outline-light ml-4">Entrar</a>
              </li>

            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->


    <section class="caixa home "><!--/Início seção saiba -->
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex ">
            <div class="justify-content-around">
			
              <?php 
			  
			  echo "<h3> ".$data['titulo']. "</h3>";
             echo " <img class='border rounded' width='660px' height='330px' src='images/" .$data['image']." '> ";
              
			  
			  echo "<p class='mx-auto text-start'>
                 ".$data['image_text']. "
				 </p>" ;

                
				echo " </div>
          </div>
          <div class='margem col-md-4'>
            <h5>Destaques</h5> ";
				
				
              $lateral = mysqli_query($db, "SELECT * FROM images LIMIT 6;");
    while ($row = mysqli_fetch_array($lateral)) {
		
		
           echo" <div class='postagem-lateral mt-3'>
              <img src='images/".$row['image']."' width='210px' height='550px' class='img-fluid border rounded mr-2 align-self-center'>";
			  
             echo " <div class='media-body'>
                <ul class='navbar-nav ml-auto '>
                  <li class='nav-item'> ";
                  echo "  <a href='./noticia.php?id=" .$row['id'] ."' class='nav-link text-secundary'> ".$row['titulo']." 
                    </a> ";
					echo "
                  </li>
                </ul>
             </div> ";
             
		
		
     
    }
   
           
            
?>
            

          

            
            
              
            <div class="mt-4">
            <h5>News</h5>
            <div class="input-group">
              <input type="email" placeholder="Seu e-mail" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-dark btn-sm" id="email">Cadastre-se</button>
              </div>
            </div>
           </div>
            
            
          </div>
        </div>
      </div>
    </section><!--/FIM seção saiba -->


    <div class="border rounded-top"></div>

    <h3 class="mt-5 d-flex ml-5 justify-content-start mb-0">Veja Também</h3>
    <section class="caixa text-center justify-content-center "><!--/Início seção recursos -->
	<?php
	$vjt = mysqli_query($db, "SELECT * FROM images ORDER BY RAND() LIMIT 5;");
    while ($rowvjt = mysqli_fetch_array($vjt)) {
	
	
         echo " <div class='col-md-6 ml-4 mt-0'> ";
         echo "<div class='media'>";
         echo " <img src='images/".$rowvjt['image']."' width='210px' height='500px' class='img-fluid border rounded mr-2 align-self-center'>";
         echo  "  <div class='media-body'>
                <ul class='navbar-nav ml-auto '>
                  <li class='nav-item'> ";
         echo "  <a href='./noticia.php?id=" .$rowvjt['id'] ."' class='nav-link text-secundary'> ".$rowvjt['titulo']."</a> "; 
         echo "        </li>
                </ul>
             
              </div>
          </div>
        </div>";
	}
?>
       
    </section><!--/FIM seção recursos -->

  

    <div class="border rounded-top"></div>

    <br> <br>
    <div class="ml-5 mt-2 mr-2">
      <ul class="nav nav-tabs ">
        <li class="nav-item">
          <p class="h3">Comentários</p>
        </li>
      </ul>

    </div>
 
  <section class="ml-5 mb-4" >
     
    <input type="file" id="upload" hidden/>
    <div id="parentEditor">
      <div id="editor" contenteditable="true">
        <p></p>
      </div>
      <div id="painelEditor">
        <button class="btnColor" onclick="applyCommand('justifyLeft')"><i class="demo-icon icon-align-left"></i></button>
        <button class="btnColor" onclick="applyCommand('justifyCenter')"><i class="demo-icon icon-align-center"></i></button>
        <button class="btnColor" onclick="applyCommand('justifyRight')" ><i class="demo-icon icon-align-right"></i></button>
        <button class="btnColor" onclick="applyCommand('justifyFull')" ><i class="demo-icon icon-align-justify"></i></button>

        <button class="btnColor" onclick="applyCommand('bold')"><i class="demo-icon icon-bold"></i></button>
        <button class="btnColor" onclick="applyCommand('italic')"><i class="demo-icon icon-italic"></i></button>
        <button class="btnColor" onclick="applyCommand('strikeThrough')"><i class="demo-icon icon-strike"></i></button>
        <button class="btnColor" onclick="applyCommand('underline')"><i class="demo-icon icon-underline"></i></button>

        <button class="btnColor" onclick="applyCommand('outdent')"><i class="demo-icon icon-indent-left"></i></button>
        <button class="btnColor" onclick="applyCommand('indent')"><i class="demo-icon icon-indent-right"></i></button>
                  
        <button class="btnColor" onclick="link()"><i class="demo-icon icon-link"  ></i></button>
                  
        <label for="upload"><i class="demo-icon icon-picture"></i></label>
   
        <i class="demo-icon icon-table"></i>

        <button id="fontColor" class="btnColor">F</button>
        <button id="backColor" class="btnColor">B</button>
        <button id="paleta" class="jscolor {valueElement:null, value:'3c8dbc'}"></button>

        <select type="text" id="inputFontSize" onchange="alterFont(this.value)" >
          <option value="2">10 pt</option>
          <option value="3">12 pt</option>
          <option value="4">14 pt</option>
          <option value="6">16 pt</option>
          <option value="7">18 pt</option>
        </select>
      </div>

            
    </div>
  </section>

  <div class="ml-5">
      <button class="ml-4 mb-3 btn btn-block btn-outline-dark" style="max-width: 40%;">Publicar</button>
  </div>


  <div class="border rounded-top mt-5"></div>

  <h3 class="mt-4 d-flex justify-content-center mb-0">Novas Notícias</h3>
    <section class="caixa d-flex"><!--/Início seção recursos -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="media">
             <img src="img/meet.jpg" width="210px" height="500px" class="img-fluid border rounded mr-2 align-self-center">
              <div class="media-body">
                <ul class="navbar-nav ml-auto ">
                  <li class="nav-item">
                    <a href="" class="nav-link text-secundary">
                     Google Meet inicia testes com legendas traduzidas ao vivo 
                    </a>
                 </li>
                </ul>
              </div>
            </div>
          </div>
          



      </div>
    </div>
    </section><!--/FIM seção recursos -->

     
<section class="caixa d-flex"><!--/Início seção recursos -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="media">
             <img src="img/meet.jpg" width="210px" height="500px" class="img-fluid border rounded mr-2 align-self-center">
              <div class="media-body">
                <ul class="navbar-nav ml-auto ">
                  <li class="nav-item">
                    <a href="" class="nav-link text-secundary">
                     Google Meet inicia testes com legendas traduzidas ao vivo 
                    </a>
                 </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
           
           
          </div>
          <div class="col-md-4 ">
            <div class="media">
            <img src="img/robo-amazon.jpg" width="210px" height="500px" class="img-fluid border rounded mr-2 align-self-center">
            <div class="media-body">
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-secundary">
                    Amazon lança robô doméstico Astro, o Wall-E da vida real
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        

      </div>
    </div>
    </section><!--/FIM seção recursos -->




  <footer class="mt-2 mb-0 bg-dark"> <!--Inicio rodape -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item">
                <a href="index.html" class="nav-link text-light">Home</a>
              </li>
              <li class="nav-item">
                <a href="celulares.html" class="nav-link text-light">Celulares</a>
              </li>
              <li class="nav-item">
                <a href="informatica.html" class="nav-link text-light">Informática</a>
              </li>
              <li class="nav-item">
                <a href="seguranca.html" class="nav-link text-light text-outline-dark">Segurança</a>
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