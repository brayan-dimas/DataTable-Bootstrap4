<?php namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Controller;

class Blog extends BaseController
{	

	// public function __construct()
	// {
	// 	parent::__construct();
	// }

	function post($slug) {
		
		// $i = null;

		// if (!$i) {
		// 	echo "walang laman";
		// 	die;
		// }
		// else {
		// 	echo "mayron";
		// 	die;
		// }

		// echo  'This page is: '. $page;
		$model = new BlogModel();
		// getPosts = model function to get all data
		$data['post'] = $model->getPosts($slug);

		// 404 Page pag walang naka decklare na pinuntahang templates mag 404
		// if (!is_file(APPPATH.'/Views/pages/'.$slug.'.php')) {
		// 	// Whooops, we don't have a page for that!
		// 	throw new \CodeIgniter\Exceptions\PageNotFoundException($slug);			
		// }

		// To view the template
		// No need to specify the php

		// $data = second parameter it's use to send data to template/view
		echo view('templates/header', $data);
		echo view('blog/post');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

	function create()
	{
		helper('form');
		$model = new BlogModel();

		if (!$this->validate([
			'title' => 'required|min_length[3]|max_length[255]',
			'body' => 'required|min_length[3]|max_length[255]'
		])) {

			echo view('templates/header');
			echo view('blog/create');
			echo view('templates/footer');
		
		}else {
			$model->save(
				[
					'title' => $this->request->getVar('title'),
					'body' => $this->request->getVar('body'),
					// url_title = to convert string to url
					'slug' => url_title($this->request->getVar('title')),
				]
			);

			// Initialization of session
			$session = \Config\Services::session();
			// 2 parameters = first is the name of the session & second is value of session
			$session->setFlashdata('success', 'New post was created!');

			// $data = [
			// 	'message' => 'Successfully added',
			// 	'data' => $data1,
			// 	'success' => true
			// ];

			// return $data;
			return redirect()->to('/blog/create/posts');
		}
	}

	
	function fetchPost() {

		$model = new BlogModel();
		$data['data'] = $model->getPosts();	

		$i = 0;
		// echo '<pre>';
		foreach ($data['data'] as $dataId) {			
			$arrAction = array(
				"content" => '<button type="button" id="'. $dataId['id'] .'" class="btn btn-warning getIdValueToUpdate" data-toggle="modal" data-target="#exampleModalUpdate">UPDATE</button>
				<button type="button" id="'. $dataId['id'] .'" class="btn btn-danger getIdValueToDelete" data-toggle="modal" data-target="#exampleModalCenterDelete">DELETE</button>'				
			);
			// $arrAction += array("delete" => '<button type="button" id="'. $dataId['id'] .'" class="btn btn-danger">DELETE</button>');
			$data['data'][$i]+= $arrAction;
			$i++;
		}
		// echo '</pre>';
		// echo 'length: ' . $i;
		// echo '<pre>';
		// 	print_r($data['data']);
		// echo '</pre>';
		// die;
		return $this->response->setJSON($data);
		// die;
	}

	function createNewPost() {

		$model = new BlogModel();

		$data['blog'] = $model->getPosts();	

		echo view('templates/header', $data);
		echo view('blog/create');
		echo view('templates/footer');
	}

	function delete($id) {
		// echo $id;
		// print_r($id);
		// die;
		$model = new BlogModel();

		// $model->delete($id);

		$model->delete(['id' => $id]);
		// $model->save();
		return redirect()->to('/');
	}

	function deleteAjax() {
		// $model = new BlogModel();

		// $model->delete($id);
		helper(['form', 'url']);
 
        $model = new BlogModel();
 
        $id = $this->request->getVar('id');

		$delete = $model->delete(['id' => implode($id)]);
		// $model->save();
		// // return redirect()->to('/');
		$data = array(
			'success' => true,
	        'delete' => $delete,
	        'msg' => "Successfully deleted",
		);
		
       	return $this->response->setJSON($data);

       	// die;

	}

	function update($id) {

		// echo $id;
		// die;
		// echo  'This page is: '. $page;
		// $model = new BlogModel();
		// getPostsById = model function to get all data
		// $data['post'] = $model->getPostsById($id);

		// Initialization of session
		$session = \Config\Services::session();
		// 2 parameters = first is the name of the session & second is value of session
		$session->setFlashdata('failed', $id);

		// echo view('templates/header', $data);
		echo view('templates/header');
		echo view('blog/update');
		echo view('templates/footer');		
	}

	public function updatePosts()
    {  
        helper(['form', 'url']);
 
        $model = new BlogModel();
 
        $id = $this->request->getVar('id');

        if (!$this->validate([
        	'title' => 'required|min_length[3]|max_length[255]',
        	'body' => 'required|min_length[3]|max_length[255]',
        ])) {
        	echo view('templates/header');
        	echo view('blog/update');
        	echo view('templates/footer');

        	// Initialization of session
			$session = \Config\Services::session();
			// 2 parameters = first is the name of the session & second is value of session
			$session->setFlashdata('failed', $id);
        }else {
        	$data = [
	            'title' => $this->request->getVar('title'),
	            'body'  => $this->request->getVar('body'),
				'slug' => url_title($this->request->getVar('title')),
	        ];
	 
	        $save = $model->update($id,$data);
	 
	        return redirect()->to( base_url('/') );
        }        
    }

    // Ajax create
	public function createPostsAjax()
    {  
        helper(['form', 'url']);
         
        // For ajax model
    	$db      = \Config\Database::connect();
     	$builder = $db->table('blog');
        // $model = new BlogModel();
 		
 		$id = $this->request->getVar('id');
        $data = array(
            'title' => $this->request->getVar('titleAjax'),
            // 'email'  => $this->request->getVar('email'),
            'body'  => $this->request->getVar('bodyAjax'),
            'slug'  => $this->request->getVar('titleAjax')
        );

       	$save = $builder->insert($data);

		// $builder->where(['id' => $id]);
		// $update =  $builder->update($data, ['id' => $id]);
 		
 		$model = new BlogModel();
		// getPosts = model function to get all data
		$dataValue['data'] = $model->getPosts();

       	$data = array(
	        'success' => true,
	        'data' => $dataValue,
	        'msg' => "Successfully added",
       	); 	
       	return $this->response->setJSON($data);       
    }

    // Ajax update
	public function updatePostsAjax()
    {  
        helper(['form', 'url']);
         
        // For ajax model update method
    	$db      = \Config\Database::connect();
     	$builder = $db->table('blog');

        $model = new BlogModel();
 		
 		$id = $this->request->getVar('id');
        $data = array(
            'title' => $this->request->getVar('title'),
            // 'email'  => $this->request->getVar('email'),
            'body'  => $this->request->getVar('messageBody'),
            'slug' => $this->request->getVar('title'),

        );

        // $fetchTable = $model->getPosts();

        // $fetchTable['data'] = $model->getPosts();	

		// $i = 0;
		// // echo '<pre>';
		// foreach ($fetchTable['data'] as $dataId) {			
		// 	$arrAction = array(
		// 		"content" => '<button type="button" id="'. $dataId['id'] .'" class="btn btn-warning getIdValueToUpdate" data-toggle="modal" data-target="#exampleModalUpdate">UPDATE</button>&nbsp;&nbsp;
		// 		<button type="button" id="'. $dataId['id'] .'" class="btn btn-danger getIdValueToDelete" data-toggle="modal" data-target="#exampleModalCenterDelete">DELETE</button>'				
		// 	);
		// 	// $arrAction += array("delete" => '<button type="button" id="'. $dataId['id'] .'" class="btn btn-danger">DELETE</button>');
		// 	$fetchTable['data'][$i]+= $arrAction;
		// 	$i++;
		// }
       	// $save = $builder->insert($data);

       	$builder->where(['id' => $id]);
		$update =  $builder->update($data, ['id' => $id]);
 		

       	$data = array(
	        'success' => true,
	        'update' => $update,
	        'msg' => "Successfully updated",
	        // 'data' => $fetchTable
       	); 		

       return $this->response->setJSON($data);
    }
}