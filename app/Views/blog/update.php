<section class="create-blog" style="margin-top: 4%">

	<?php
		// echo "<pre>";
		// 	print_r($post);
		// echo "</pre>";
	?>	
	<?php  
		$session = \Config\Services::session();
	?>
	<div class="container">
		<h1>Update post</h1>
		<?php if($_POST && isset($session->failed)): ?>
			<!-- To display error -->
			<?= \Config\Services::validation()->listErrors(); ?>						  	
		<?php endif; ?>
		<form action="/blog/updatePosts" method="post" class="">			  
		  <input type="text" class="form-control" id="inputIdUpdate" name="id" placeholder="Id" value="<?= $session->failed ?>">
		  <div class="form-group">
		    <label for="inputTitleUpdate">Title</label>
		    <input type="text" class="form-control" id="inputTitleUpdate" name="title" placeholder="Title">
		  </div>
		  <div class="form-group">
		    <label for="inpuBodyUpdate">Body</label>
		    <textarea class="form-control" id="inpuBodyUpdate" name="body" placeholder="Body"></textarea>
		  </div>
		  <!-- <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Check me out
		      </label>
		    </div>
		  </div> -->
		  <button type="submit" class="btn btn-primary" id="updatePosts">Update</button>
		</form>		
	</div>

	<script type="text/javascript">

		// AJAX 

		// $('#updatePosts').click(function() {
		// 	alert('test');
		// });
		// $(document).ready(function() {			


		// 	// var data = [
		// 	// 	'title' => $('#inputTitleUpdate').val(),
		// 	// 	'body' => $('#inpuBodyUpdate').val(),
		// 	// ];
		// 	$('.btn.btn-primary').on('click', function() {
		// 		var title = $('#inputTitleUpdate').val();
		// 		var body = $('#inpuBodyUpdate').val();
		// 		// alert(title + body);
		// 		// alert('test');
		// 		$.ajax({  
		// 		    url: '<?php echo base_url('/blog/updatePosts'); ?>',
		// 		    type: 'post',
		// 		    dataType:'json',
		// 		    data:{title:title,body:body},
		// 		    // data: data,
		// 		    success:function(response){
		// 		        alert(response);
		// 		    },
		// 		    error:function(response){
		// 		        // alert(response);		    	
		// 		    }
		// 		});
		// 	});
		// });		
	</script>
</section>