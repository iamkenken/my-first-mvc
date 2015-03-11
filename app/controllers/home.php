<?php
class Home extends Controller{
	protected $user;

	public function __construct(){
		$this->user = $this->model('User');
	}

	public function index($user = ''){
		$data['name'] = $user;
		$this->view('home/index', $data);
	}
	
	public function create($name = '', $email = ''){
		$this->user->create([
			"name" => $name,
			"email" => $email
		]);
	}

}