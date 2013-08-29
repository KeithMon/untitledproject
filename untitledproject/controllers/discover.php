<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Discover extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('ion_auth');
    }

    public function projects()
	{
		$data['title'] = 'Discover Projects - Earn Experience in Web Development';

		$this->load->view('includes/header.php', $data);
		$this->load->view('discover/projects', $data);
		$this->load->view('includes/sidebar.php', $data);
		$this->load->view('includes/footer.php', $data);
	}

	public function people()
	{
		$data['title'] = 'Discover People - Untitled Project - Earn Experience in Web Development';

		$this->load->view('includes/header.php', $data);
		$this->load->view('discover/people', $data);
		$this->load->view('includes/sidebar.php', $data);
		$this->load->view('includes/footer.php', $data);
	}
}
?>