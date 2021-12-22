<?php
   session_start();
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Up Network</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="/path/to/flickity.css" media="screen">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
	</head>
	<body class="landing is-preload">

		<style>
	html{
		scroll-behavior: smooth;
	}

		</style>
		<div id="page-wrapper">
				
			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="#banner">Up</a>Network</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#banner" class="icon solid fa-angle-down">Menu</a>
								<ul>
									<li><a href="#planos">Planos</a></li>
									<li><a href="#portifolio">Portifólio</a></li>
									<li><a href="#sobre">Sobre nós</a></li>
									<li><a href="#contato">Contato</a></li>
								</ul>
							</li>

							<li><button class="button view-modal">Login</button></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>UpNetwork</h2>
					<p>Dando um < Up > no seu negócio.</p>
					<ul class="actions special">
						<li><a href="#planos" class="button primary">Conheça nossos planos</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Com o que trabalhamos?
							<p>A UpNetwork desenvolve sistemas, gera tráfego para atrair mais clientes e também cuidamos de suas redes sociais!</p>
						</header>
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<i class="fas fa-code" style="font-size: 3rem;"></i>
								<h3>Sistemas Web</h3>
								<p>Desenvolvemos sistemas para cada necessidade de sua empresa.</p>
							</section>
							<section>
								<i class="fas fa-hashtag" style="font-size: 3rem;"></i>
								<h3>Redes sociais</h3>
								<p>Também cuidamos das suas redes sociais, gerando público para crescer e popularizar seu negócio.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<i class="fas fa-paint-brush" style="font-size: 3rem;"></i>
								<h3>Design e artes digitais</h3>
								<p>Não paramos por aí, também trabalhamos com identidade visuais. Criando qualquer tipo de template e design para melhor te atender!</p>
							</section>
							<section>
								<i class="fab fa-adversal" style="font-size: 3rem;"></i> 
								<h3>Tráfego pago</h3>
								<p>E por fim, geramos tráfego para seu site ou negócio, trazendo mais público e cliques.</p>
							</section>
						</div>
					</section>

					
				</section>

				
				<br><br><br><br>

				<section id="portifolio" class="container">

				<div class="popup">
    <div class="title-text">
		<div style="text-align: left; font-size: 38px; font-family: Source Sans Pro, sans-serif;" class="title login">
		   Login
		</div>
		<div class="close"><i style="text-align: end;" class="uil uil-times"></i></div>
	 </div>
	 <br>
    <div class="form-inner">

		<form method="POST" action="login.php" class="login" id="login">
			<div class="field">
			   <input type="text" name="emailusu" placeholder="Email" required>
			</div>
			<div class="field">
			   <input type="password" name="senhausu" placeholder="Senha" required>
			</div>
			<div class="pass-link">
			   <a href="index.html">Esqueceu sua senha?</a>
			</div>
			<div class="field">
			   <input type="submit" name="submit" value="Login">
			</div>
			<div id="linkResultado1"></div>
			<div class="signup-link">
			   Já é nosso cliente? Acesse seu painel administrativo!
			</div>
		 </form>
	   </div>
  </div>

  

						

					</section>


			<section id="sobre">
				<section id="main"  class="container">
					<header>
						<h2>Sobre nós</h2>
						<p>Conheça a equipe por trás da UpNetwork.</p>
					</header>
					<div class="box">
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
						<h3>Quem somos?</h3>
						<p>Somos apenas um grupo de amigos comum com idéias mirabolantes, tirando-as do papel.</p>
						<div class="row">
							<div class="row-6 row-12-mobilep">
								<h3>Como surgiu a UpNetwork?</h3>
								<p>Surgiu literalmente em uma conversa no passeio às 23h.</p>
							</div>
							<div class="row-6 row-12-mobilep">
								<h3>Não são jovens demais para entrar no mundo dos negócios?</h3>
								<p>Acreditamos que a frase "Nunca é tarde demais" também pode se aplicar em algum casos com o "Nunca é cedo demais". Esse é o caso.</p>
							</div>
						</div>
					</div>
				</section>
			</section>
				<br><br><br><br>
				<section id="main" class="container">
					<header>
						<h2>Planos</h2>
						<p>Conheça nossos planos, o mais acessível para você!</p>
					</header>
					<div class="row">
						<div class="col-12">

						</div>
					</div>
					<div class="row">
						<div class="col-12">
								
						</div>
					</div>
					<div class="row">
						<div class="col-12">

							<!-- Table -->
							<section id="planos">
								<section class="box">
									<h3>Planos únicos</h3>

									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Nome</th>
													<th>Descrição</th>
													<th>Preço</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Sistema Web</td>
													<td>Template único + Suporte gratuito (apenas em dias úteis).</td>
													<td>R$299,99</td>
												</tr>
												<tr>
													<td>Tráfego</td>
													<td>Gerar tráfego para seu negócio (valor individual).</td>
													<td>R$409,99</td>
												</tr>
												<tr>
													<td>Design/Arte Visual</td>
													<td>Logos, postagens, templates para storys e etc (valor individual).</td>
													<td>R$19,99</td>
												</tr>
										</table>
									</div>

								</section>
							</section>

								<section class="box">
									<h3>Planos mensais</h3>
									<table>
										<thead>
											<tr>
												<th>Nome</th>
												<th>Descrição</th>
												<th>Preço</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Sistema Web</td>
												<td>Template + Hospedagem + Suporte (7 dias por semana).</td>
												<td>R$499,99</td>
											</tr>
											<tr>
												<td>Tráfego</td>
												<td>Gerar tráfego para seu negócio (valor mensal).</td>
												<td>R$239,99</td>
											</tr>
											<tr>
												<td>Design/Arte Visual</td>
												<td>Logos, postagens, templates para storys e etc (valor mensal).</td>
												<td>R$69,99</td>
											</tr>
									</table>
										</table>
									</div>

								</section>

							<section id="contato">
								<section class="box">
									<h3>Dúvidas? Mande um email para nós. Reponderemos o mais rápido possível.</h3>
									<form method="POST" action="contato.php" id="target">
										<div class="row gtr-uniform gtr-50">
											<div class="col-6 col-12-mobilep">
												<input type="text" class="field" name="name" id="name" value="" placeholder="Nome" />
											</div>
											<div class="col-6 col-12-mobilep">
												<input type="email" class="field" name="email" id="email" value="" placeholder="Email" />
											</div>
											<div class="col-12">
												<select name="category" id="category">
													<option value="">- Categorias -</option>
													<option value="Suporte">Suporte</option>
													<option value="Método de pagamento">Método de pagamento</option>
													<option value="Planos">Planos</option>
												</select>
											</div>
											<div class="col-6 col-12-narrower">
												<input type="checkbox" id="copy" name="copy">
												<label for="copy">Envie-me uma cópia desse email</label>
											</div>
											<div class="col-12">
												<textarea name="message" class="field" id="message" placeholder="Mande sua mensagem aqui." rows="6"></textarea>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input class="field" type="submit" value="Enviar" /></li>
													<li><input type="reset" value="Limpar" class="alt" /></li>
												</ul>
												<div id="linkResultado"></div>
											</div>
											
										</div>
									</form>

									<hr />

								</section>
							</section>
			<!-- CTA -->
				<section id="cta">

					<h2>Ficou interessado? Se registre agora</h2>
					<p>E conheça nossos planos</p>
					<div class="field btn">
						<div class="btn-layer"></div>
						<input type="submit" value="Registrar">
					 </div>

				</section>

				

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="twitter.com" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="facebook.com" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="instagram.com" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/ppauloces" class="icon brands fa-github"><span class="label">Github</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; UpNetwork. Todos os direitos reservados.</li><li>Design: <a href="https://github.com/ppauloces" style="text-decoration: none;">Paulo Amaral</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


	<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Go for it</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday Prices",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 22px; font-weight: 700; text-transform: uppercase;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Get 90% Off!",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Get Web Hosting for $0.99/month + SSL Certificate for FREE!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 700; margin-bottom: 15px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2020-wp-inject-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>
</html>

<script>
	jQuery('#target').submit(function () {
		event.preventDefault();
		var dados = jQuery(this).serialize();
		jQuery.ajax({
			type: "POST",
			url: "contato.php",
			data: dados,
			success: function (data)
			{
				$("#linkResultado").html(data);
			}
		});
		return false;
	});
</script>




  <script>
        jQuery('#login').submit(function () {
            event.preventDefault();
            var dados = jQuery(this).serialize();
			
            jQuery.ajax({
                type: "POST",
                url: "login.php",
                data: dados,
                success: function (data)
                {
					
                    $("#linkResultado1").html(data);
                }
            });
            return false;
        });
    </script>

	

  <script>
    const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    field = popup.querySelector(".field"),
    input = field.querySelector("input"),
    copy = field.querySelector("button");
    viewBtn.onclick = ()=>{
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }
  </script>


  <style>
	::selection{
  color: #fff;
  background: #7d2ae8;
}
 .popup{
  position: absolute;
  left: 50%;
}

.popup{
  background: #fff;
  padding: 25px;
  border-radius: 15px;
  top: -150%;
  max-width: 380px;
  width: 100%;
  opacity: 0;
  pointer-events: none;
  box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
  transform: translate(-50%, -50%) scale(1.2);
  transition: top 0s 0.2s ease-in-out,
  opacity 0.2s 0s ease-in-out,
              transform 0.2s 0s ease-in-out;
}
.popup.show{
  top: 50%;
  opacity: 1;
  pointer-events: auto;
  transform:translate(-50%, -50%) scale(1);
  transition: top 0s 0s ease-in-out,
              opacity 0.2s 0s ease-in-out,
              transform 0.2s 0s ease-in-out;

}
.popup :is(header, .icons, .field){
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.popup header{
  padding-bottom: 15px;
  border-bottom: 1px solid #ebedf9;
}
.title-text{
  display: flex;
  width: 200%;
}
 .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}

input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: black;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: black;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(left, #777377, #463e42);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}
  </style>