<section class="create-blog" style="margin-top: 4%">
	
	<div class="container">
		<!-- Add Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
		 	Add posts
		</button>

		<!-- Add Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLongAjax">
		 	Add posts ajax
		</button>
	</div>	

	<?php
		// echo "<pre>";
		// 	print_r($pager);
		// echo "</pre>";
		// die;
	?>

	<br>

	<div class="container">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLongAddDataTable">
		 	ADD
		</button>
		<button type="button" class="btn btn-warning updateUpperButton disabled" data-toggle="modal" data-target="#exampleModalUpdate">
		 	UPDATE
		</button>
		<button type="button" class="btn btn-danger deleteUpperButton disabled" data-toggle="modal" data-target="#exampleModalCenterDelete">
		 	DELETE
		</button>
		<br><br>
		<table id="postTable" class="table table-striped table-bordered display" style="width:100%">
	        <thead>
	            <tr>
					<!-- <th>#</th> -->
					<th>ID</th>
					<th>TITLE</th>
					<th>BODY</th>
					<th>SLUG</th>
					<th>DATE CREATED</th>
					<th>ACTION</th>
	            </tr>
	        </thead>
	        <tbody>
	        	
	        </tbody>
	        <tfoot>
	            <tr>
	                <!-- <th>#</th> -->
					<th>ID</th>
					<th>TITLE</th>
					<th>BODY</th>
					<th>SLUG</th>
					<th>DATE CREATED</th>
					<th>ACTION</th>
	            </tr>
	        </tfoot>
	    </table>
	</div>


	<!-- Modal create-->
	<div class="modal fade" id="exampleModalLongAjax" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongAjaxTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongAjaxTitle">Create new post</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="container">	      			      
			<?= \Config\Services::validation()->listErrors(); ?>
			<div class="form-group">
		      	<span class="d-none alert alert-success mb-5" id="res_message">Created successfully</span>	        
		    </div>			
				<form id="addPostAjax" name="addPostAjax">		  
				  <div class="form-group">
				    <label for="inputTitle">Title</label>
				    <input type="text" class="form-control" id="inputTitleAjax" name="titleAjax" placeholder="Title" required>
				  </div>
				  <div class="form-group">
				    <label for="inpuBody">Body</label>
				    <textarea class="form-control" id="inpuBodyAjax" name="bodyAjax" placeholder="Body" required></textarea>
				  </div>
				  <!-- <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        Check me out
				      </label>
				    </div>
				  </div> -->
				  <button type="submit" id="createAddformAjax" class="btn btn-primary">Create</button>
				</form>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>


	<!-- Modal create-->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Create new post</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php if($_POST): ?>
			<!-- To display error -->
			<?= \Config\Services::validation()->listErrors(); ?>
			<?php endif; ?>
			<form action="/blog/create" method="post" class="">		  
			  <div class="form-group">
			    <label for="inputTitle">Title</label>
			    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Title" required>
			  </div>
			  <div class="form-group">
			    <label for="inpuBody">Body</label>
			    <textarea class="form-control" id="inpuBody" name="body" placeholder="Body" required></textarea>
			  </div>
			  <!-- <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
			      </label>
			    </div>
			  </div> -->
			  <button type="submit" class="btn btn-primary">Create</button>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- <div class="container">
		<h1>Create new post</h1>
		<?php if($_POST): ?> -->
			<!-- To display error -->
			<!-- <?= \Config\Services::validation()->listErrors(); ?>
		<?php endif; ?>
		<form action="/blog/create" method="post" class="">		  
		  <div class="form-group">
		    <label for="inputTitle">Title</label>
		    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Title">
		  </div>
		  <div class="form-group">
		    <label for="inpuBody">Body</label>
		    <textarea class="form-control" id="inpuBody" name="body" placeholder="Body"></textarea>
		  </div> -->
		  <!-- <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Check me out
		      </label>
		    </div>
		  </div> -->
		  <!-- <button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div> -->
	<br>
	<!-- <div class="container">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">ID</th>
		      <th scope="col">TITLE</th>
		      <th scope="col">BODY</th>
		      <th scope="col">SLUG</th>
		      <th scope="col">DATE CREATED</th>
		      <th scope="col">ACTION</th>
		    </tr>
		  </thead>
		  <tbody class="result">

		  	<?php 
		  		$no = 1;
			  		// echo '<pre>';
			  		// 	print_r($pager);
			  		// echo '</pre>';
			  		// die;

		  		foreach ($blog as $posts) {
		  			?>
		  				<tr>
					      <th scope="row"><?= $no ?></th>		
					      <th><?= $posts['id'] ?></th>		
					      <td><?= ucfirst($posts['title']) ?></td>			     
					      <td><?= ucfirst($posts['body'])?></td>			     
					      <td><?= ucfirst($posts['slug'])?></td>			     
					      <td><?= $posts['created_at'] ?></td>			     
					      <td>
					      	
					      	<a href="<?= $posts['id'] ?>" data-toggle="modal" data-target="#exampleModalCenter" id="confirmToDelete" class="getIdValueToDelete"><span class="badge badge-danger w-25">Delete</span></a>
					      	<a href="<?= $posts['id'] ?>" data-toggle="modal" data-target="#exampleModalUpdate" id="confirmToUpdate" class="getIdValueToUpdate"><span class="badge badge-warning w-25">Update</span></a>
					      </td>
					    </tr>					   
		  			<?php
		  			$no++;
		  		}
		  	?>		    
		  </tbody>
		</table>
	</div> -->
		<!-- Delete Modal -->
		<div class="modal fade" id="exampleModalCenterDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Do you want to delete ?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>		      
		      <div class="modal-footer">
		      	<!-- <a href="" id="deletePost" class="btn btn-danger">Yes</a>		      	 -->
		      	<button type="button" id="deletePostAjax" class="btn btn-danger">Yes</a>		      	
		        <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>		        
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Update Modal -->
		<div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Do you want to Update ?</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>		      
			      <div class="modal-body">
			      	<div class="container">
				      	<?= \Config\Services::validation()->listErrors(); ?>
				      	<span class="d-none alert alert-success mb-5" id="res_message_update">Updated successfully</span>
					    <form action="javascript:void(0)" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8">
					      <div class="form-group">
					      	<input type="hidden" class="form-control" name="id" id="inputIdUpdateTable" placeholder="Id">
					      </div>				      
					      <div class="form-group">
					        <label for="inpuTitleUpdate">Title</label>
					        <input type="text" name="title" class="form-control" id="inpuTitleUpdate" placeholder="Please enter title">				         
					      </div>   
					      <div class="form-group">
					        <label for="inpuBodyUpdate">Body</label>
					        <textarea name="messageBody" id="inpuBodyUpdate" class="form-control"></textarea>				         
					      </div>				      

					      <div class="form-group">
					       <button type="submit" id="send_form" class="btn btn-success">Submit</button>
					      </div>					      
					    </form>
					</div>
			     </div>
			  </div>
			</div>
		</div>
</section>

<script type="text/javascript">
	
	$(document).ready(function() {					
		$('#confirmToUpdate').on('click', function(event) {
			event.preventDefault();
			
			var id = $(this).attr('href');

			// alert(213)
			$('#inputIdUpdateTable').attr('value', '');	
			$('#inputIdUpdateTable').attr('value', id);	
		});
		
		$('nav ul.pagination li a').toggleClass('page-link');

		$('nav ul.pager li:nth-child(1) a span').html('&laquo;');
		$('nav ul.pager li:nth-child(2) a span').html('&raquo;');		
		// $('nav ul.pager li a span').html('&laquo;');				
		
		$("#createAddformAjax").submit(function(e) {
		    e.preventDefault();
		});			
	});

</script>

<!-- Data table -->

<script type="text/javascript">

	var arrToUpdate = [];
	var arrToDelete = [];
	$(document).ready( function () {
		
		ajaxDataTable1();

		function ajaxDataTable1() {

			// $('#postTable').DataTable({	

			// });
			$('#postTable').DataTable({	
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select><option value=""></option></select>')
							// .appendTo($(column.footer()).empty()) - pwede ding ilagay sa footer ung filter/ Pwede din tanggalin ung .empty()
							// .appendTo("p")
							.appendTo($(column.header()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);
								column
									.search( val ? '^'+val+'$' : '', true, false)
									.draw();
							});

							column.data().unique().sort().each(function(d, j) {
								select.append('<option value="'+d+'">'+d+'</option>')
							});
					})
				},
				destroy: true,
				ordering: false,
				lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
				// processing : true,
        		// serverSide : true,	
        		// retrieve: true,
        		// paging: true,
        		// searching: true,
				ajax: {
					method: "post",
					url: "<?php echo base_url('/blog/fetchPost'); ?>"
				},
				columns : [ 
					{data : "id"}, 
		            {data : "title"}, 
		            {data : "body"}, 
		            {data : "slug"}, 
		            {data : "created_at"},
		            {data : "content"}	            
	            ]           		
			});

			var table = $('#postTable').DataTable();
			$('#postTable tbody').on('click', 'tr', function () {
				// $(this).toggleClass('selected');
				var data = table.row( this ).data();
				// console.log(data)
				arrToUpdate.pop();
				arrToUpdate.pop();
				arrToUpdate.pop();
				arrToUpdate.pop();
				arrToUpdate.push(data['id']);
				arrToUpdate.push(data['title']);
				arrToUpdate.push(data['body']);
				arrToUpdate.push(data['slug']);
				arrToDelete.pop();
				arrToDelete.push(data['id']);
				
				$('.updateUpperButton').removeClass('disabled');
				$('.deleteUpperButton').removeClass('disabled');
				// $(this).css({'background-color':'#343a40','color':'white'});
				
				if ( $(this).hasClass('selected') ) {
		            $(this).removeClass('selected');
		        }
		        else {
		            table.$('tr.selected').removeClass('selected');
		            $(this).addClass('selected');
		        }				
		        
		        // alert( 'You clicked on '+data['id']+'\'s row' );
		    } );	


		    $('#postTable tbody').on('click', 'button.getIdValueToUpdate', function () {			
				// var data = table.row( this ).data();	
				var data = $(this).attr('id');			
		        $('#inputIdUpdateTable').val(data);
		        // console.log(data)
		        // alert( 'You clicked on '+data['id']+'\'s row' );

		    } );

		    $('#postTable tbody').on('click', 'button.getIdValueToDelete', function () {			
				// var data = table.row( this ).data();	
				var data = $(this).attr('id');		
				$('#deletePost').attr('href', '/blog/delete/'+data);	
		    } );	
		}		
	});
	
	$('#postTable').DataTable({
		scrollY: 400,
		scrollX: true,
		scrollCollapse: true
		// paging: false

	});
	
	$('.updateUpperButton').on('click', function(event) {
		console.log(arrToUpdate);
		if ($(this).hasClass("disabled")) {
            event.stopPropagation()
        }else {
            $(this).removeClass("disabled");
        }

        $('#inputIdUpdateTable').val(arrToUpdate[0]);
        $('#inpuTitleUpdate').val(arrToUpdate[1]);
        $('#inpuBodyUpdate').val(arrToUpdate[2]);

        if ($('#exampleModalUpdate').hasClass("show")) {        	 
        	 $(this).removeClass("disabled");
        }else{
        	$(this).addClass("disabled");
        	$('.deleteUpperButton').addClass("disabled");
        	// $('#postTable tbody tr').removeClass('selected');
        	arrToUpdate = [];
        }

		arrToUpdate = [];
	});

	$('.deleteUpperButton').on('click', function(event) {
		console.log(arrToDelete);		
		if ($(this).hasClass("disabled")) {
            event.stopPropagation()
        }else {
            $(this).removeClass("disabled");
        }

     	$('#deletePostAjax').on('click', function() {
    	 	console.log(arrToDelete)
    	 	$.ajax({
		        url: "<?php echo base_url('/blog/deleteAjax/'); ?>",
		        type: "POST",
		        data: {id:arrToDelete},
		        dataType: "json",
		        success: function( response ) {
		        	console.log(response.success)  
		        	if (response.success) {
		        		fetchAllData(response);
		        	}else {
		        		arrToDelete.pop();
		        	}		        	
		        }
		      })
		      arrToDelete.pop();
    	 });    
        if ($('#exampleModalCenterDelete').hasClass("show")) {       	 
        	 $(this).removeClass("disabled");
        	 // $('#deletePost').attr('href', '/blog/deleteAjax/'+parseInt(arrToDelete));
        }else{
        	$(this).addClass("disabled");
        	$('.updateUpperButton').addClass("disabled");
        	// $('#postTable tbody tr').removeClass('selected');
        	// arrToDelete.pop();
        }        
	});

	// $('#postTable').DataTable( {
	//     paging: false
	// } );
	 
	// $('#postTable').DataTable( {
	//     destroy: true,
	//     searching: false
	// } );

</script>


<script>	
   if ($("#ajax_form").length > 0) {
      $("#ajax_form").validate({
      
    rules: {
      title: {
        required: true,
        maxlength: 255,
        minlength: 3,
      },
  
      // email: {
      //   required: true,
      //   maxlength: 50,
      //   email: true,
      // }, 
 
      messageBody: {
        required: true,
        maxlength: 255,
        minlength: 3,             
      },   
    },
    messages: {
        
      title: {
        required: "Please enter title",
        maxlength: "Maximum length of title is 255",
        minlength: "Minimum length of title is 3",
      },
      // email: {
      //   required: "Please enter valid email",
      //   email: "Please enter valid email",
      //   maxlength: "The email name should less than or equal to 50 characters",
      //   },      
     messageBody: {
        required: "Please enter body text",
        maxlength: "Maximum length of body is 255",
        minlength: "Minimum length of body is 3",
      },
         
    },
    submitHandler: function(form) {
      $('#send_form').html('Sending..');

      // name ung kinukuha nyang value
      console.log($('#ajax_form').serialize());

      $.ajax({
        url: "<?php echo base_url('/blog/updatePostsAjax'); ?>",
        type: "POST",
        data: $('#ajax_form').serialize(),
        dataType: "json",
        success: function( response ) {
            // console.log(response);
            fetchAllData(response);
            $('#send_form').html('Submit');
            $('#res_message_update').html(response.msg);
            $('#res_message_update').show();
            $('#res_message_update').removeClass('d-none');
 			
            document.getElementById("ajax_form").reset(); 
            setTimeout(function(){
            $('#res_message_update').hide();
            $('#res_message_update').html('');
            },90000);
        }
      });
    }
  })
}

if ($("#addPostAjax").length > 0) {
      $("#addPostAjax").validate({
      
    rules: {
      titleAjax: {
        required: true,
        maxlength: 255,
        minlength: 3,
      },
  
      // email: {
      //   required: true,
      //   maxlength: 50,
      //   email: true,
      // }, 
 
      bodyAjax: {
        required: true,
        maxlength: 255,
        minlength: 3,             
      },   
    },
    messages: {
        
      titleAjax: {
        required: "Please enter title",
        maxlength: "Maximum length of title is 255",
        minlength: "Minimum length of title is 3",
      },
      // email: {
      //   required: "Please enter valid email",
      //   email: "Please enter valid email",
      //   maxlength: "The email name should less than or equal to 50 characters",
      //   },      
     bodyAjax: {
        required: "Please enter body text",
        maxlength: "Maximum length of body is 255",
        minlength: "Minimum length of body is 3",
      },
         
    },
    submitHandler: function(form) {
      // event.preventDefault();
      $('#createAddformAjax').html('Sending..');

      // name ung kinukuha nyang value
      // console.log($('#addPostAjax').serialize());

      $.ajax({
        url: "<?php echo base_url('/blog/createPostsAjax'); ?>",
        type: "POST",
        data: $('#addPostAjax').serialize(),
        dataType: "json",
        success: function( response ) {  
        	fetchAllData(response);      	      
            $('#createAddformAjax').html('Submit');
            $('#res_message').html(response.msg);
            $('#res_message').show();
            $('#res_message').removeClass('d-none');
 
            document.getElementById("addPostAjax").reset(); 
            setTimeout(function(){
            $('#res_message').hide();
            $('#res_message').html('');
            },10000);
        }
      });
    }
  })
}

function fetchAllData(response) {
	// console.log(response)
	var table = $('#postTable').DataTable({	
		destroy: true,
		ordering: false,
		lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
		// paging: false,
        // searching: false,
        // processing : true,
     	// serverSide : true,	
     	retrieve: true,
		ajax: {
			method: "post",
			url: "<?php echo base_url('/blog/fetchPost'); ?>"
			// success: ajaxDataTable()
		},
		columns : [ 
			{data : "id"}, 
            {data : "title"}, 
            {data : "body"}, 
            {data : "slug"}, 
            {data : "created_at"},
            {data : "content"}	            
        ]           		
	});

	table.ajax.reload();
	var self = this;
	// $(self).removeClass('selected');
	// table.$('tr.selected').removeClass('selected');
	// var table = $('#postTable').DataTable();
	$('#postTable tbody').on('click', 'tr', function () {
		// $(this).toggleClass('selected');
		var data = table.row( this ).data();
		// console.log(data)
		arrToDelete.pop();
		arrToUpdate.pop();
		arrToUpdate.push(data['id']);
		arrToUpdate.push(data['title']);
		arrToUpdate.push(data['body']);
		arrToUpdate.push(data['slug']);
		arrToDelete.push(data['id']);
		
		$('.updateUpperButton').removeClass('disabled');
		$('.deleteUpperButton').removeClass('disabled');
		// $(this).css({'background-color':'#343a40','color':'white'});
		
		if ( $(this).hasClass('selected2') ) {
            $(this).removeClass('selected2');
        }else {
            table.$('tr.selected2').removeClass('selected2');
            $(this).toggleClass('selected2');
        }				
        
        // alert( 'You clicked on '+data['id']+'\'s row' );
    });	


    $('#postTable tbody').on('click', 'button.getIdValueToUpdate', function () {			
		// var data = table.row( this ).data();	
		var data = $(this).attr('id');			
        $('#inputIdUpdateTable').val(data);
        // console.log(data)
        // alert( 'You clicked on '+data['id']+'\'s row' );

    } );

    $('#postTable tbody').on('click', 'button.getIdValueToDelete', function () {			
		// var data = table.row( this ).data();	
		var data = $(this).attr('id');		
		$('#deletePost').attr('href', '/blog/delete/'+data);	
    } );	
}
</script>



