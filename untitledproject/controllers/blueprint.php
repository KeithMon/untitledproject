<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blueprint extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('ion_auth');
    }

    public function index($ID = FALSE)
	{
		if($ID == FALSE)
		{
			redirect(); //to home page
		}

		$data['title'] = 'Blueprint Overview - Earn Experience in Web Development';
		$data['ID'] = $ID;

		$this->load->view('includes/header.php', $data);
		$this->load->view('includes/project_nav.php', $data);
		$this->load->view('blueprint/index', $data); //shows the blueprint "dashboard"
		$this->load->view('includes/project_sidebar.php', $data);
		$this->load->view('includes/footer.php', $data);
	}
	
     public function ux($ID = FALSE)
	{
		$data['title'] = 'Blueprint UX - Earn Experience in Web Development';
		$data['ID'] = $ID;

		$this->load->view('includes/header.php', $data);
		$this->load->view('includes/project_nav.php', $data);
		$this->load->view('blueprint/ux', $data);
		$this->load->view('includes/project_sidebar.php', $data);
		$this->load->view('includes/footer.php', $data);
	}

    public function ui($ID = FALSE)
	{
		$data['title'] = 'Blueprint UI - Earn Experience in Web Development';
		$data['ID'] = $ID;

		$this->load->view('includes/header.php', $data);
		$this->load->view('includes/project_nav.php', $data);
		$this->load->view('blueprint/ui', $data);
		$this->load->view('includes/project_sidebar.php', $data);
		$this->load->view('includes/footer.php', $data);
	}

    public function stack($ID = FALSE)
	{
		$data['title'] = 'Blueprint Stack - Earn Experience in Web Development';
		$data['ID'] = $ID;
		
		$this->load->view('includes/header.php', $data);
		$this->load->view('includes/project_nav.php', $data);
		$this->load->view('blueprint/stack', $data);
		$this->load->view('includes/project_sidebar.php', $data);
		$this->load->view('includes/footer.php', $data);
	}

}
?>