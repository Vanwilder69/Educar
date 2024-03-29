<?php 
?>

<!-- contact -->
<div class="contact">
	<h3 class="heading">Contato</h3>
	<p></p>
	<div class="container">
		<div class="contact-grids">
		
			<div class="col-md-7 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<form action="<?=base_url()?>contactform.php" method="post">		
					<input type="text" placeholder="Nome" name="name" id="name" required="">
					<input type="email" placeholder="Email" name="email" id="email" required="">
					<div class="clearfix"> </div>
					<textarea placeholder="Mensagem..." name="message" id="message" required=""></textarea>
					<input type="submit" value="Enviar" >
				</form>
			</div>
			<div class="col-md-5 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<div class="call ">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Telefone:</h3>
					</div>
					<div class="col-xs-8 contact-grdr">
						<ul>
							<li>(33)3321-7121</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Local:</h3>
					</div>
					<div class="col-xs-7 contact-grdr">
						<ul>
							<li>Rua Dona Julica,98 - Centro </li>
							<li>Caratinga, MG - Brasil</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Email:</h3>
					</div>
					<div class="col-xs-8 contact-grdr">
						<ul>
							<li><a href="mailto:contato@educar.com.vc">atendimento@educar.com.vc</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 socialTitle">
					<h3>Redes Sociais:</h3>
				</div>
				<div class="col-xs-12">
					<ul class="socialIcons"> 
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="https://www.instagram.com/educarcomvc/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //contact -->

<!-- copyright -->
<div class="copyright">
	<div class="container center">
		<div class="copyrighttop center">
		</div>
		<div class="copyrightbottom center">
			<p>© 2020 Educar. Todos os direitos reservados | Desenvolvido com <i class="fa fa-heart"></i> <a href="https://acodedreams.com.br" target="Blank" class="gcode center">CodeDreams</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //copyright -->
		
<!-- popup for sign in form -->
<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog1" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Sign In </h3>
					<form action="./application/controllers/contactform.php" method="post">
						<input type="text" name="Email" class="email" placeholder="Email" required=""/>
						<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
						<ul>
						<li>
							<input type="checkbox" id="brand1" value="">
							<label for="brand1"><span></span>Remember me</label>
						</li>
						</ul>
						<a href="#">Forgot Password?</a><br>
						<div class="clearfix"></div>
							<input type="submit" value="Get Started">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign in form -->

<!-- popup for sign up form -->
<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog2" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Sign Up</h3>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Your Name" required=""/>
						<input type="text" name="Email" class="email" placeholder="Email" required=""/>
						<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
						<input type="password" name="Password" class="password" placeholder="Confirm Password" required=""/>
						<input type="submit" value="Register Now">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign up form -->

