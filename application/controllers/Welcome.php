<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$getfile = file_get_contents(base_url('/public/people.json'));
		$data['jsonfile'] = json_decode($getfile);
		$this->load->view('list',$data);
	}

	public function insert() {
		if ( !empty($_POST)) {
			// post values
			$fname  = $this->input->post('fname');
			$lname  = $this->input->post('lname');
			$age    = $this->input->post('age');
			$gender = $this->input->post('gender');

			$file = file_get_contents(base_url('/public/people.json'));
			$data = json_decode($file, true);
			$data["records"] = array_values($data["records"]);
			array_push($data["records"], $_POST);
			file_put_contents("public/people.json", json_encode($data));
			redirect('welcome');
		} else {
			$this->load->view('insert');
		}
	}

	public function update($id = null) {
if ($id != null) {
	$data['id'] = $id;
	$getfile = file_get_contents(base_url('/public/people.json'));
	$jsonfile = json_decode($getfile, true);
	$jsonfile = $jsonfile["records"];
	$data['jsonfile'] = $jsonfile[$id];
	$this->load->view('update',$data);
}

if (isset($_POST["id"])) {
	$id = (int) $_POST["id"];
	$getfile = file_get_contents(base_url('/public/people.json'));
	$all = json_decode($getfile, true);
	$jsonfile = $all["records"];
	$jsonfile = $jsonfile[$id];

	$post["fname"] = isset($_POST["fname"]) ? $_POST["fname"] : "";
	$post["lname"] = isset($_POST["lname"]) ? $_POST["lname"] : "";
	$post["age"] = isset($_POST["age"]) ? $_POST["age"] : "";
	$post["gender"] = isset($_POST["gender"]) ? $_POST["gender"] : "";



	if ($jsonfile) {
		unset($all["records"][$id]);
		$all["records"][$id] = $post;
		$all["records"] = array_values($all["records"]);
		file_put_contents("public/people.json", json_encode($all));
	}
	redirect(base_url('welcome'));
}
	}

	public function delete($id) {
		if ($id != null) {
			$all = file_get_contents(base_url('/public/people.json'));
			$all = json_decode($all, true);
			$jsonfile = $all["records"];
			$jsonfile = $jsonfile[$id];

			if ($jsonfile) {
				unset($all["records"][$id]);
				$all["records"] = array_values($all["records"]);
				file_put_contents("public/people.json", json_encode($all));
			}
			redirect(base_url('welcome'));
		}
	}
}
