<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('ion_auth');
    }

    public function index()
	{
		$data['title'] = 'Untitled Project - Earn Experience in Web Development';

		$this->load->view('includes/header.php', $data);
		$this->load->view('home/index', $data);
		$this->load->view('includes/footer.php', $data);
	}

	public function dashboard()
	{
		$this->load->helper('url', 'date');
		
		$data['title'] = 'Dashboard - Untitled Project - Earn Experience in Web Development';

		$this->load->view('includes/header.php', $data);
		$this->load->view('home/dashboard', $data);
		$this->load->view('includes/footer.php', $data);
	}

	public function notes()
	{
		$data['title'] = 'Notes';

		$this->load->view('includes/header.php', $data);
		$this->load->view('home/notes');
	}
}
?>