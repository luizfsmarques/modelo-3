<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Nossa Beleza</title>
<!--
Adaptações
https://www.codigopratico.com

Snapshot Template
http://www.templatemo.com/tm-493-snapshot

Zoom Slider
https://vegas.jaysalvat.com/

Caption Hover Effects
http://tympanus.net/codrops/2013/06/18/caption-hover-effects/
-->

	<link rel="stylesheet" href="./public/css/bootstrap.min.css">
	<link rel="stylesheet" href="./public/css/animate.min.css">
	<link rel="stylesheet" href="./public/css/font-awesome.min.css">
  <link rel="stylesheet" href="./public/css/component.css">
	
  <link rel="stylesheet" href="./public/css/owl.theme.css">
	<link rel="stylesheet" href="./public/css/owl.carousel.css">
	<link rel="stylesheet" href="./public/css/vegas.min.css">
	<link rel="stylesheet" href="./public/css/style.css">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<!-- Google web font  -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- Preloader section -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section  -->

  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="#top" class="navbar-brand smoothScroll">Nossa Beleza</a>
      </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#top" class="smoothScroll"><span>Home</span></a></li>
            <li><a href="#about" class="smoothScroll"><span>Sobre nós</span></a></li>
            <li><a href="#services" class="smoothScroll"><span>Serviços</span></a></li>
            <li><a href="#gallery" class="smoothScroll"><span>Galeria</span></a></li>
            <li><a href="#contact" class="smoothScroll"><span>Contato</span></a></li>
            <li><a href="#" class="smoothScroll"><i class="bi bi-person-circle" id="login-icon"></i></a></li>
          </ul>
       </div>
       
    </div>
  </div>


<!-- Home section -->
<!-- Foto de <a href="https://unsplash.com/@timmossholder?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Tim Mossholder</a> na <a href="https://unsplash.com/pt-br/s/fotografias/1920x1280-hair?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a> -->
  

<section id="home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="wow fadeInUp" data-wow-delay="0.6s">O estilo perfeito para sua moda!</h1>
        <p class="wow fadeInUp" data-wow-delay="0.9s">Venha conhecer o estúdio de beleza mais preparado para cuidar do bem mais importante da sua vida que é você! Sempre estamos dispostos a oferecer o melhor atendimento.</p>
        <a href="#about" class=" btn btn-success btn-lg wow " data-wow-delay="1.2s">Saiba mais</a>
      </div>

    </div>
  </div>
</section>


<!-- About section -->

<section id="about">
  <div class="container">
    <div class="row">

      <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-thumb">
          <h1>Quem somos?</h1>
          <p>Somos uma empresa especializada em cuidar da beleza do seu cabelo. 
            Tudo começou com a nossa famosa cabelereira Esther Mattos, em sua casa, no ano de 2017, fazendo cabelo para
            suas amigas. Após o estrondoso sucesso, devido ao seu carinho e cuidado com os cabelos, ela passou a ser chamada
            por muitas celebridades para cuidar dos maravilhosos cabelos delas. Depois pouco Esther decidiu abrir seu estudio, assim 
            trazendo cuidados aos cabelos para milhares de super mulheres espalhadas no nosso Brasil.
          </p>
        </div>
      </div>

      <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
        <img src="images/about-img.jpg" class="img-responsive img-circle" alt="About">
      </div>

      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title text-center">
          <h1>Nosso time</h1>
          <h3>Venha conhecer nossos super cabelereiros!</h3>
        </div>
      </div>

      <!-- team carousel -->

      <div id="team-carousel" class="owl-carousel">

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="C:/xampp/htdocs/modelo-3/public/images/team-img1.jpg" class="img-responsive img-circle" alt="Mary">
            </div>
            <h2 class="heading">Esther Mattos, CEO</h2>
            <p class="description">Sempre disposta a dar o melhor!</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="C:/xampp/htdocs/modelo-3/public/images/team-img2.jpg" class="img-responsive img-circle" alt="Jack">
            </div>
            <h2 class="heading">Carlos Fox, cabelereiro</h2>
            <p class="description">Cuidando sempre dos nossos amores.</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="C:/xampp/htdocs/modelo-3/public/images/team-img3.jpg" class="img-responsive img-circle" alt="Linda">
            </div>
            <h2 class="heading">Linda, Gerente</h2>
            <p class="description">A minha felixidade é a sua.</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="C:/xampp/htdocs/modelo-3/public/images/team-img4.jpg" class="img-responsive img-circle" alt="Sandy">
            </div>
            <h2 class="heading">Sandy, Director</h2>
            <p class="description">Curabitur vulputate euismod neque et tincidunt.</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="C:/xampp/htdocs/modelo-3/public/images/team-img5.jpg" class="img-responsive img-circle"alt="Lukia">
            </div>
            <h2 class="heading">Lukia, Fashion</h2>
            <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="C:/xampp/htdocs/modelo-3/public/images/team-img6.jpg" class="img-responsive img-circle" alt="George">
            </div>
            <h2 class="heading">George, Admin</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="C:/xampp/htdocs/modelo-3/public/images/team-img7.jpg" class="img-responsive img-circle" alt="Day">
            </div>
            <h2 class="heading">Day, Accountant</h2>
            <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="C:/xampp/htdocs/modelo-3/public/images/team-img8.jpg" class="img-responsive img-circle" alt="Lynn">
            </div>
            <h2 class="heading">Lynn, Marketing</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          </div>
        </div>

      </div>
      <!-- end team carousel -->

    </div>
  </div>
</section>


<!-- Services section -->
<section id="services">
  <div class="container">
    <div class="row">

      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title text-center">
          <h1>Serviços</h1>
          <h3>Venha conhecer nossos serviços!</h3>
        </div>
      </div>
      <!-- services carousel -->

      <div id="services-carousel" class="owl-carousel">

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="service-thumb">
            <p class="service-name">Hidratação</p>
            <p class="service-price">R$125,00</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="service-thumb">
            <p class="service-name">Hidratação + Escova Marroquina </p>
            <p class="service-price">R$225,00</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="service-thumb">
            <p class="service-name">Corte channel</p>
            <p class="service-price">R$350,00</p>
          </div>
        </div>

        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="service-thumb">
            <p class="service-name">Luzes</p>
            <p class="service-price">R$125,00</p>
          </div>
        </div>
      
      </div>
      <!-- end services carousel -->

    </div>
  </div>
</section>




<!-- Gallery section -->

<section id="gallery">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title">
          <h1>Galeria</h1>
          <p>Veja o resultado dos cuidados que temos. <a href="#gallery">Veja nossa galeria!</a></p>
        </div>
      </div>

      <ul class="grid cs-style-4">
        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="C:/xampp/htdocs/modelo-3/public/images/gallery-img1.jpg" alt="image 1"></div>
            <figcaption>
              <h1>Galeria</h1>
              <small>Sempre cuidando de você.</small>
              <a href="#">Veja mais</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="C:/xampp/htdocs/modelo-3/public/images/gallery-img2.jpg" alt="image 2"></div>
            <figcaption>
              <h1>Galeria</h1>
              <small>Sempre cuidando de você.</small>
              <a href="#">Veja mais</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="C:/xampp/htdocs/modelo-3/public/images/gallery-img3.jpg" alt="image 3"></div>
            <figcaption>
              <h1>Galeria</h1>
              <small>Sempre cuidando de você.</small>
              <a href="#">Veja mais</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="C:/xampp/htdocs/modelo-3/public/images/gallery-img4.jpg" alt="image 4"></div>
            <figcaption>
              <h1>Galeria</h1>
              <small>Sempre cuidando de você.</small>
              <a href="#">Veja mais</a>
            </figcaption>
          </figure>
        </li>
      </ul>

    </div>
  </div>
</section>


<!-- Contact section -->

<section id="contact">
  <div class="container">
    <div class="row">

       <div class="col-md-offset-1 col-md-10 col-sm-12">

        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
          <h1>Mande uma mensagem</h1>
          <p>Conte-nos sobre a sua experiência conosco ou caso precise de informações, estamos prontos para lhe atender! </p>
        </div>

        <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
          <div class="col-md-6 col-sm-6">
            <input name="name" type="text" class="form-control" id="name" placeholder="Nome">
          </div>
          <div class="col-md-6 col-sm-6">
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="col-md-12 col-sm-12">
            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensagem"></textarea>
          </div>
          <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
            <input type="submit" class="form-control" value="ENVIAR">
          </div>
        </form>

      </div>

    </div>
  </div>
</section>


<!-- Footer section -->

<footer>
	<div class="container">
    
		<div class="row">

      <div class="col-md-12 col-sm-12">
        <div>
          <p>Seções:</p>
        </div>
      </div>

      <div class="col-md-12 col-sm-12">
          <div class="info-footer">
            <a class="ancoras-footer" href="#home">Home</a>
            <a class="ancoras-footer" href="#about">Sobre nós</a>
            <a class="ancoras-footer" href="#services">Serviços</a>
            <a class="ancoras-footer" href="#gallery">Galeria</a>
            <a class="ancoras-footer" href="#contavt">Contato</a>
          </div>
      </div>


      <div class="col-md-12 col-sm-12">
        <div>
          <p>Formas de pagamento:</p>
        </div>
      </div>

    <div class="col-md-12 col-sm-12">
      <div class="info-footer">
        <a class="ancoras-footer" >Mastercard</a>
        <a class="ancoras-footer" >Visa</a>
        <a class="ancoras-footer" >Pix</a>
        <a class="ancoras-footer" >Boletos</a>
      </div>
  </div>


			<div class="col-md-12 col-sm-12">
            
                <ul class="social-icon"> 
                    <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
                    <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
                    <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                    <li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                    <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="1.0s"></a></li>
                </ul>

				<p class="wow fadeInUp"  data-wow-delay="1s" >Copyright &copy; 2016 Snapshot Studio | 
                Design: <a href="https://plus.google.com/+templatemo" title="free css templates" target="_blank">Templatemo</a></p>
                
			</div>
			
		</div>
        
	</div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->
<script src="./public/js/jquery.js"></script>
<script src="./public/js/bootstrap.min.js"></script>
<script src="./public/js/vegas.min.js"></script>
<script src="./public/js/modernizr.custom.js"></script>
<script src="./public/js/toucheffects.js"></script>
<script src="./public/js/owl.carousel.min.js"></script>
<script src="./public/js/smoothscroll.js"></script>
<script src="./public/js/wow.min.js"></script>
<script src="./public/js/custom.js"></script>

</body>
</html>