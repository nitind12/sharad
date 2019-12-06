<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}


	function contactus(){
		//-------------
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #000090'>Enquiry from [www.sdtlrc.co.in]:</h2> <br /><span style='font-size: 13px; color: #121212'>";
        $msg_ = $msg_ . $this->input->post('txtMessage') . "<br /><br />";
        $msg_ = $msg_ . "------------------------ <br />";
    
        $msg_ = $msg_ . "From - <br>" . $this->input->post('textName') . "<br />";
        $msg_ = $msg_ . $this->input->post('txtPhone') . "<br />";
        $msg_ = $msg_ . $this->input->post('txtEmail') . "<br /></span>";

        $from_ = $this->input->post('txtEmail');
        $name_ = $this->input->post('textName');

        $this->email->from($from_, $name_);
        $this->email->to('nitin.d12@gmail.com');

        $this->email->subject('Enquiry from Contact Page about : ' . $this->input->post('txtSubject'));
        $this->email->message($msg_);

        if ($this->email->send()) {
            $ret_data = "Thanks for your query. We will get back soon...";
        } else {
            $ret_data = "X: Server Error !! Try Again...";
        }
        //-------------
        echo $ret_data;
	}
}
