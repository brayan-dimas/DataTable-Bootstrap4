<section>

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
	<div class="jumbotron">
		<div class="container">
		  <h1 class="display-4">Homepage</h1>
		  <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
		  <hr class="my-4">
		 <!--  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
		</div>
	</div>

<!-- Carousel Part -->
<!-- <div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="https://cdn.wallpapersafari.com/36/47/5BkQPM.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="https://cdn.wallpapersafari.com/6/72/Wo7ziS.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="https://images-na.ssl-images-amazon.com/images/S/sgp-catalog-images/region_US/lqefw-65B0798DAJF-Full-Image_GalleryBackground-en-US-1487110816080._SX1080_.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div> -->
</section>
<h1><?= session()->get('logged_in') ?></h1>
<!-- Posts part -->
<section>
	<div class="container">
		<!-- if not empty array or true -->		
		<?php if ($news): ?>
			<div class="card-deck">
				<div class="row">
			<?php foreach ($news as $newsItem): ?>				
				<?php $new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $newsItem["created_at"] ); ?>					
				<div class="col-sm-12 col-md-4">
					<div class="card">
					  <img class="card-img-top" src="https://cdn.wallpapersafari.com/36/47/5BkQPM.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><a href="/blog/<?= $newsItem['slug'] ?>"><?=  ucfirst($newsItem['title']) ?></a></h5>
					    <p class="card-text"><?= $newsItem['body'] ?></p>
					    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#PostModal'.$newsItem['id']; ?>">
						  More info
						</button>
					    <!-- <a href="<?php echo $newsItem['slug']; ?>" class="btn btn-primary" ><?= $newsItem['slug'] ?></a> -->
					  </div>
					  <div class="card-footer">
				      	<small class="text-muted"><?= $new_datetime->format('m/d/y, H:i:s'); ?></small>
				      </div>
					</div>	
				</div>
				<!-- Modal -->
				<div class="modal fade" id="<?php echo 'PostModal'.$newsItem['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $newsItem['id'].'Title'; ?>" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle"><?=  ucfirst($newsItem['title']) ?></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <?= $newsItem['body'] ?>
				      </div>
				      <div class="modal-footer">
				      	<a href="<?php echo 'blog/delete/'.$newsItem['id']; ?>" class="btn btn-primary">Delete</a>
				      	<a href="<?php echo 'blog/update/'.$newsItem['id']; ?>" class="btn btn-primary">Update</a>
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>				        
				      </div>
				    </div>
				  </div>
				</div>
			<?php endforeach; ?>
				</div>
			</div>			
		<?php else: ?>
			<p class="text-center">No posts have benn found</p>
		<?php endif; ?>
	</div>
	<?php
		// echo "<pre>";
		// 	print_r($news);
		// echo "</pre>";
	
	?>
</section>