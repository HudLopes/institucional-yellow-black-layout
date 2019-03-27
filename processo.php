<!DOCTYPE html>
<html>
<head>
	<title>Processo Seletivo</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- // CSS FILES // -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/institucional.css">

<style type="text/css">
img{
  max-width: 100%;
}
h2{
  text-align: center; 
  padding-bottom: 25px;
  font-family: lato black;
  color: black;
}

.navbar {
  background-color: transparent;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
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

.mascara2{
  background-image: url(images/banner2.png);
  background-repeat: no-repeat;
}

</style>
<body>

  <?php
  include 'componentes/navbar.html';
  ?>

  <section class="banner">
    <div class="content-fluid">
      <div class="container">
        <div class="parent">
          <div class="container" style="margin-top: 110px;">
            <div class="col-xs-12 col-sm-7 response">
              <br>
              <br><br>
              <p class="header-principal">Processo Seletivo</p>
              <p style="color:gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
              </p>
              <br>
              <p style="color:gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
              </p>
              <div align="center">
                <button class="reuniao zoom">Inscreva-se</button>
                <button class="reuniao zoom">Edital</button>
              </div>
            </div>
            <div class="col-xs-12 col-sm-5 txt-setor">
              <img src="images/banner2.png" align="right">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="bannerborder"></div>

  <div class="container">
    <div class="col-xs-12 col-sm-6">
      <h2 class="txt-servico">Por que ser um Empresario Junior</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
      </p>
      <br>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
      </p>
      <p><img src="images/marcadorSessao.png">  Vantagens lorem ipsum</p>
      <p><img src="images/marcadorSessao.png">  Vantagens lorem ipsum</p>
      <br>
      <br>
    </div>
    <div class="col-xs-12 col-sm-6 txt-setor">
      <br>
      <br>
      <br>
      <img src="images/empresarioJunior.png">
    </div>
  </div>
</div>

<?php
include 'componentes/news.php';
?>

<?php
include 'componentes/footer.php';
?>

<?php
include 'componentes/icones.php';
?>

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