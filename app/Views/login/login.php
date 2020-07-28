<section>
	<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-5">
	          <div class="card-body">
	            <h5 class="card-title text-left">Sign In</h5>
	            <div class="progress d-none">
				  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
				</div>
	            <form class="form-signin">
	              <div class="form-label-group">
	                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
	                <!-- <label for="inputEmail">Email address</label> -->
	              </div>

	             <!--  <div class="form-label-group">
	                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	                <label for="inputPassword">Password</label>
	              </div>

	              <div class="custom-control custom-checkbox mb-3">
	                <input type="checkbox" class="custom-control-input" id="customCheck1">
	                <label class="custom-control-label" for="customCheck1">Remember password</label>
	              </div>
	              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
	              <hr class="my-4"> -->
	              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
	              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
</section>

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
</style>