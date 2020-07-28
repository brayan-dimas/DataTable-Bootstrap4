<!-- <section> -->
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://www.publicdomainpictures.net/pictures/320000/velka/background-image.png');">			
			<div class="container">
			    <div class="row">
			      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			        <div class="card card-signin my-5 shadow-lg rounded-lg">
					  <h2 class="card-header bg-dark text-white rounded-top">Login</h2>
			          <div class="card-body">	            
			            <div class="progress d-none">
						  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
						</div>
			            <form class="form-signin">
			              	<br>
			              	<div class="form-label-group form-group">
			                	<input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>	                
			              	</div>
			              	<p class="text-right">Forgot email?</p>
				            <div class="form-group">
							    <button type="button" class="btn btn-dark btn-lg btn-block">SIGN IN</button>
							</div>		              
			            </form>			            					
			          </div>
			          <br><br><br><br><br><br>		          
			          	<div class="form-group text-center">
						    <label>Don't have an account ?</label> 
						    <h6 class="text-center">SIGN UP NOW</h6>
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
			$('div.progress').removeClass('d-none');
			alert('test')
		});
	});
</script>

<style type="text/css">
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

	input#inputEmail,button.btn.btn-dark.btn-lg.btn-block {
	    border-radius: 20px !important;
	}

	input#inputEmail {
		background-color: #EBEBEB !important;
		padding: 6%;
	}	

</style>