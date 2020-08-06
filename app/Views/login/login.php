<!-- <section> -->
<!-- <div class="container">
	<div class="row">
		<div class="container">
			<div class="row">
				<a href="#" class="intro-banner-vdo-play-btn pinkBg" target="_blank">
					<i class="glyphicon glyphicon-play whiteText" aria-hidden="true"></i>
					<span class="ripple pinkBg"></span>
					<span class="ripple pinkBg"></span>
					<span class="ripple pinkBg"></span>
				</a>
			</div>
		</div>
	</div>
</div> -->
	<div class="limiter">
		<!-- style="background-image: url('https://www.publicdomainpictures.net/pictures/320000/velka/background-image.png');" -->
		<div class="container-login100" style="background-image: url('https://www.publicdomainpictures.net/pictures/320000/velka/background-image.png');">			
			<div class="container">
			    <div class="row">
			      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			        <div class="card card-signin my-5 shadow-lg rounded-lg login-card">
					  <h2 class="card-header bg-dark text-white rounded-top">Login</h2>
			          	<div class="card-body">	            
				            <!-- <div class="progress d-none">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
							</div> -->
							<?php  
								$session = \Config\Services::session();
							?>
							<!-- success = the name of session that i initialized in Form Blog controller -->
							<?php if(isset($session->success)): ?>
								<div class="alert alert-success text-center alert-dismissible fade show mb-0" role=0>
									<?= $session->success?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php endif; ?>		
							<div class="form-group">				
						      	<div class="alert alert-success d-none" id="div-res-message" role="alert">
								  <strong id="res_message"></strong>
								</div>
								<div class="alert alert-danger d-none" id="div-res-message-danger" role="alert">
								  <strong id="res_message_danger"></strong>
								</div>  
							</div>
							<a href="#" class="intro-banner-vdo-play-btn pinkBg d-none">
								<i class="glyphicon glyphicon-play whiteText" aria-hidden="true"></i>
								<span class="ripple pinkBg"></span>
								<span class="ripple pinkBg"></span>
								<span class="ripple pinkBg"></span>
							</a>
							<form class="form-signin">
				              	<!-- <br> -->
				              	<div class="form-label-group form-group">
				                	<input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>	                
				              	</div>
				              	<p class="text-right"><a href="#" class="text-dark">Forgot email?</a></p>
					            <div class="form-group">
								    <button type="submit" class="btn btn-dark btn-lg btn-block">SIGN IN</button>
								</div>		              
				            </form>	
				            <form class="form-signin-password d-none">
				              	<!-- <br> -->
				              	<div class="form-label-group form-group">
				                	<input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required autofocus>	                
				              	</div>
				              	<p class="text-right"><a href="#" class="text-dark">Forgot email?</a></p>
					            <div class="form-group">
								    <button type="submit" class="btn btn-dark btn-lg btn-block">SIGN IN</button>
								</div>		              
				            </form>	      
						    </div>	
				            <br><br><br><br><br>      
				          	<div class="text-center p-3">
							    <label>Don't have an account ?</label> 
							    <h6 class="text-center cursor"><a href="#" class="text-dark" id="sign-up-now">SIGN UP NOW</a></h6>
						    </div>	            					
			          	</div>

			          	<div class="card card-signin my-5 shadow-lg rounded-lg register-card d-none">
						  <h2 class="card-header bg-dark text-white rounded-top">Register</h2>
				          	<div class="card-body">	            
					            <!-- <div class="progress d-none">
								  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
								</div> -->
								<?php  
									$session = \Config\Services::session();
								?>
								<!-- success = the name of session that i initialized in Form Blog controller -->
								<?php if(isset($session->success)): ?>
									<div class="alert alert-success text-center alert-dismissible fade show mb-0" role=0>
										<?= $session->success?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								<?php endif; ?>		
								<div class="form-group">				
							      	<div class="alert alert-success d-none" id="div-res-message-register" role="alert">
									  <strong id="res_message-register"></strong>
									</div>  
								</div>
								<a href="#" class="intro-banner-vdo-play-btn register pinkBg d-none">
									<i class="glyphicon glyphicon-play whiteText" aria-hidden="true"></i>
									<span class="ripple pinkBg"></span>
									<span class="ripple pinkBg"></span>
									<span class="ripple pinkBg"></span>
								</a>
								<!-- Encrypt Password -->
								<!-- password_hash($password, PASSWORD_DEFAULT) -->
								<!-- condition: password_verify($password, $result['password']) -->
								<form class="form-register" id="register-form-ajax">
					              	<!-- <br> -->
					              	<div class="form-label-group form-group">
					                	<input type="text" id="input-firstname" class="form-control" name="firstname" placeholder="Firstname" required autofocus autocomplete="off">                
					              	</div>	
					              	<div class="form-label-group form-group">
					                	<input type="text" id="input-middlename" class="form-control" name="middlename" placeholder="Middlename" required autofocus autocomplete="off">                
					              	</div>	
					              	<div class="form-label-group form-group">
					                	<input type="text" id="input-lastname" class="form-control" name="lastname" placeholder="Surname" required autofocus autocomplete="off">                
					              	</div>	
					              	<div class="form-label-group form-group">
					                	<input type="email" id="input-email" class="form-control" name="email" placeholder="Email" required autofocus autocomplete="off">                
					              	</div>				              	
					              	<div class="form-label-group form-group">
					                	<input type="password" id="input-password" class="form-control" name="password" placeholder="Password" required autofocus autocomplete="off">                
					              	</div>				              	
						            <div class="form-group">
									    <button type="submit" class="btn btn-dark btn-lg btn-block">REGISTER</button>
									</div>		              
					            </form>		      
							    </div>	
					            <br><br>     
					          	<div class="text-center p-3">
								    <label>Login your account now!</label> 
								    <h6 class="text-center cursor"><a href="#" class="text-dark" id="login-now">LOGIN NOW</a></h6>
							    </div>	            					
				          	</div>			          
				        </div>			          
			        </div>
			    </div>
			</div>
		</div>
	</div>
<!-- </section> -->
<script type="text/javascript">
	$(document).ready(function() {
		$('form.form-signin').on('submit', function(event) {
			event.preventDefault();
			// method="post" action="/userlogin/login"
			// $('div.progress').removeClass('d-none');
			console.log($('.form-signin').serialize());
			$.ajax({
				url: "<?php echo base_url('/userlogin/login'); ?>",
				method: "post",
				data: $('.form-signin').serialize(),
		        dataType: "json",
		        beforeSend: function() {
	            	$(".intro-banner-vdo-play-btn").removeClass('d-none');
	            	// $(".progress").removeClass('d-none');
	           	},
		        success: function(response) {
		        	// console.log(response.data.message)
		        	console.log(response)
		        	// $('#div-res-message').hasClass('d-none');
		        	// $('#div-res-message-danger').hasClass('d-none');

		        	// if (!$('#div-res-message').hasClass('d-none')) {
		        	// 	// $('#div-res-message-danger').toggleClass('d-none');
		        	// }else {
		        	// 	$('#div-res-message-danger').toggleClass('d-none');
		        	// }

		        	
		        	if (response.data.success) {
		        		$('.form-signin').toggleClass('d-none');
		        		$('.form-signin-password').removeClass('d-none');
		        		$('#div-res-message').removeClass('d-none');
		        		$('#res_message').html(response.data.message);

		        		if (!$('#div-res-message-danger').hasClass('d-none')) {
		        			$('#div-res-message-danger').toggleClass('d-none')
		        		}

		        	}else {
		        		$('#div-res-message-danger').removeClass('d-none');
		        		$('#res_message_danger').html(response.data.message);

		        		if (!$('#div-res-message').hasClass('d-none')) {
		        			$('#div-res-message').toggleClass('d-none')
		        		}		        		
		        	}	      

  	
		        	// $(".progress").toggleClass('d-none');
		        	$(".intro-banner-vdo-play-btn").toggleClass('d-none');
		        }
			})
		});


		$('.form-signin-password').on('submit', function(event) {
			event.preventDefault();
			// console.log($('.form-signin-password').serialize());

			$.ajax({
				url: "<?php echo base_url('/userlogin/passwordAuth') ?>",
				method: "post",
				data: $('.form-signin-password').serialize(),
				dataType: "json",
				beforeSend: function() {
	            	$(".intro-banner-vdo-play-btn").removeClass('d-none');					
				},
				success: function(response) {
					console.log(response);

					if (response.data.success) {
						homepage(response.data.result);
					}
					$(".intro-banner-vdo-play-btn").toggleClass('d-none');
				},
				error: function(response) {
					console.log("Error " + response);
				}
			});
		});

		function homepage(result) {
			// console.log(result);
			// window.location = "<?php echo base_url('/pages/homePage') ?>";
			// $.ajax({
			// 	url: "<?php echo base_url('/userlogin/homepage') ?>",
			// 	method: "post",
			// 	data: {data:result},
			// 	dataType: "json",
			// 	success: function(response) {
			// 		console.log(response);
			// 	},
			// 	error: function(error) {
			// 		console.log("Error " + error);
			// 	}
			// });
		}

		$('form.form-register').on('submit', function(event) {
			event.preventDefault();

			// console.log($('.form-register').serialize());

			$.ajax({
				url: "<?php echo base_url('/userlogin/register'); ?>",
				method: "post",
				data: $('.form-register').serialize(),
				dataType: "json",
				beforeSend: function() {
					$(".intro-banner-vdo-play-btn.register").removeClass('d-none');
				},
				success: function(response) {
					console.log(response)
		        	$('#div-res-message-register').removeClass('d-none');
		        	$('#res_message-register').html(response.data.message);
		        	// $(".progress").toggleClass('d-none');
		        	$(".intro-banner-vdo-play-btn.register").toggleClass('d-none');
		        	document.getElementById("register-form-ajax").reset(); 
				}
			});
		});

		$('#sign-up-now').on('click', function(event) {
			event.preventDefault();
			$('div.login-card').toggleClass('d-none');
			$('div.register-card').removeClass('d-none');
		});

		$('#login-now').on('click', function(event) {
			event.preventDefault();
			$('div.login-card').removeClass('d-none');
			$('div.register-card').toggleClass('d-none');
		});		
	});
</script>



<style type="text/css">
	/*#57B845 - green*/
	/*#343a40 - dark*/

	/*.text-success {
		color: #57B845 !important;
	}

	.bg-dark, .btn-dark {
		background-color: #57B845 !important;
		border-color: #57B845;
	}
	
	.btn-dark:hover,
	.btn-dark:focus {
		border-color: #57B845;
	}*/

	footer.fixed-bottom, nav.fixed-top {
		display: none;
	}

	.limiter {
	    width: 100%;
	    margin: 0 auto;
	}
	.container-login100 {
	    width: 100%;
	    min-height: 100vh;
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    flex-wrap: wrap;
	    justify-content: center;
	    align-items: center;
	    padding: 15px;
	    background-repeat: no-repeat;
	    background-position: center;
	    background-size: cover;
	    position: relative;
	    z-index: 1;
	}

	.container-login100::before {
	    content: "";
	    display: block;
	    position: absolute;
	    z-index: -1;
	    width: 100%;
	    height: 100%;
	    top: 0;
	    left: 0;
	    background-color: #343a40 !important;
	    opacity: 0.8;
	}

	.card {
		border: none !important;
		border-radius: 19px !important;
	}

	h2.card-header {
	    border-radius: 17px 17px 0px 0px !important;
	    padding: 5% !important;
	}

	input#inputEmail, input#inputPassword,button.btn.btn-dark.btn-lg.btn-block {
	    border-radius: 20px !important;
	}

	input#inputEmail, input#inputPassword {
		background-color: #EBEBEB !important;
		/*padding: 6%;*/
	}	

	.pinkBg {
	    background-color: #ed184f!important;
	    background-image: linear-gradient(90deg, #fd5581, #fd8b55);
	}

	.intro-banner-vdo-play-btn{
	    height:60px;
	    width:60px;
	    position:absolute;
	    top:50%;
	    left:50%;
	    text-align:center;
	    margin:-30px 0 0 -30px;
	    border-radius:100px;
	    z-index:1
	}
	.intro-banner-vdo-play-btn i{
	    line-height:56px;
	    font-size:30px
	}
	.intro-banner-vdo-play-btn .ripple{
	    position:absolute;
	    width:160px;
	    height:160px;
	    z-index:-1;
	    left:50%;
	    top:50%;
	    opacity:0;
	    margin:-80px 0 0 -80px;
	    border-radius:100px;
	    -webkit-animation:ripple 1.8s infinite;
	    animation:ripple 1.8s infinite
	}

	@-webkit-keyframes ripple{
	    0%{
	        opacity:1;
	        -webkit-transform:scale(0);
	        transform:scale(0)
	    }
	    100%{
	        opacity:0;
	        -webkit-transform:scale(1);
	        transform:scale(1)
	    }
	}
	@keyframes ripple{
	    0%{
	        opacity:1;
	        -webkit-transform:scale(0);
	        transform:scale(0)
	    }
	    100%{
	        opacity:0;
	        -webkit-transform:scale(1);
	        transform:scale(1)
	    }
	}
	.intro-banner-vdo-play-btn .ripple:nth-child(2){
	    animation-delay:.3s;
	    -webkit-animation-delay:.3s
	}
	.intro-banner-vdo-play-btn .ripple:nth-child(3){
	    animation-delay:.6s;
	    -webkit-animation-delay:.6s
	}

</style>