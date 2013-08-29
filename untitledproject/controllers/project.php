<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('ion_auth');
    }

    public function index($ID = FALSE)
	{
		$logged_in = TRUE;

		if($ID === FALSE)
		{
			redirect(); //to home page
		}

		if(!$logged_in)
		{
			$data['title'] = 'Project Overview - Earn Experience in Web Development';
			
			$this->load->view('includes/header.php', $data);
			$this->load->view('project/overview', $data);
			$this->load->view('includes/footer.php', $data);
		}

		if($logged_in)
		{
			$data['title'] = 'Project Overview - Earn Experience in Web Development';
			$data['ID'] = $ID;

			$this->load->view('includes/header.php', $data);
			$this->load->view('includes/project_nav.php', $data);
			$this->load->view('project/overview', $data);
			$this->load->view('includes/project_sidebar.php', $data);
			$this->load->view('includes/footer.php', $data);
		}
	}

	public function create()
	{
		$data['title'] = 'Create a Project - Earn Experience in Web Development';

		$this->load->view('includes/header.php', $data);
		$this->load->view('project/create', $data);
		$this->load->view('includes/footer.php', $data);
	}

}
?>