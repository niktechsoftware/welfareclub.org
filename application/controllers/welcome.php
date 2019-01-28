<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function iframe_footer()
	{
		$this->load->view('iframe_footer');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function boardOfMember()
	{
		$this->load->view('boardOfMember');
	}
	public function workarea()
	{
		$this->load->view('workarea');
	}
	public function aboutExam()
	{
		$this->load->view('aboutExam');
	}
	public function prise()
	{
		$this->load->view('prise');
	}
	public function branch()
	{
		$this->load->view('branch');
	}
	public function aabhar()
	{
		$this->load->view('aabhar');
	}
	public function applicationForm()
	{
		$this->load->view('applicationForm');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */