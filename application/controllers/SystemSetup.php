<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SystemSetup extends CI_Controller
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

	function __construct()
	{
		parent::__construct();
		($this->session->userdata('TOKEN')) ? null : redirect('/');
	}

	public function dashboard()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/body');
		$this->load->view('template/footer');
	}

	public function user()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/user_management/user');
		$this->load->view('template/footer');
	}

	public function items()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/item_management/items');
		$this->load->view('template/footer');
	}

	public function items_category()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/item_management/items_category');
		$this->load->view('template/footer');
	}

	public function order_details()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/order_management/order_details');
		$this->load->view('template/footer');
	}

	public function transactions()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/transactions');
		$this->load->view('template/footer');
	}

	public function user_credentials()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/user_management/user_credentials');
		$this->load->view('template/footer');
	}

	public function client()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/client');
		$this->load->view('template/footer');
	}

	public function contract()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/contract_management/contract');
		$this->load->view('template/footer');
	}

	public function pawn()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/pawn_management/pawn');
		$this->load->view('template/footer');
	}

	public function pawn_payment()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/pawn_management/pawn_payment');
		$this->load->view('template/footer');
	}

	public function contract_category()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/contract_management/contract_category');
		$this->load->view('template/footer');
	}

	public function adminUser()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/user_management/adminUser');
		$this->load->view('template/footer');
	}
}
