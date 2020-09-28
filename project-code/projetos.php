<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/kathykato/pen/57f0b5b76e6aa7e4917e08b81d378d7b" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
      />
    <link rel="stylesheet" href="mdb/css/mdb.min.css">
    <!-- Plugin file -->
    <link rel="stylesheet" href="css/addons/datatables.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <style>
      html, body, .grid-container, .grid-container2, .grid-container3 { height: 100%; margin: 0; }
      .grid-container {
      margin-top: 100px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      grid-template-rows: 1fr 1fr 1fr 1fr;
      gap: 16px 16px;
      grid-template-areas: "grid-1 grid-1 grid-2 grid-2" "grid-1 grid-1 grid-3 grid-3" "grid-4 grid-4 grid-5 grid-5" "grid-6 grid-6 grid-5 grid-5" ;
      }
      .grid-1 { grid-area: grid-1; background-image: url('imagens/Projects/Grupo 376.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-2 { grid-area: grid-2; background-image: url('imagens/Projects/Grupo 385.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-3 { grid-area: grid-3; background-image: url('imagens/Projects/Grupo 386.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-4 { grid-area: grid-4; background-image: url('imagens/Projects/Grupo 387.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-5 { grid-area: grid-5; background-image: url('imagens/Projects/Grupo 392.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-6 { grid-area: grid-6; background-image: url('imagens/Projects/Grupo 388.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-container2 {
      margin-top: 16px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      grid-template-rows: 1fr 1fr 1fr 1fr;
      gap: 16px 16px;
      grid-template-areas: "grid-7 grid-7 grid-8 grid-8" "grid-7 grid-7 grid-9 grid-9" "grid-10 grid-10 grid-11 grid-11" "grid-12 grid-12 grid-11 grid-11";
      }
      .grid-7 { grid-area: grid-7; background-image: url('imagens/Projects/Grupo 391.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-8 { grid-area: grid-8; background-image: url('imagens/Projects/Grupo 389.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-9 { grid-area: grid-9; background-image: url('imagens/Projects/Grupo 390.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-10 { grid-area: grid-10; background-image: url('imagens/Projects/Grupo 397.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-11 { grid-area: grid-11; background-image: url('imagens/Projects/Grupo 393.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-12 { grid-area: grid-12; background-image: url('imagens/Projects/Grupo 396.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
      .grid-container3 {
      margin-top: 16px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      grid-template-rows: 1fr 1fr 1fr;
      gap: 16px 16px;
      grid-template-areas: "grid-13 grid-13 grid-13 grid-13" "grid-13 grid-13 grid-13 grid-13" ". . . .";
      }
      .grid-13 { grid-area: grid-13; background-image: url('imagens/Projects/Grupo 432.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;}
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <a class="navbar-brand animate__animated animate__fadeInDown " href="index.php">
        <img src="imagens/logo_2play.svg" alt="2 PLAY MORE LOGO">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item animate__animated animate__fadeInDown">
              <a class="nav-link" href="About.php">
              ABOUT
              </a>
            </li>
            <li class="nav-item animate__animated animate__fadeInDown">
              <a class="nav-link" href="projetos.php">
              PROJECTS
              </a>
            </li>
            <li class="nav-item animate__animated animate__fadeInDown">
              <a class="nav-link" href="produtos.php">
              PRODUCTS
              </a>
            </li>
            <li class="nav-item animate__animated animate__fadeInDown">
              <a class="nav-link" href="#scrollmensagens">
              CONTACT
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Navbar -->
      <!-- Full Page Intro -->
      <div class="view jarallax" data-jarallax='{"speed": 0.5}' style="background-image: url('imagens/Grupo 371.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
          <!-- Content -->
          <div class="container wecreate">
            <!--Grid row-->
            <div class="row">
              <div class="col-md-12 mb-4 d-flex justify-content-end title  animate__animated animate__fadeInRight animate__delay-1s ">
                <img src="imagens/logo_2play.svg" alt="2PLAY+ LOGO">
              </div>
              <div class="col-md-12 mb-4 white-text text-center animate__animated animate__fadeInRight ">
                <h1 class="text-uppercase title h1
                  font-weight-bold text-right">our</h1>
                <h1 class="text-uppercase title h1
                  font-weight-bold text-right">Projects</h1>
              </div>
              <!--Grid column-->
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
      </div>
      <!-- Full Page Intro -->
    </header>
    <div class="scroll-downs">
  <div class="mousey">
    <div class="scroller"></div>
  </div>
</div>
    <div class="social-menu">
      <ul>
      <li><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/2playmore/"><i class="fab fa-facebook-f black-text" alt= "icon do facebook"></i></a></li>
        <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/2playmore/"><i class="fab fa-instagram black-text" alt= "icon do instagram"></i></a></li>
        <li><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/company/2play"><i class="fab fa-linkedin-in black-text" alt= "icon do lindedin"></i></a></li>
      </ul>
    </div>
    <div class="container">
      <div class="grid-container">
        <div class="grid-1 z-depth-1 rounded view overlay zoom " data-aos="fade-down">      
          <a href="projects/feira.php">
            <div class="white-text centro" >
              <h2 class="text-uppercase middle 
                font-weight-bold">
                Feira de São Mateus
                <hr/>
              </h2>
              <h6 class="text-uppercase middle"> App, Design e Vídeo</h6>
            </div>        
          </a>
        </div>
        <div class="grid-2 z-depth-1 rounded"  data-aos="fade-left">
        <a href="projects/CDT.php">
          <div class="white-text centro">
            <h4 class="text-uppercase middle 
              font-weight-bold">
              Clube despotivo
              <p> de tondela
              <hr/>
            </h4>
            <p class="text-uppercase middle " style="font-size: 0.8rem;">Comunicação, Design e Vídeo</p>
          </div>
         </a>
        </div>
        <div class="grid-3 z-depth-1 rounded"  data-aos="fade-left">
        <a href="projects/ALS.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold">
              Als Global
              <hr/>
            </h2>
            <h6 class="text-uppercase middle ">App, Design, Motion, Web e Vídeo</h6>
          </div>
        </a>
        </div>
        <div class="grid-4 z-depth-1 rounded" data-aos="fade-right">
        <a href="projects/MunicipioViseu.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold">
              Município de Viseu
              <hr/>
            </h2>
            <h6 class="text-uppercase middle "> App, Design, Motion, Web e Vídeo </h6>
          </div>
        </a>
        </div>
        <div class="grid-5 z-depth-1 rounded" data-aos="fade-down">
        <a href="projects/QuintaDoFontelo.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold">
              Quinta do Fontelo
              <hr/>
            </h2>
            <h6 class="text-uppercase middle "> App, Design, e Web </h6>
          </div>
        </a>
        </div>
        <div class="grid-6 z-depth-1 rounded" data-aos="fade-right">
        <a href="projects/TintoNoBranco.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold">
              Tinto no Branco
              <hr/>
            </h2>
            <h6 class="text-uppercase middle "> App, Design, e Web </h6>
          </div>
        </a>
        </div>
      </div>
      <div class="grid-container2">
        <div class="grid-7 z-depth-1 rounded" data-aos="fade-down">
        <a href="projects/FeiraLeiria.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold">
              Feira de Leiria
              <hr/>
            </h2>
            <h6 class="text-uppercase middle "> App, Design, Web e Video </h6>
          </div>
        </a>
        </div>
        <div class="grid-8 z-depth-1 rounded" data-aos="fade-left">
        <a href="projects/Floponor.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold">
              Floponor
              <hr/>
            </h2>
            <h6 class="text-uppercase middle "> App, Design, e Web </h6>
          </div>
        </a>
        </div>
        <div class="grid-9 z-depth-1 rounded" data-aos="fade-left">
        <a href="projects/CTGA.php">
          <div class="white-text centro" >
            <h2 class="text-uppercase middle 
              font-weight-bold">
              CTGA
              <hr/>
            </h2>
            <p class="text-uppercase middle " style="font-size: 0.8rem;"> App, Design, e Web </p>
          </div>
        </a>
        </div>
        <div class="grid-10 z-depth-1 rounded" data-aos="fade-right">
        <a href="projects/NecaMudancas.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold">
              Neca Mudanças
              <hr/>
            </h2>
            <p class="text-uppercase middle " style="font-size: 0.8rem;">App, Design, e Web </p>
          </div>
        </a>
        </div>
        <div class="grid-11 z-depth-1 rounded" data-aos="fade-down">
        <a href="projects/Galmar.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold"> 
              Gialmar
              <hr />
            </h2>
            <h6 class="text-uppercase middle "> Vídeo, Motion, Design</h6>
          </div>
        </a>
        </div>
        <div class="grid-12 z-depth-1 rounded" data-aos="fade-right">
        <a href="projects/Matinauto.php">
          <div class="white-text centro">
            <h4 class="text-uppercase middle 
              font-weight-bold">
              Martinauto
              <hr/>
            </h4>
            <p class="text-uppercase middle " style="font-size: 0.8rem;"> App, Design, e Web </p>
          </div>
        </a>
        </div>
      </div>
      <div class="grid-container3">
        <div class="grid-13 z-depth-1 rounded" data-aos="fade-down">
        <a href="projects/OficialSeguros.php">
          <div class="white-text centro">
            <h2 class="text-uppercase middle 
              font-weight-bold">
              Oficial Seguros
              <hr/>
            </h2>
            <h6 class="text-uppercase middle "> App, Design, e Web </p>
          </div>
        </a>
        </div>
      </div>
    </div>

 <!--Ínicio dos Contactos-->
 <div class="container mt-5">
         <!--Section: Content-->
         <section class="dark-grey-text mb-5">
            <style>
               .map-container-section {
               overflow:hidden;
               padding-bottom:56.25%;
               position:relative;
               height:0;
               }
               .map-container-section iframe {
               left:0;
               top:0;
               height:100%;
               width:100%;
               position:absolute;
               }
            </style>
            <div class="row">
               <!-- Grid column -->
               <div id="scrollmensagens" class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">
                  <!-- Form with header -->
                  <div class="card">
                     <div class="card-body">
                        <!-- Header -->
                        <div class="form-header accent-1">
                           <h2 class="mt-2" class="font-weight-bold" >Leave Us a Message</h2>
                        </div>
                        <h6 class="dark-grey-text">Let's build something together</h6>
                        <!-- Body -->
                        <div class="md-form md-outline input-with-pre-icon">
                           <i class="fas fa-user  input-prefix grey-text"></i>
                           <input type="text" id="form-name" class="form-control">
                           <label for="form-name">Nome</label>
                        </div>
                        <div class="md-form md-outline input-with-pre-icon">
                           <i class="fas fa-envelope input-prefix grey-text"></i>
                           <input type="text" id="form-email" class="form-control">
                           <label for="form-email">Email</label>
                        </div>
                        <div class="md-form md-outline input-with-pre-icon">
                           <i class="fas fa-tag input-prefix grey-text"></i>
                           <input type="text" id="form-Subject" class="form-control">
                           <label for="form-Subject">Assunto</label>
                        </div>
                        <div class="md-form md-outline input-with-pre-icon">
                           <i class="fas fa-pencil-alt input-prefix grey-text"></i>
                           <textarea id="form-text" class="form-control md-textarea" rows="1"></textarea>
                           <label for="form-text">Mensagem</label>
                        </div>
                        <div class="text-center">
                           <button class="btn btn-light-blue">Enviar</button>
                        </div>
                     </div>
                  </div>
                  <!-- Form with header -->
               </div>
               <!-- Grid column -->
               <!-- Grid column -->
               <div class="col-lg-7">
                  <!--Google map-->
                  <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px;">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.5680583676412!2d-7.911660684636598!3d40.661450979337495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd23364ebd52173b%3A0xefd253003481e529!2s2%20Play%2B!5e0!3m2!1spt-PT!2spt!4v1583936792588!5m2!1spt-PT!2spt" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                  </div>
                  <!-- Buttons--><br>
                  <div class="row text-center">
                     <div class="col-md-4">
                        <a class="btn-floating">
                        <i class="fas fa-map-marker-alt"></i>
                        </a>
                        <p style="font-size: 15px;">Rua dos Loureiros nº16 1ºD, Viseu  </p>
                     </div>
                     <div class="col-md-4">
                        <a class="btn-floating">
                        <i class="fas fa-phone"></i>
                        </a>
                        <p style="font-size: 15px;">232 449 392</p>
                     </div>
                     <div class="col-md-4">
                        <a class="btn-floating ">
                        <i class="fas fa-envelope"></i>
                        </a>
                        <p style="font-size: 15px;">geral@2playmore.pt</p>
                     </div>
                  </div>
               </div>
               <!-- Grid column -->
            </div>
            <!-- Grid row -->
         </section>
         <!--Section: Content-->
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script type="text/javascript" src="mdb/js/jquery.min.js"></script>
    <script type="text/javascript" src="mdb/js/popper.min.js"></script>
    <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
    <!-- Plugin file -->
    <script src="./js/addons/datatables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
    <script src="js/modernizr.custom.js"></script>

    <script>
    AOS.init();
  </script>
  <script>
      //paste this code under the head tag or in a separate js file.
      	// Wait for window load
      	$(window).load(function() {
      		// Animate loader off screen
      		$(".se-pre-con").fadeOut("slow");;
      	});
    </script>
    <script>
      const buttons = document.querySelectorAll('.project');
      const overlay = document.querySelector('.overlay');
      const overlayImage = document.querySelector('.overlay__inner img');
      
      function open(e) {
        overlay.classList.add('open');
        const src= e.currentTarget.querySelector('img').src;
        overlayImage.src = src;
      }
      
      function close() {
        overlay.classList.remove('open');
      }
      
      buttons.forEach(button => button.addEventListener('click', open));
      overlay.addEventListener('click', close);
    
    </script> 
  </body>
</html>