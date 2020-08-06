<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<!-- Validation jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
	 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

	<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<style type="text/css">
		body {		
		    font-family: 'Oswald', sans-serif !important;
		    font-size: 14px !important;
		    line-height: 1.42857143 !important;
		    color: #333 !important;
		    background-color:#f2f2f2 !important;
		}

		.errors {
		    color: red;
		}

		section {
		    margin-top: 3.7%;
		}
		
		.col-md-4, .col-sm-12{
			padding-bottom: 15px;			
		}
		
		table#postTable tbody tr:hover {
		    background-color: #343a40; 
		    color: white;
		}

		table#postTable tbody tr.selected {
		    background-color: #343a40; 
		    color: white;
		}

		table#postTable tbody tr.selected2 {
		    background-color: #343a40; 
		    color: white;
		}	
		
		/*.footer {*/
		    /*position: absolute;*/
		    /*position: fixed;
		    bottom: 0;
		    width: 100%;
		    height: 60px;
		    line-height: 60px;
		    background-color: #f5f5f5;
		    color: white;
		}

		span.text-muted.white {
		    color: white !important;
		}*/

		/*.jumbotron {
		    padding: 2rem 2rem !important;
		}*/
		
		label.error {
			color: red;
		}

		.fixed-bottom {
		    position: fixed;
		    right: 0;
		    bottom: 0;
		    left: 0;
		    z-index: 1030;
		    line-height: 0;
		    background-color: #343a40!important;
		    padding: 0 !important;
		    height: 0;
		    width: 100%;
		    padding: 1.8% !important;
		    /* padding: 0.5rem 1rem !important; */
		}

		ul ul {
			list-style-type: none !important;
		}
	</style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	  <a class="navbar-brand" href="/">Codeigniter</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/about">About us</a>
	      </li>
	     <!--  <li class="nav-item">
	        <a class="nav-link" href="/blog/post">Posts</a>
	      </li> -->
	      
	      <!-- <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Dropdown
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li> -->
	    </ul>
	    <ul class="navbar-nav">
	    	<li class="nav-item">
	        	<a href="/blog/create/posts" class="btn btn-outline-success">Create Posts</a>
	    	</li>
	    	<li class="nav-item">
	        	<a href="/logout" class="nav-link">Logout</a>
	    	</li>
	    </ul>
	    <!-- <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div> -->
  </div>
</nav>

