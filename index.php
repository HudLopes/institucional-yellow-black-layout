<!DOCTYPE html>
<html>
<head>
	<title>Sua Empresa Engenharia</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <!-- // CSS FILES // -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <link rel="stylesheet" href="css/portfolio.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/index.css">

  <link rel="stylesheet" href="css/qualidade.css">
  <link rel="stylesheet" href="css/atuacoes.css">
  <link rel="stylesheet" href="css/resultados.css">
  <link rel="stylesheet" href="css/depoimento.css">

  <link rel="stylesheet" type="text/css" href="css/styleService.css">
  <link rel="stylesheet" type="text/css" href="css/responsiveService.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet"> 

  <style type="text/css">

  h2{
    text-align: center; 
    padding-bottom: 25px;
    font-family: lato black;
    color: black;
  }
  .navbar {
    background-color: transparent;
  }
  .parent {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .header-principal{
   font-family: "Poppins", sans-serif;
   font-size: 4.0em;
   color: white;
 }
 .header-sub{
  color: gray; 
  font-size: 1.5em;
}
.reuniao:hover{
  background-color: #fed116;
  color: black;
}

@media (max-width: 1440px) {

 .header-principal{
   font-family: "Poppins", sans-serif;
   font-size: 3.5em;
   color: white;
 }
 .header-sub{
  font-size: 1.2em;
}
}

</style>

</head>
<body>

  <?php
  include 'componentes/navbar.html';
  ?>

  <section class="banner">
    <div class="content-fluid mascara">
      <div class="container">
        <div class="parent">
          <div class="col-lg-7 col-md-6 col-sm-6">
            <p><h1 class="wow slideInLeft" data-wow-delay="0.1s" style="margin-bottom: -15px;">Soluções</h1></p>
            <p class="header-principal wow slideInLeft" data-wow-delay="0.3s">Sua Empresa</p>
            <div class="header-sub wow slideInLeft" data-wow-delay="0.3s" id="log"></div>
            <button class="reuniao zoom wow slideInLeft" data-wow-delay="0.5s">Solicite uma reunião gratuita</button>
            <button class="reuniao zoom wow slideInLeft" data-wow-delay="0.5s">Nossas Soluções</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="bannerborder"></div>

  <!-- 
  Sessão de serviço
-->

<div id="service-section" style="margin-top: 30px">
  <div class="container">
    <div class="theme-title">
      <h2 style="color: black"><img src="images/marcadorSessao.png"> ÁREAS DE ATUAÇÃO <img src="images/marcadorSessaoR.png"> </h2>
      <p style="margin-bottom: -30px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
    </div> <!-- /.theme-title -->

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="single-service-content">
          <div class="icon-heading tran3s">
            <div class="icon tran3s"><img src="images/atuacao/eletrica.png" style="max-width: 100%; display: block"></div>
            <h6><a href="#" class="tran3s">Elétrica</a></h6>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
        </div> <!-- /.single-service-content -->
      </div> <!-- /.col-lg -->

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="single-service-content">
          <div class="icon-heading tran3s">
            <div class="icon tran3s"><img src="images/atuacao/civil.png" style="max-width: 100%; display: block"></div>
            <h6><a href="#" class="tran3s">Civil</a></h6>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
        </div> <!-- /.single-service-content -->
      </div> <!-- /.col-lg -->

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="single-service-content">
          <div class="icon-heading tran3s">
            <div class="icon tran3s"><img src="images/atuacao/sistemas.png" style="max-width: 100%; display: block"></div>
            <h6><a href="#" class="tran3s">Sistemas</a></h6>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
        </div> <!-- /.single-service-content -->
      </div> <!-- /.col-lg -->

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="single-service-content">
          <div class="icon-heading tran3s">
            <div class="icon tran3s"><img src="images/atuacao/automacao.png" style="max-width: 100%; display: block"></div>
            <h6><a href="#" class="tran3s">Automação</a></h6>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
        </div> <!-- /.single-service-content -->
      </div> <!-- /.col-lg -->

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="single-service-content">
          <div class="icon-heading tran3s">
            <div class="icon tran3s"><img src="images/atuacao/web.png" style="max-width: 100%; display: block"></div>
            <h6><a href="#" class="tran3s">Web</a></h6>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
        </div> <!-- /.single-service-content -->
      </div> <!-- /.col-lg -->

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="single-service-content">
          <div class="icon-heading tran3s">
            <div class="icon tran3s"><img src="images/atuacao/mecanica.png" style="max-width: 100%; display: block"></div>
            <h6><a href="#" class="tran3s">Mecanica</a></h6>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
        </div> <!-- /.single-service-content -->
      </div> <!-- /.col-lg -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</div> <!-- /#service-section -->

<!-- 
Sessão de icones inuteis
-->
<div class="container-fluid" style="background-image: url(images/indexbg.jpg);background-attachment: fixed;">
  <div class="container" style="margin-bottom: 30px; padding-top: 20px">
    <!-- Three columns of text below the carousel -->
    <div class="col-lg-4 wow slideInLeft" data-wow-delay="0.1s"  align="center">
      <img class="img" src="images/qualidade/qualidade.png">
      <h2>Inovação</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4 wow slideInLeft" data-wow-delay="0.3s" align="center">
      <img class="img" src="images/qualidade/preco.png">
      <h2>Qualidade</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4 wow slideInLeft" data-wow-delay="0.5s" align="center">
      <img class="img" src="images/qualidade/inovacao.png">
      <h2>Preços competitivos</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div><!-- /.col-lg-4 -->
  </div>
</div>
<!-- 
Sessão de portfolio
-->

<div id="project-section" style="margin-top: 30px">
  <div class="container">
    <div class="theme-title">
      <h2><img src="images/marcadorSessao.png"> NOSSOS MELHORES PROJETOS <img src="images/marcadorSessaoR.png"></h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
    </div> <!-- /.theme-title -->

    <div class="project-menu">
      <ul>
        <li class="filter tran3s" data-filter=".web">Cívil</li>
        <li class="filter tran3s" data-filter=".photo">Elétrica</li>
        <li class="filter tran3s" data-filter=".webd">Web</li>
        <li class="filter tran3s" data-filter=".om">Automação</li>
        <li class="filter tran3s" data-filter=".dmedia">Mecanica</li>
        <li class="filter tran3s" data-filter=".support">Sistemas</li>
      </ul>
    </div>

    <div class="project-gallery clear-fix">
      <div class="mix grid-item web webd dmedia support">
        <div class="single-img">
          <img src="images/project/1.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Ferrazcon</a></h6>
              <ul>
                <li>Site /</li>
                <li>Institucional /</li>
                <li>Desenvolvimento /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

      <div class="mix grid-item web webd dmedia support">
        <div class="single-img">
          <img src="images/project/2.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Empresa Junior</a></h6>
              <ul>
                <li>Site /</li>
                <li>Institucional /</li>
                <li>Produto /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

      <div class="mix grid-item photo webd support">
        <div class="single-img">
          <img src="images/project/3.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Sweet Photo</a></h6>
              <ul>
                <li>Business /</li>
                <li>Service /</li>
                <li>Product /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

      <div class="mix grid-item web om">
        <div class="single-img">
          <img src="images/project/4.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Sweet Photo</a></h6>
              <ul>
                <li>Business /</li>
                <li>Service /</li>
                <li>Product /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

      <div class="mix grid-item photo webd dmedia om">
        <div class="single-img">
          <img src="images/project/5.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Sweet Photo</a></h6>
              <ul>
                <li>Business /</li>
                <li>Service /</li>
                <li>Product /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

      <div class="mix grid-item web webd dmedia om">
        <div class="single-img">
          <img src="images/project/6.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Sweet Photo</a></h6>
              <ul>
                <li>Business /</li>
                <li>Service /</li>
                <li>Product /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

      <div class="mix grid-item photo om support">
        <div class="single-img">
          <img src="images/project/7.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Sweet Photo</a></h6>
              <ul>
                <li>Business /</li>
                <li>Service /</li>
                <li>Product /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

      <div class="mix grid-item web support">
        <div class="single-img">
          <img src="images/project/8.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Sweet Photo</a></h6>
              <ul>
                <li>Business /</li>
                <li>Service /</li>
                <li>Product /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

      <div class="mix grid-item photo webd dmedia support">
        <div class="single-img">
          <img src="images/project/9.jpg" alt="Image">
          <div class="opacity">
            <div class="border-shape"><div><div>
              <h6><a href="#">Sweet Photo</a></h6>
              <ul>
                <li>Business /</li>
                <li>Service /</li>
                <li>Product /</li>
                <li>Template</li>
              </ul></div></div>
            </div> <!-- /.border-shape -->
          </div> <!-- /.opacity -->
        </div> <!-- /.single-img -->
      </div> <!-- /.grid-item -->

    </div> <!-- /.project-gallery -->
  </div> <!-- /.container -->
</div> <!-- /#project-section -->

<!--
Desenvolver Section de depoimentos[talvez]
-->

<?php
include 'componentes/news.php';
?>

<?php
include 'componentes/footer.php';
?>

<?php
include 'componentes/icones.php';
?>
<!-- Js File_________________________________ -->

</div>
<script src="js/wow.js"></script>
<script>
  wow = new WOW(
  {
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
  );
  wow.init();
  document.getElementById('moar').onclick = function() {
    var section = document.createElement('section');
    section.className = 'section--purple wow fadeInDown';
    this.parentNode.insertBefore(section, this);
  };

</script>
<!-- j Query -->

<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="js/map-script.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>

</body>
</html>

