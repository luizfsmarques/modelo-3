
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
<script src="<?php echo APP_HOST;?>/public/js/jquery.js"></script>
<script src="<?php echo APP_HOST;?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo APP_HOST;?>/public/js/vegas.min.js"></script>
<script src="<?php echo APP_HOST;?>/public/js/modernizr.custom.js"></script>
<script src="<?php echo APP_HOST;?>/public/js/toucheffects.js"></script>
<script src="<?php echo APP_HOST;?>/public/js/owl.carousel.min.js"></script>
<script src="<?php echo APP_HOST;?>/public/js/smoothscroll.js"></script>
<script src="<?php echo APP_HOST;?>/public/js/wow.min.js"></script>
<script src="<?php echo APP_HOST;?>/public/js/custom.js"></script>
<?php
  //Para caso a  view tenha um arquivo javascript específico
  if( !empty($viewVar['specific_js']) )
  {
     echo "<script src='".APP_HOST."/public/js".$viewVar['specific_js'].".js'></script>";
  }
?>

</body>
</html>