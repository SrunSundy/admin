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
			$data['tags']=$this->select_options();
		
			$this->load->view('pages/addproduct',$data);
		}
		
		public function addshop(){			
			$this->load->view('pages/addshop');
		}
		
		public function listshop(){
			$this->load->view('pages/listshop');
		}
		
		public function userinfo(){				
			$this->load->view('pages/userinformation');
		}
		
		public function updateshop($tab = null, $shopid = null){
			
			$shopid = $this->input->post('shopid');
			if(!isset($shopid) || is_string ($shopid)){
				$shopid["shopid"] = 100;
				/* redirect('/MainController/addshop', 'refresh'); */
			}
					
			if(isset($tab)) $this->load->view('pages/upsh_'.$tab , $shopid);
			else $this->load->view('pages/upsh_overview', $shopid);
			
		}
		
		public function addshopaddress(){
			$this->load->view('pages/addshopaddress');
		}
		
		public function listshopcountry(){
			$this->load->view('pages/listshopcountry');
		}
		
		public function listshopcity(){
			$this->load->view('pages/listshopcity');
		}
		
		public function listshopdistrict(){
			$this->load->view('pages/listshopdistrict');
		}
		
		public function listshopcommune(){
			$this->load->view('pages/listshopcommune');
		}
				
		public function adduser(){
			$this->load->view('pages/adduser');
		}
		
		public function listuser(){
			$this->load->view('pages/listuser');
		}
		
		private function select_options($selected = array()){
			$output = '';
			foreach(json_decode(file_get_contents(base_url().'API/TagRestController/listAllTags'), true) as $item){
				$output.= '<option value="' . $item['tag_id'] . '"' . (in_array($item['tag_id'], $selected) ? ' selected' : '') . '>' . $item['tag_name'] . '</option>';
			}
    		return $output;
		}
	}
?>