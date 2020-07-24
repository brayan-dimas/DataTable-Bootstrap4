<?php namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
	public function index()
	{
		$model = new BlogModel();
		// getPosts = model function to get all data
		$data['news'] = $model->getPosts();
		// return view('welcome_message');
		// echo 'This is pages class';

		// $data = second parameter data. It's important because it's the way to send data to template/view
		echo view('templates/header', $data);
		echo view('pages/home');
		echo view('templates/footer');
	}

	function showMe($page = 'home') {
		// echo  'This page is: '. $page;


		// 404 Page pag walang naka decklare na pinuntahang templates mag 404

		if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
			// Whooops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);			
		}


		// To view the template
		// No need to specify the php
		echo view('templates/header');
		echo view('pages/'.$page);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
