<section>
	<?php 
		echo "<pre>";
			print_r($post);
		echo "</pre>";

	?>

	<article class="blog-post">
		<!-- <h1><?= $post['slug'] ?></h1>
		<?= $post['body'] ?> -->

		<div class="container">
			<div class="card">
				<img class="card-img-top" src="https://cdn.wallpapersafari.com/36/47/5BkQPM.jpg" alt="Shark">
				<div class="card-body">
					<h5 class="card-title"><?= $post['slug'] ?></h5>
					<p class="card-text"><?= $post['body'] ?></p>
				</div>
			</div>
		</div>
	</article>



</section>