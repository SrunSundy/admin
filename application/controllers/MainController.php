<?php
	class MainController extends  CI_Controller{
		
		public function index(){
			$this->load->view('index');
		}
		
		public function dashboard(){
			$this->load->view('pages/dashboard');
		}
		
		public function category(){
			$this->load->view('pages/category');
		}
		
		public function comment(){
			$this->load->view('pages/comment');
		}
		
		public function post(){
			$this->load->view('pages/post');
		}
		
		public function product(){
			$this->load->view('pages/product');
		}
		
		public function addproduct(){
			$this->load->view('pages/addproduct');
		}
		
		public function addshop(){
			$this->load->view('pages/addshop');
		}
		
		public function user(){
			$this->load->view('pages/user');
		}
	}
?>