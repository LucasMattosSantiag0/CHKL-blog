<!DOCTYPE html>
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


    <title>CHKL - seu blog de tecnologia</title>
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
                <a href="" class="nav-link text-light">Home</a>
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

    <section class="d-flex justify-content-center mt-3 ">
       <div id="carousel-indicadores" class="carousel slide" data-ride="carousel" data-interval="10000"><!--Carousel -->

          <!-- Indicadores -->
          <ol class="carousel-indicators">

            <li class="active" data-target="#carousel-indicadores" data-slide-to="0"></li>

            <li data-target="#carousel-indicadores" data-slide-to="1"></li>

            <li data-target="#carousel-indicadores" data-slide-to="2"></li>

          </ol>

          <div class="carousel-inner"><!--Inner -->
              
            <div class="carousel-item active">
              <a href="noticia_cientistas.html"> 
              <img src="img/eletrecidade.jpg" class="img-fluid border rounded">
              </a>
              <div class="carousel-caption">
                  <p class="h3">
                    Cientistas inventam 'ar-condicionado' que não usa eletricidade
                  </p>
              </div>
            </div>

            <div class="carousel-item">
              <a href="">
               <img src="img/windows.jpg" class="img-fluid border rounded">
              </a>
              <div class="carousel-caption">
                  <p class="h3">
                    Microsoft começa a liberar outras lojas de aplicativos no Windows
                  </p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="img/golpe.jpg" class="img-fluid border rounded">
              <div class="carousel-caption">
                  <p class="h3">
                    ‘Remoção de Anjo’: cresce um novo golpe do cartão de crédito
                  </p>
              </div>
            </div>

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
              <h3>Google pode lançar Android 12.1 antes do Android 13</h3>
              <img class="border rounded" width="660px" height="330px" src="img/imgAndroid.jpg">
              <p>
                A versão estável do Android 12 ainda não foi liberada oficialmente, o que deve ocorrer nas próximas semanas. Mas isso não impede a Google de já iniciar os trabalhos para a próxima grande atualização do sistema operacional, que pode trazer uma surpresa, como apontou o XDA na última quarta-feira (8).
              </p>
              <a href="noticia_android.html" class="btn btn-dark">Leia mais</a>

              <h3 class="mt-2">Apesar da criptografia, WhatsApp acessa mensagens denunciadas</h3>
              <img class="border rounded" width="660px" height="330px" src="img/imgWhats.jpg">
              <p>
               O WhatsApp afirma que a sua tecnologia de “criptografia ponta-a-ponta” garante que somente quem envia e recebe as mensagens pelo aplicativo pode ter acesso às conversas. Nenhuma outra pessoa ou até mesmo a empresa teria acesso ao conteúdo enviado pelo app, afirma em sua política de segurança e privacidade.
              </p>
              <a href="" class="btn btn-dark">Leia mais</a>


            </div>
          </div>
          <div class="margem col-md-4">
            <h5>Postagens Recentes</h5>
            <div class="postagem-lateral mt-3">
              
              <p>
                Anonymous declara guerra contra Bolsonaro e hackeia Fib Bank
              </p>
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-secundary">Leia mais</a>
                </li>
              </ul>
             
            </div>
            <div class="postagem-lateral mt-2">
             
              <p>
                Instagram está testando recurso para favoritar usuários
              </p>
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-secundary">Leia mais</a>
                </li>
              </ul>
           
            </div >
            <div class="postagem-lateral mt-2">
              <p>
                Apesar da criptografia, WhatsApp acessa mensagens denunciadas
              </p>
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-secundary">Leia mais</a>
                </li>
              </ul>
            
            </div>
             
            <div class="postagem-lateral mt-2">
              <p>
                Homem é condenado por lavar dinheiro para hackers norte-coreanos
              </p>
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-secundary">Leia mais</a>
                </li>
              </ul>
              
            </div>

            <div class="postagem-lateral conteudo-lateral mt-3">
              <div class="lateral">
                <h5>Entrevistas</h5>

                <a href="">Bill Gates</a><br>
                <a href="">Steve Jobs</a><br>
                <a href="">Mark Zuckerberg</a><br>
                <a href="">Elon Musk</a>
              </div>
            <br>
            </div>

              
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

    <h3 class="mt-5 d-flex justify-content-center mb-0">Mais Lidas</h3>
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
            <div class="media">
            <img src="img/malware.jpg" width="210px" height="500px" class="img-fluid border rounded mr-2 align-self-center">
            <div class="media-body">
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-secundary">
                    Novo malware ataca usuários das plataformas Steam, Epic e EA
                  </a>
                </li>
              </ul>
            </div>
          </div>
           
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
          <div class="col-md-4 ">
            <div class="media">
            <img src="img/malware.jpg" width="210px" height="500px" class="img-fluid border rounded mr-2 align-self-center">
            <div class="media-body">
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-secundary">
                    Novo malware ataca usuários das plataformas Steam, Epic e EA
                  </a>
                </li>
              </ul>
            </div>
          </div>
           
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
          <div class="col-md-4 ">
            <div class="media">
            <img src="img/malware.jpg" width="210px" height="500px" class="img-fluid border rounded mr-2 align-self-center">
            <div class="media-body">
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-secundary">
                    Novo malware ataca usuários das plataformas Steam, Epic e EA
                  </a>
                </li>
              </ul>
            </div>
          </div>
           
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
                  <a href="" class="nav-link text-light">Home</a>
                </li>
                <li class="nav-item">
                  <a href="celulares.html" class="nav-link text-light">Celulares</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-light">Informática</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-light text-outline-dark">Segurança</a>
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