<?php

class ProductModel extends CI_Model{


	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function insertProduct( $data, $pro_servertype,$tag){
		$this->db->trans_begin();
		$this->db->insert('nham_product', $data);
		$insert_id = $this->db->insert_id();
		
		$servecategories = array();
		$shopdata = array_unique($pro_servertype);
		for($i=0; $i< count($shopdata); $i++){
		
			$cateitem["serve_category_id"] = $shopdata[$i];
			$cateitem["pro_id"] = $insert_id;
			array_push($servecategories , $cateitem);
		}
		$this->db->insert_batch('nham_serve_cate_map_pro', $servecategories);
		
		
		$tag_map = array();
		$tagdata = array_unique($tag);
		for($i=0; $i< count($tagdata); $i++){
		
			$tagitem["tag_id"] = $tagdata[$i];
			$tagitem["pro_id"] = $insert_id;
			array_push($tag_map , $tagitem);
		}
		$this->db->insert_batch('nham_product_tag_map', $tag_map);
			
		if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				$response["is_insert"] = false;
				$response["message"] = "Transaction rollback!";
			}
			else
			{
				$this->db->trans_commit();
				$response["is_insert"] = true;
				$response["message"] = "success";
			}
			
			return $response;	
	}
	public function listProduct($setting){
	
		/*============ This doesn't support timezone ==============*/
	
	
	
		if(!isset($setting["row"])) $setting["row"] = 10;
		if(!isset($setting["page"])) $setting["page"] = 1;
		if(!isset($setting["whole_search"])) $setting["whole_search"] = "";
	
		$row = (int)$setting["row"];
		$page = (int)$setting["page"];
		$whole_search = $setting["whole_search"];
	
		if(!$row) $row = 10;
		if(!$page) $page = 1;
		if(!$whole_search) $whole_search = "";
		$limit = $row;
		$offset = ($row*$page)-$row;
	
	
		//TODO: update this query when it's a bigger app ---- support timezone method
		$sql = "SELECT p.pro_id,
					p.shop_id,
					TRIM(COALESCE(p.pro_image,'')) pro_image,
					p.shop_name_en,
					p.shop_name_kh,
					p.pro_name_en,
					p.pro_name_kh,
					p.pro_price,
					p.pro_promote_price,
					p.pro_made_duration,
				    p.pro_short_description,
				    p.pro_remark,
				    p.taste_id,
				    p.pro_view_count,
					p.pro_created_date,
					pro_status,
					ad.admin_id,
					ad.admin_name,
		 			FLOOR(100*(
						+(case when COALESCE(TRIM(shop_name_en),'') = '' then 0 else 1  end)
						+(case when COALESCE(TRIM(pro_image),'') = '' then 0 else 1  end)
						+(case when COALESCE(TRIM(pro_name_en),'') = '' then 0 else 1  end)
						+(case when COALESCE(TRIM(pro_price),'') = '' then 0 else 1  end)
						+(case when COALESCE(TRIM(pro_promote_price),'') = '' then 0 else 1  end)
						+(case when COALESCE(TRIM(pro_short_description),'') = '' then 0 else 1  end)
						+(case when COALESCE(TRIM(pro_remark),'') = '' then 0 else 1  end)
						+(case when (select count(*) from nham_taste where shop_id=p.taste_id) > 0 then 1 else 0 end )
						+9
	  				)/23) as data_complete
	
				FROM nham_product p
				LEFT JOIN nham_admin ad ON p.admin_id = ad.admin_id
				WHERE REPLACE(CONCAT_WS(p.shop_name_en,p.shop_name_kh,p.pro_name_en,p.pro_name_kh,ad.admin_name),' ','') LIKE REPLACE(?,' ','')
				LIMIT ? OFFSET ?";
	
		$query = $this->db->query($sql , array("%".$whole_search."%" ,$limit,$offset));
		$responsequery = $query->result();
	
		
		$countsetting["row"] = $row;
		$countsetting["whole_search"] = $whole_search;
	
		$response["total_page"] = (int)$this->totalProduct($countsetting)[0]->total_page;
		$response["total_record"] = $this->totalProduct($countsetting)[0]->total_record;
		$response["response_data"] = $responsequery;
	
		return $response;
	}
	public function totalProduct($countsetting){
	
		$row = $countsetting["row"];
		$sql = "SELECT count(*) as total_record,CASE WHEN count(*)% ? != 0 THEN count(*)/ ? +1
						ELSE count(*)/ ?
						END as total_page
				FROM nham_product p
				LEFT JOIN nham_admin ad ON p.admin_id = ad.admin_id
				WHERE REPLACE(CONCAT_WS(p.shop_name_en,p.shop_name_kh,p.pro_name_en,p.pro_name_kh,ad.admin_name),' ','') LIKE REPLACE(?,' ','')";
	
		$query = $this->db->query($sql, array($row, $row, $row, "%".$countsetting["whole_search"]."%"));
		$response = $query->result();
		return  $response;
	
	}
	public function getCountProduct(){
		
		$sql = "SELECT COUNT(CASE WHEN pro_status=1 THEN 1 ELSE NULL END ) as active_product,
				COUNT(CASE WHEN pro_status=0 THEN 1 ELSE NULL END ) as disactive_product,
				COUNT(pro_id ) as total_product
				FROM nham_product";
		$query = $this->db->query($sql);
		$product_data = $query->row();
	
		$response["product_data"] = $product_data;
		
		return $response;
	}
	public function listProductByShopId ($request){
		
		$status = (int)$request["pro_status"];
		$shop_id = (int)$request["shop_id"];
		$limit = (int)$request["row"];
		$page = (int)$request["page"];
			
		$offset = ($limit*$page)-$limit;
		
		if(isset($request["row_minus"])){				
			$row_minus = (int)$request["row_minus"];
			if( $row_minus > 0){
		
				$offset = $offset - $row_minus;
			}				
		}
		
		$params = array();
		$sql = "SELECT 
				pro_id,
				pro_name_en,
				pro_name_kh,
				pro_image,
				pro_price,
				COALESCE(TRIM(pro_promote_price),'') as pro_promote_price,
				pro_local_popularity,
				COALESCE(TRIM(pro_view_count),'0') as pro_view_count,
				pro_short_description,
				pro_created_date,
				pro_status
			FROM nham_product 
			WHERE shop_id = ? ";
		
		array_push($params, $shop_id);
		if($status == 0 || $status == 1){
			$sql .= " AND sh_img_status = ? ";
			array_push($params, $status);
		}
		$sql .=" ORDER BY pro_dis_order LIMIT ? OFFSET ? ";
		array_push($params, $limit,$offset);
		$query = $this->db->query($sql , $params);
		
		$response = $query->result();
		return $response;
		
	}
	
	public function countListProductByShopId($request){
		
		$status = (int)$request["pro_status"];
		$shop_id = (int)$request["shop_id"];
		$row = (int)$request["row"];
		
		$params = array();
		$sql = "SELECT
					count(*) as total_record,
					CASE WHEN count(*)% ? != 0 THEN count(*)/ ? +1 ELSE count(*)/ ? END as total_page
			FROM nham_product
			WHERE shop_id = ? ";
		
		array_push($params,$row ,$row, $row, $shop_id);
		if($status == 0 || $status == 1){
			$sql .= " AND sh_img_status = ? ";
			array_push($params, $status);
		}
		$query = $this->db->query($sql , $params);
		$response = $query->row();
		return $response;
		
	}
	
	function updateProductField($request){
	
		$response = array();
		$param = $request["param"];
		$value = $request["updated_value"];
		$pro_id = $request["pro_id"];
		
		$sql = "UPDATE nham_product SET ".trim($param)." = ? WHERE pro_id = ?";
	
		$update_effect = 0;
		try
		{
			$this->db->query($sql, array( $value, $pro_id ));
			$update_effect = $this->db->affected_rows();
		}
		catch( Exception $e )
		{
			$response["is_updated"] = false;
			$response["message"] = "Database Error!";
			return $response;
		}
	
		$response["is_updated"] = true;
		$response["message"] = "update successfully!";
		
		return $response;
	
	}
	
	function deleteProduct( $product_id ){
		
		$sql = "DELETE FROM nham_product WHERE pro_id = ? ";
		$this->db->query($sql , $product_id);
		$affected_row = $this->db->affected_rows();
		
		if($affected_row >0){
			return true;
		}else{
			return false;
		}
	}
	public function toggleProduct( $request ){
		
		$response = array();
		
		$status = $request["shop_status"];
		$shopid = $request["shop_id"];
		
		if($status != 0 && $status != 1){
			$response["is_updated"] = false;
			$response["message"] = "shop_status is invalid!";
			return  $response;
		}
		if(!$shopid){
			$response["is_updated"] = false;
			$response["message"] = "Product Id is invalid!";
			return  $response;
		}
		$this->db->trans_start();
		$sql = "UPDATE nham_product SET pro_status = ? WHERE pro_id = ?";
		$this->db->query($sql, array((int)$status, (int)$shopid));
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === FALSE)
		{
			$response["is_updated"] = false;
			$response["message"] = "update error!";
		}else{
			$response["is_updated"] = true;
			$response["message"] = "update success!";
		}
		return  $response;
		
	}
	public function getDefaultUpdateInfo( $request ){
		
		$sql = " SELECT     
					sh.shop_id,
					sh.shop_name_en,
					pro_id,
					pro_name_en,
					pro_name_kh,
					pro_price,
					pro_made_duration,
					pro_serve_type,
					COALESCE(TRIM(pro_promote_price),'') as pro_promote_price,
					pro_local_popularity,
					COALESCE(TRIM(pro_view_count),'0') as pro_view_count,
					pro_short_description,
					pro_description,
					pro_remark,
					pro_status

				FROM nham_product pr
				LEFT JOIN nham_shop sh on sh.shop_id = pr.shop_id
				WHERE pro_id  = ?";
		$query = $this->db->query($sql , array($request["product_id"]));
		
		$product_data = $query->row();
	//	$this->load->model("TagModel");
		//$tags = $this->TagModel->getTageByProId($request["product_id"]);
		
		$this->load->model("ServeCategoryModel");
		$shop_servecate = $this->ServeCategoryModel->getServeCategoryByProId($request["product_id"]);
		
	//	$shop_data->shop_social_media = json_decode($shop_data->shop_social_media);
		$response["default_data"]["product_data"] = $product_data;
	//	$response["default_data"]["tags"] = $tags;
		$response["default_data"]["shop_servecate"] = $shop_servecate;
		
		return $response;
		
	}
	public function getDefaultProduct( $product_id ){
		
		$sql = " SELECT     
					pro_id,
					pro_name_en,
					pro_name_kh,
					pro_price,
					pro_made_duration,
					pro_serve_type,
					COALESCE(TRIM(pro_promote_price),'') as pro_promote_price,
					pro_local_popularity,
					COALESCE(TRIM(pro_view_count),'0') as pro_view_count,
					pro_short_description,
					pro_description,
					pro_remark,
					pro_image,
					pro_status

				FROM nham_product
				WHERE pro_id  = ?";
		$query = $this->db->query($sql , array($product_id));
		$response = $query->result();
		return $response;
		
	}
	public function updateProductPrice($shopdata){
		
		$response = array();
		
		if(!isset($shopdata["nomalprice"])){
			$response["is_updated"] = false;
			$response["message"] = "nomalprice is invalid";
			return $response;
		}
		if(!isset($shopdata["promoteprice"])){
			$response["is_updated"] = false;
			$response["message"] = "promoteprice is invalid";
			return $response;
		}
		if(!isset($shopdata["product_id"])){
			$response["is_updated"] = false;
			$response["message"] = "product_id is invalid";
			return $response;
		}
		$nomalprice = $shopdata["nomalprice"];
		$promoteprice = $shopdata["promoteprice"];
		$product_id = $shopdata["product_id"];
		
		if($this->IsNullOrEmptyString($nomalprice)){
			$response["is_updated"] = false;
			$response["message"] = "nomalprice is invalid";
			return $response;
		}
		
		if($this->IsNullOrEmptyString($promoteprice)){
			$response["is_updated"] = false;
			$response["message"] = "promoteprice is invalid";
			return $response;
		}
		
		if($this->IsNullOrEmptyString($product_id)){
			$response["is_updated"] = false;
			$response["message"] = "SHOP_ID is invalid";
			return $response;
		}
		
		$updatedata = array($promoteprice, $nomalprice , (int)$product_id);
		$sql = "UPDATE nham_product SET pro_promote_price = ?, pro_price = ? WHERE pro_id = ?";
		$query = $this->db->query($sql , $updatedata);
		
		if($this->db->affected_rows() >0){
			$response["is_updated"] = true;
			$response["message"] = "update successfully!";
		}else{
			$response["is_updated"] = false;
			$response["message"] = "update error!";
		}
		return $response;
		
	}
		
	public function updateProductServeCateogry( $shopdata ){
		
		$this->db->trans_begin();
		$response = array();
		
		
		if(!isset($shopdata["product_id"])){
			$response["is_updated"] = false;
			$response["message"] = "product_id is invalid";
			return $response;
		}
		
		$product_id = (int)$shopdata["product_id"];
		
		if(count($shopdata["removeditem"]) > 0){
		//	for($i=0 ; $i<count($shopdata["removeditem"]); $i++){
				$this->load->model("ServeCateMapProModel");
				$this->ServeCateMapProModel->deleteServeCategoryMapProduct($shopdata["removeditem"], $product_id);
		//	}
		}
		
		if(count($shopdata["addeditem"]) > 0){
			$servecategories = array();
			$shopdata["addeditem"] = array_unique($shopdata["addeditem"]);
			for($i=0; $i< count($shopdata["addeditem"]); $i++){
				
				$cateitem["serve_category_id"] = $shopdata["addeditem"][$i];
				$cateitem["pro_id"] = $product_id;
				array_push($servecategories , $cateitem);
			}

			try
			{
				$this->db->insert_batch('nham_serve_cate_map_pro', $servecategories);
			}
			catch( Exception $e )
			{
				$response["is_updated"] = false;
				$response["message"] = "Database Error!";
				return $response;
				// on error
			}
			
		}
		
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			$response["is_updated"] = false;
			$response["message"] = "Transaction rollback!";
		}
		else
		{
			$this->db->trans_commit();
			$response["is_updated"] = true;
			$response["message"] = "success";
		}
		
		return $response;
		
	}
			
	public function updateProductTage( $shopdata ){
		
		$this->db->trans_begin();
		$response = array();
		
		
		if(!isset($shopdata["product_id"])){
			$response["is_updated"] = false;
			$response["message"] = "product_id is invalid";
			return $response;
		}
		
		$product_id = (int)$shopdata["product_id"];
		
		if(count($shopdata["removeditem"]) > 0){
		//	for($i=0 ; $i<count($shopdata["removeditem"]); $i++){
				$this->load->model("TagModel");
				$this->TagModel->deleteTageById($shopdata["removeditem"], $product_id);
		//	}
		}
		
		if(count($shopdata["addeditem"]) > 0){
			$tags = array();
			$shopdata["addeditem"] = array_unique($shopdata["addeditem"]);
			for($i=0; $i< count($shopdata["addeditem"]); $i++){
				
				$cateitem["tag_id"] = $shopdata["addeditem"][$i];
				$cateitem["pro_id"] = $product_id;
				array_push($tags , $cateitem);
			}

			try
			{
				$this->db->insert_batch('nham_product_tag_map', $tags);
			}
			catch( Exception $e )
			{
				$response["is_updated"] = false;
				$response["message"] = "Database Error!";
				return $response;
				// on error
			}
			
		}
		
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			$response["is_updated"] = false;
			$response["message"] = "Transaction rollback!";
		}
		else
		{
			$this->db->trans_commit();
			$response["is_updated"] = true;
			$response["message"] = "success";
		}
		
		return $response;
		
	}
	function IsNullOrEmptyString($variable){
		return (!isset($variable) || trim($variable)==='');
	}
	
}

?>