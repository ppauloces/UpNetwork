<?php
    session_start();
?>

<html>
	<head>
		<title>Iniciar sessão - UpNetwork</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	</head>
	<body class="is-preload">
		
		<style>

@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic,400italic");
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Source Sans Pro", sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background-image: url("images/pic05.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
::selection{
  
  color: #fff;
}
.wrapper{
  max-width: 390px;
  background: #fff;
  padding: 60px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: black;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #777377, #463e42);
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
		<div class="wrapper">
			<div class="title-text">
			   <div class="title login">
				  Login
			   </div>
			</div>
      <br>
			   <div class="form-inner">

                <form method="POST" action="login.php" class="login" id="login">
                    <div class="field">
                       <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                       <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <div class="pass-link">
                       <a href="index.html">Esqueceu sua senha?</a>
                    </div>
                    <div class="field btn">
                       <div class="btn-layer"></div>
                       <input type="submit" name="submit" value="Login">
                    <div id="linkResultado1"></div>
                    </div>
                    <div class="signup-link">
                       Não tem conta? <a href="login.html">Crie uma agora!</a>
                    </div>
                 </form>
                 <p style="text-align: center; color: red;">
                      <?php
                      if(isset($_SESSION['loginErro']))
                      {
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                      }
                      
                      ?>
                    </p>
                 
                 
			   </div>
			</div>
		 </div>

     		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
     

     

		 <script>
       
			const loginText = document.querySelector(".title-text .login");
			const loginForm = document.querySelector("form.login");
			const loginBtn = document.querySelector("label.login");
			const signupBtn = document.querySelector("label.signup");
			const signupLink = document.querySelector("form .signup-link a");
			signupBtn.onclick = (()=>{
			  loginForm.style.marginLeft = "-50%";
			  loginText.style.marginLeft = "-50%";
			});
			loginBtn.onclick = (()=>{
			  loginForm.style.marginLeft = "0%";
			  loginText.style.marginLeft = "0%";
			});
			signupLink.onclick = (()=>{
			  signupBtn.click();
			  return false;
			});
		 </script>
		
	</body>
</html>