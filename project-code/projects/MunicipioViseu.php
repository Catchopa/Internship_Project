<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Project</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="js/modernizr.custom.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <link rel="stylesheet" type="text/css" href="https://codepen.io/kathykato/pen/57f0b5b76e6aa7e4917e08b81d378d7b" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
         />
      <link rel="stylesheet" href="../mdb/css/mdb.min.css">
      <!-- Plugin file -->
      <link rel="stylesheet" href="../css/addons/datatables.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/custom.css">
      <style>
         header{
         height: 50%;
         }
         .jarallax .container .white-text .text-uppercase{
         width:412px;
         top:52px;
         position:relative;
         left:-50px;
         }
      </style>
   </head>
   <body>
      <header>
         <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <a class="navbar-brand animate__animated animate__fadeInDown " href="../index.php">
            <img src="../imagens/logo_2play.svg" alt="2 PLAY MORE LOGO">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
               aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item animate__animated animate__fadeInDown">
                     <a class="nav-link" href="../About.php">
                     ABOUT
                     </a>
                  </li>
                  <li class="nav-item animate__animated animate__fadeInDown">
                     <a class="nav-link" href="../projetos.php">
                     PROJECTS
                     </a>
                  </li>
                  <li class="nav-item animate__animated animate__fadeInDown">
                     <a class="nav-link" href="../produtos.php">
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
         <div class="view jarallax" data-jarallax='{"speed": 0.5}' style="background-image: url('prodimg/Grupo 402.png'); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
               <!-- Content -->
               <div class="container wecreate">
                  <!--Grid row-->
                  <div class="row">
                     <div class="col-md-12 mb-4 white-text text-left">
                        <img class=" animate__animated animate__fadeInLeftBig  text-uppercase title h1 font-weight-bold text-left" src="prodimg/Grupo 403.png" alt="">
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
      <style>
         

         #feira{
         background-image: url('prodimg/feira/fds.png'); 
         overflow: hidden; /* para que não tenha rolagem se a imagem de fundo for maior que a tela */
         /* Background image is centered vertically and horizontally at all times */
        background-position: center center;
         /* Background image doesn't tile */
        background-repeat: no-repeat;
         /* Background image is fixed in the viewport so that it doesn't move when 
         the content's height is greater than the image's height */
         /* This is what makes the background image rescale based
         on the container's size */
         background-size: 100% 100%;     
         }
         #feira{
         position:relative;
         height:3800px;
         }
         .row {
         margin-bottom: 12px;
         }
         .row.a{
         margin-top: 0px;
         }
         p{
         font-size: 20px;
         }
         .carousel .carousel-indicators li {
    width: .625rem;
    height: .500rem;
    cursor: pointer;
    border-radius: 40%;
}
         .carousel2 img{  position:relative; display:inline-block; margin-left:-20px !important; }
      </style>
         <div class="container-fluid">
         <style>
            .fundo{
            background-color: #FFCA08;
            height: 710px;
            position: absolute;
            left:50%
            }
         </style>
         <div class="row" style="z-index: 1; ">
            <div class="col-lg-2" style="position: absolute;"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-6 fundo justify-content-end"></div>
         </div>
         <div class="row " style="z-index: 9;">
            <div class="col-lg-2"></div>
            <div class="col-lg-5 center">
               <div class="row" style="margin-top: 32px;" >
                  <div class="col-md-12" >
                     <div class="row">
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/331.png" class="img-fluid rounded">
                        </a>
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/444.png" class="img-fluid rounded">
                        </a>
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/1112.png"  class="img-fluid rounded">
                        </a>
                     </div>
                     <div class="row">
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/335.png" class="img-fluid rounded">
                        </a>
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/1113.png"  class="img-fluid rounded">
                        </a>
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/FSM_mockup4-2.png"  class="img-fluid rounded">
                        </a>
                     </div>
                     <div class="row">
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/Tri-Fold Brochure Mockup.png"  class="img-fluid rounded">
                        </a>
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/334.png"  class="img-fluid rounded">
                        </a>
                        <a data-toggle="lightbox" data-gallery="example-gallery" class="animate__animated animate__fadeInDown col-sm-4">
                        <img src="prodimg/MPViseu/Grupo 341.png"  class="img-fluid rounded">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 justify-content-start animate__animated animate__fadeInDown " style="top: 90px;">
               <p  style="color: black; " >O Município de Viseu permite-nos auto-desafiarmo-nos constantemente. A vontade de inovar e de experimentar é uma constante e temos um imenso orgulho em todos os trabalhos desenvolvidos para o Município.</p>
               <p  style="color: black;" >Desenvolvemos suportes de comunicação que aliam as diferentes áreas da equipa e que integram multi-projetos distintos.</p>
            </div>
         </div>
            <div>
               <div class="row" style="margin-top:100px !important; height:555px;">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8 justify-content-start">
                     <div class="" data-aos="fade-right" style="z-index: 1; position: absolute;" ><!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: 555px;">
                        <!--Indicators-->
                        <ol class="carousel-indicators" >
                           <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="1" ></li>
                           <li data-target="#carousel-example-1z" data-slide-to="2" ></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner rounded" role="listbox">
                           <!--First slide-->
                           <div class="carousel-item active">
                              <img class="d-block w-100" src="prodimg/MPViseu/Mockup.png"
                              alt="First slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/First slide-->
                           <!--Second slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/4-2.png"
                              alt="Second slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Second slide-->
                           <!--Third slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/7.png"
                              alt="Third slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Third slide-->
                        </div>
                        <!--/.Slides-->

                        </div>
                        <!--/.Carousel Wrapper-->
                        </div>
                                             <!-- Grid column -->
                     <div class="col-lg-4 col-md-12"  data-aos="fade-right" data-aos-offset="250" style="z-index: 9; top: 70px; left: 395px; max-width:600px;">
                        <!--Panel-->
                        <div class="card card-body" style="padding: 3.5rem;">
                           <h4 class="font-weight-bold">MUV</h4>
                           <p > O nascimento da primeira rede de ciclovias de Viseu, mais inteligente, mais integrado, mais verde, mais barato e mais bonito. O Muv organiza-se em 5 componentes, os tranportes públicos, 
                           a nova rede de parques de estagionamento, a central de mobilidade de viseu, o tranporte a pedido e a mobilidade suave. </div>
                        <!--/.Panel-->
                     </div>
                     <!-- Grid column -->
                  </div>
                  <div class="col-lg-2">
                  </div>
               </div>
            </div>

         <div>         
            <div class="row" style="margin-top:75px !important; height:555px;">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8 ">
                     <div class="d-flex justify-content-end">
                     <div class="" data-aos="fade-left" style="z-index: 1; position: absolute;" ><!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: 555px;">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                           <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--VISITVISEU AQUI-->
                        <!--Slides-->
                        <div class="carousel-inner rounded" role="listbox">
                           <!--First slide-->
                           <div class="carousel-item active">
                              <img class="d-block w-100" src="prodimg/MPViseu/1.png"
                              alt="First slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/First slide-->
                           <!--Second slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/3341.png"
                              alt="Second slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Second slide-->
                           <!--Third slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/1.png"
                              alt="Third slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Third slide-->
                        </div>
                        <!--/.Slides-->

                        </div>
                        <!--/.Carousel Wrapper-->
                        </div>
      </div>
                                       
      <!-- Grid column -->
      <div class="d-flex justify-content-start" >
                     <div class="col-lg-8 col-md-12" data-aos="fade-left" data-aos-offset="250" style="z-index: 9; top: 70px; left: -13px; max-width:600px;">
                        <!--Panel-->
                        <div class="card card-body" style="padding: 3.5rem;">
                           <h4 class="font-weight-bold">VISITVISEU</h4><br>
                           <p> O VisitViseu é o primeiro site turístico da “melhor cidade para viver”. Uma nova e principal janela de informação sobre Viseu na web.</p>
                           <h6 class="text-justify" >www.visiviseu.pt</h6>
                           <h6 class="text-justify" > Data: 2016</h6>
                           </div>
                        </div>
                        <!--/.Panel-->
                     </div>
                     <!-- Grid column -->
                  </div>
      </div>
                  <div class="col-lg-2">
                  </div>
               </div>
            </div>
         </div>

         <div>
               <div class="row" style="margin-top:100px !important; height:555px;">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8 justify-content-start">
                     <div class="" data-aos="fade-right" style="z-index: 1; position: absolute;" ><!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: 555px;">
                        <!--Indicators-->
                        <ol class="carousel-indicators" >
                           <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="1" ></li>
                           <li data-target="#carousel-example-1z" data-slide-to="2" ></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner rounded" role="listbox">
                           <!--First slide-->
                           <div class="carousel-item active ">
                              <img class="d-block w-100" src="prodimg/MPViseu/qwdsfg.png"
                              alt="First slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/First slide-->
                           <!--Second slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/4441.png"
                              alt="Second slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Second slide-->
                           <!--Third slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/qwdsfg.png"
                              alt="Third slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Third slide-->
                        </div>
                        <!--/.Slides-->

                        </div>
                        <!--/.Carousel Wrapper-->
                        </div>
                        <!-- Grid column -->
                     <div class="col-lg-4 col-md-12"  data-aos="fade-right" data-aos-offset="250" style="z-index: 9; top: 70px; left: 395px; max-width:600px;">
                        <!--Panel-->
                        <div class="card card-body" style="padding: 3.5rem;">
                           <h4 class="font-weight-bold">VISEU PATRIMÓNIO</h4><br>
                           <p  >O projeto “Viseu-Património” visa promover o desenvolvimento de Viseu como referência urbana de qualidade de vida, alicerçada na sua valorização humana, cultural e patrimonial.</p>
                           <h6 class="text-justify" >www.viseupatrimonio.pt</h6>
                           <h6 class="text-justify" > Data: 2017</h6>
                           </div>
                        <!--/.Panel-->
                     </div>
                     <!-- Grid column -->
                  </div>
                  <div class="col-lg-2">
                  </div>
               </div>
            </div>

         <div>         
            <div class="row" style="margin-top:75px !important; height:555px;">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8 ">
                     <div class="d-flex justify-content-end">
                     <div class="" data-aos="fade-left" style="z-index: 1; position: absolute;" ><!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: 555px;">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                           <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner rounded" role="listbox">
                           <!--Aqui MHC VISEU-->
                           <div class="carousel-item active">
                              <img class="d-block w-100" src="prodimg/MPViseu/11131.png"
                              alt="First slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/First slide-->
                           <!--Second slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/11121.png"
                              alt="Second slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Second slide-->
                           <!--Third slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/11131.png"
                              alt="Third slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Third slide-->
                        </div>
                        <!--/.Slides-->

                        </div>
                        <!--/.Carousel Wrapper-->
                        </div>
      </div>
                                       
      <!-- Grid column -->
      <div class="d-flex justify-content-start" >
                     <div class="col-lg-8 col-md-12" data-aos="fade-left" data-aos-offset="250" style="z-index: 9; top: 70px; left: -13px; max-width:600px;">
                        <!--Panel-->
                        <div class="card card-body" style="padding: 3.5rem;">
                           <h4 class="font-weight-bold">MHC VISEU</h4>
                           <p > Projeto polinucleado que tem como missão valorizar e promover a história da cidade de Viseu, contribuindo ainda para a sua investigação e salvaguarda.</p>
                           <h6 class="text-justify" >www.mhcviseu.pt</h6>
                           <h6 class="text-justify" >Data: 2019</h6>
                           </div>
                        <!--/.Panel-->
                     </div>
                     <!-- Grid column -->
                  </div>
      </div>
                  <div class="col-lg-2">
                  </div>
               </div>
            </div>
         </div>

         <div>
               <div class="row" style="margin-top:100px !important; height:555px;">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8 justify-content-start">
                     <div class="" data-aos="fade-right" style="z-index: 1; position: absolute;" ><!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: 555px;">
                        <!--Indicators-->
                        <ol class="carousel-indicators" >
                           <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="1" ></li>
                           <li data-target="#carousel-example-1z" data-slide-to="2" ></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner rounded" role="listbox">
                           <!--First slide-->
                           <div class="carousel-item active">
                              <img class="d-block w-100" src="prodimg/MPViseu/3311.png"
                              alt="First slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/First slide-->
                           <!--Second slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/2123.png"
                              alt="Second slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Second slide-->
                           <!--Third slide-->
                           <div class="carousel-item">
                              <img class="d-block w-180" src="prodimg/MPViseu/3311.png"
                              alt="Third slide" style="height: 555px; max-width: 550px;">
                           </div>
                           <!--/Third slide-->
                        </div>
                        <!--/.Slides-->

                        </div>
                        <!--/.Carousel Wrapper-->
                        </div>
                                             <!-- Grid column -->
                     <div class="col-lg-4 col-md-12"  data-aos="fade-right" data-aos-offset="250" style="z-index: 9; top: 70px; left: 395px; max-width:600px;">
                        <!--Panel-->
                        <div class="card card-body" style="padding: 3.5rem;">
                           <h4 class="font-weight-bold">ÁGUAS DE VISEU</h4><br>
                           <p  >A Águas de Viseu é um organismo público de interesse local, dotado de autonomia administrativa e financeira e explorado sob a forma empresarial, no quadro da organização municipal.</p>
                           <h6 class="text-justify" >www.aguasdeviseu.pt</h6>
                           <h6 class="text-justify" >Data: 2014</h6>
                        </div>
                        <!--/.Panel-->
                     </div>
                     <!-- Grid column -->
                  </div>
                  <div class="col-lg-2">
                  </div>
               </div>
            </div>

      <div class="container z-depth-1 my-5 py-5" style="">
         <!-- Section: Block Content -->
         <section>
            <!-- Modal -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
               <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/bDNgAUwAhlA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                  </div>
               </div>
            </div>
           <div class="row">
               <div class="col-md-8 mx-auto mb-4">
                  <div class="view z-depth-1 rounded">
                     <img class="rounded img-fluid" src="prodimg/MPViseu/Grupo 413.png" alt="Video title">
                     <div class="mask flex-center rgba-black-light">
                        <a id="play" class="btn-floating btn-danger btn-lg" data-toggle="modal" data-target="#modal1"><i class="fas fa-play"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Section: Block Content -->
      </div>
      <div class="container z-depth-1 my-5 py-5" style="">
         <!-- Section: Block Content -->
         <section>
            <!-- Modal -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
               <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/bDNgAUwAhlA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                  </div>
               </div>
            </div>
           <div class="row">
               <div class="col-md-8 mx-auto mb-4">
                  <div class="view z-depth-1 rounded">
                     <img class="rounded img-fluid" src="prodimg/MPViseu/Grupo 412.png" alt="Video title">
                     <div class="mask flex-center rgba-black-light">
                        <a id="play" class="btn-floating btn-danger btn-lg" data-toggle="modal" data-target="#modal1"><i class="fas fa-play"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Section: Block Content -->
      </div>
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
                           <h2 class="mt-2" class="font-weight-bold" > Leave Us a Message</h2>
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
      <!-- Footer -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="../js/feira.js"></script>
      <script type="text/javascript" src="../js/custom.js"></script>
      <script type="text/javascript" src="../mdb/js/jquery.min.js"></script>
      <script type="text/javascript" src="../mdb/js/popper.min.js"></script>
      <script type="text/javascript" src="../mdb/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../mdb/js/mdb.min.js"></script>
      <!-- Plugin file -->
      <script src="./js/addons/datatables.min.js"></script>
      <script>
         $('#play').on('click', function (e) {
         e.preventDefault();
         $("#player")[0].src += "?autoplay=1";
         $('#player').show();
         $('#video-cover').hide();
         })
         $('#modal1').on('hidden.bs.modal', function (e) {
         $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
         });
         
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
         AOS.init();
      </script>
      
      <footer style="color:#24AAE2;" class="page-footer font-small blue">
         <div class="footer-copyright text-center py-3"> Hope Working With You Soon
         </div>
      </footer>
   </body>
</html>