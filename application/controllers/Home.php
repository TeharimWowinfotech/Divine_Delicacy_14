<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

    public function About_us()
    {
        $this->load->view('about');
    }

    public function Contact_us()
    {
        $this->load->view('contact');
    }

    public function Product()
    {
        $this->load->view('products');
    }

    public function Product_details()
    {
        $this->load->view('product-details');
    }

    public  function Services()
    {
        $this->load->view('services');
    }
    public  function BtoB()
    {
        $this->load->view('B2B');
    }
    public  function BtoC()
    {
        $this->load->view('B2C');
    }
    public  function Consulting()
    {
        $this->load->view('consulting');
    }
    public  function ResearchDevelopment()
    {
        $this->load->view('ResearchDevelopment');
    }
}
