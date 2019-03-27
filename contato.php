<!DOCTYPE html>
<html>
<head>
	<title>Contato</title>
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

<style type="text/css">

.navbar {
  background-color: black;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

#contatti{
  margin-top: 110px;
  margin-bottom: -150px;
}
#contatti a{
  color: #fff;
  text-decoration: none;
}


@media (max-width: 575.98px) {

  #contatti{padding-bottom: 800px;}
  #contatti .maps iframe{
    width: 100%;
    height: 450px;
  }
}


@media (min-width: 576px) {

 #contatti{padding-bottom: 800px;}

 #contatti .maps iframe{
   width: 100%;
   height: 450px;
 }
}

@media (min-width: 768px) {

  #contatti{padding-bottom: 350px;}

  #contatti .maps iframe{
    width: 100%;
    height: 850px;
  }
}

@media (min-width: 992px) {
  #contatti{padding-bottom: 200px;}

  #contatti .maps iframe{
   width: 100%;
   height: 700px;
 }
}


#author a{
  color: #fff;
  text-decoration: none;

}


.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 0px;
  padding-left: 0px;
}
.reuniao {
 color: black;
 background-color: #fed116;
 width: 150px;
 font-size: 1.1em;
 margin-top: 15px;
}
.reuniao:hover {
 color: black;
 background-color:  #fed116;
}
</style>
<body>

  <?php
  include 'componentes/navbar.html';
  ?>

  <div class="container" align="center">
    <div class="row" id="contatti">


      <div class="row">

        <div class="col-md-6" style="padding-right: 10%">
          <h2 class="text-uppercase mt-3 font-weight-bold text-white">Contato</h2>
          <form form method="POST" action="send_email_form.php">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" class="form-control mt-2" name="yourname" placeholder="Nome" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" class="form-control mt-2" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="email" class="form-control mt-2" name="phone" placeholder="Telefone" required>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" placeholder="Sua mensagem" rows="3" required></textarea>
                </div>
              </div>
              <div class="col-12" align="center">
            <button class="reuniao zoom" type="submit">Enviar</button>
             </div>
           </div>
         </form>
         <div class="text-white" style="padding-top: 50px" align="left">
          <h2 class="mt-4 font-weight-bold"><img src="images/marcadorSessao.png">Sua empresa</h2><br>

          <i class="fas fa-phone mt-3"></i> (+39) 123456<br>
          <i class="fas fa-phone mt-3"></i>(+39) 123456<br>
          <i class="fa fa-envelope mt-3"></i>info@test.it<br>
          <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
          <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
          <div class="my-4">
            <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
            <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-6 maps" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.561509315605!2d-34.8883053852203!3d-8.044060294207778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18dd725c114f%3A0xe3bfd348259229a8!2sUniversidade+de+Pernambuco!5e0!3m2!1spt-BR!2sbr!4v1553646350142" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
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