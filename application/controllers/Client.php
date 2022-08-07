<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	// function __construct()
	// {
	// 	parent::__construct();
	// 	($this->session->userdata('TOKEN')) ? null : redirect('Home/items');
	// }

	public function items()
	{
		$this->load->view('client_pages/header');
		$this->load->view('item/home');
		$this->load->view('client_pages/footer');
	}
	public function profile()
	{
		$this->load->view('client_pages/header');
		$this->load->view('client_pages/profile');
		$this->load->view('client_pages/footer');
	}
	public function calendar()
	{
		$this->load->view('client_pages/header');
		$this->load->view('client_pages/calendar');
		$this->load->view('client_pages/footer_calendar');
	}
	public function pawn_account()
	{
		$this->load->view('client_pages/header');
		$this->load->view('client_pages/pawn_account');
		$this->load->view('client_pages/footer');
	}
}
