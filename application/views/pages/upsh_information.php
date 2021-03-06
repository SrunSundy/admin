<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base target="_blank" />
    <title>update shop info | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop-input.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/css/nhamslider.css">
 
	 
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
  
    <input type="hidden" id="shop_id" value="<?php echo $shop_id ?>"/>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <input type="hidden" id="dis_img_path" value="<?php echo DIS_IMAGE_PATH ?>"/>
    <div class="shop-event-wrapper" >	
		
     	<div  class="tab-wrapper">	       	 				
	       	 <div class="tab-header col-lg-12">
	       	 	<p class="tab-intro-text"><i class="fa fa-book" aria-hidden="true"></i><span>Information</span></p>
	       	 </div>
	       	 <div class="tab-body col-lg-12">
	       	 	<div class="row">
		       	 	<div class="col-lg-7 col-sm-7">
		       	 		<div class="row">
		       	 		
			       	 		<div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">BRANCH</p>
			       	 			<div class="shop-info-wrapper">			       	 				
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<p class="shop-info wordwrap" id="dis-branch"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 						
				       	 					<div class="shop-info-edit-btn branch pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 					<div class="shop-update-loading pull-right">
			       	 							<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
			       	 						</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
				       	 				
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>	
			       	 							       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 nham-dropdown-wrapper">
					                		<div class="row">
					                			<div class="selected-dropdown">
					                    		   <input id="branchname" type="text" class="form-control input nham-dropdown-inputbox "  placeholder="Search branch ">
					                    	       <input type="hidden" class="selectedid" id="selectedbranch"/>
					                    	    </div>
					                    		<div class="nham-dropdown-detail"  >
					                    			<div class="nham-dropdown-result-wrapper">
					                    				<div id="display-result" class="display-result-wrapper" style="min-height:35px;">                  					
					                    				</div>   								
					                  				</div>
					                  				<div id="display-searching-text" style="display:none;">
					                  					<div  class="nham-dropdown-noresult">
															<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
																Searching "<span id="text-search-dis1"></span>" has no Result!</p>
														</div>
														<div class="nham-dropdown-question">	
															<p>Do you want to register "<span id="text-search-dis2"></span>" as a new branch?</p>
														</div>
					                  				</div>					                  				
					                  				<div id="nham-dropdown-footer" class="nham-dropdown-result-footer" align="center">
					                  					<button class="btn nhamey-btn" id="yesbranch">Yes</button>
					                  				</div>
					                  			</div>
					                    	</div>					                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn " id="save-branch">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 		</div>
			       	 		
			       	 		<div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">SHOP'S NAME</p>
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">(ENG)</span><p class="shop-info wordwrap" id="dis-eng-name"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopengname" class="form-control insert-value" placeholder="shop name in english">
			       	 						</div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="shop_name_en"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 			
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">(KHM)</span><p class="shop-info wordwrap" id="dis-kh-name"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopkhname" class="form-control insert-value" placeholder="shop name in khmer">
			       	 					    </div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">					                 		
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="shop_name_kh"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			 </div>
			       	 		  </div>
			       	 		  
			       	 		  <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">NHAM24 DELIVERY</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " style="display: inline;" id="is_delivery"></p> 
					       	 					
					       	 				</div>
					       	 				<div class="div-right" >
					       	 					<div class="shop-info-edit-btn pull-right">
					       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 					</div>
					       	 				</div>
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 				
				       	 				<div style="clear:both;"></div>				       	 				
				       	 				<div class="save-shop-info-box">			       	 				
				       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 						<div class="row">
				       	 						      <div>
                        			                       <label class="switch left-div">
                                              				<input class="toggleshop" type="checkbox" id="nham24delivery" >
                                              				<div class="slider"></div>
                                            			   </label>
                    			                      </div>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="is_delivery"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn deliveryNham24">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		  
			       	 		  <div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">SHOP'S SERVE-CATEGORY</p>
			       	 			<div class="shop-info-wrapper">			       	 				
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<div class="serve-category-wrapper" id="serve-category-wrapper">
				       	 					
				       	 					</div>				       	 				
				       	 				</div>
				       	 				<div class="div-right" >
				       	 						
				       	 					<div class="shop-info-edit-btn serve-category pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 					<div class="shop-update-loading pull-right">
			       	 							<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
			       	 						</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
				       	 				
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>	
			       	 							       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">			       	 						
				       	 						<div class="form-group "> 							                     
								                     <div class=" col-sm-12 nham-dropdown-wrapper">
								                		<div class="row">
								                			<div class="selected-dropdown" id="servecategory_selected_dropdown" style="position:relative;">
								                			
									                			<div class="icon-input-wrapper" style="width:33px;height:28px;position:absolute;top:0;">
									                				<img class="icon-input" id="servecategoryicon"  src="<?php echo base_url() ?>assets/nhamdis/img/servecategory.png" class="selected_icon"/>
									                				<input type="hidden" class="default_img_src" value="<?php echo base_url() ?>assets/nhamdis/img/servecategory.png"/>				 
									                			</div>
									                			
												                <input style="padding:4px 4px 4px 28px;" id="servecategoryname" type="text" class="form-control nham-dropdown-inputbox-multi"  placeholder="Search or Select for shop type">
												                
												                <div class="error-selected-result">
												                	<p>ITEM IS SELECTED!</p>
												                </div>
												                <div class="serve-category-result" id="serve-categories">
												                	
												                	
												                </div>						                  
								                    	       <!--  <input type="hidden" class="selectedid" id="selectedservecategory"/> -->
								                    	    </div>
								                    		<div class="nham-dropdown-detail"  >
								                    			<div class="nham-dropdown-result-wrapper" id="servecate-dropdown-result-wrapper">
								                    				<input type="hidden" value="selected-category-box1"/>
								                    				<div id="display-result-servecategory" class="display-result-wrapper">
								                    					
								                    				</div>		       				
								                  				</div>
								                  				
								                  				<div id="display-searching-text_servecategory" style="display:none;">
								                  					<div  class="nham-dropdown-noresult">
																		<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
																			Searching "<span id="text-search-servecategory-dis1"></span>" has no Result!</p>
																	</div>
																	<div class="nham-dropdown-question">	
																		<p>Do you want to register "<span id="text-search-servecategory-dis2"></span>" as a new shop type?</p>
																	</div>
								                  				</div>
								                  				
								                  				<div id="nham-dropdown-footer-servecategory" class="nham-dropdown-result-footer" align="center">
								                  					<button class="btn nhamey-btn" id="yesservecategory">Yes</button>
								                  				</div>
								                  			 </div>
								                    	   </div>	
								                    		                    	
								                  		 </div>
							                         </div>
						                         </div>		       	 										                							                    	
					                  	    </div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
						                  		<div class="row pull-right">
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-serve-category nham-btn">save</button>
						                  		</div>
						                  	</div>
					                  		<div style="clear:both;"></div>
			       	 					   </div>		       	 							       	 				
			       	 					</div>			       	 			
			       	 		  		</div>
			       	 		  		
			       	 		  		<div class="col-lg-12 col-sm-12 update-info-box">
					       	 			<p class="update-title">SHOP'S FACILITY</p>
					       	 			<div class="shop-info-wrapper">			       	 				
					       	 				<div class="info-edit-wrapper">
						       	 				<div class="div-left">
						       	 					<div class="facility-wrapper" id="facility-wrapper">
						       	 					
						       	 					</div>				       	 				
						       	 				</div>
						       	 				<div class="div-right" >
						       	 						
						       	 					<div class="shop-info-edit-btn facility pull-right">
						       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
						       	 					</div>
						       	 					<div class="shop-update-loading pull-right">
					       	 							<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					       	 						</div>
						       	 				</div>
						       	 				<div style="clear:both;"></div>	
						       	 				
					       	 				</div>			       	 				
					       	 				<div style="clear:both;"></div>	
					       	 							       	 				
					       	 				<div class="save-shop-info-box">			       	 				
					       	 					
					       	 				   <div class="col-lg-12 col-sm-12 input-wrapper">	
					       	 						<div class="row">			       	 												       	 						
						       	 					   <div class="form-group "> 
								                        
									                     <div class=" col-sm-12 nham-dropdown-wrapper">
									                		<div class="row">
									                			<div class="selected-dropdown" style="position:relative;">
									                			
										                			<div class="icon-input-wrapper" style="width:33px;height:28px;position:absolute;top:0;">
										                				<img class="icon-input" id="shopfacilityicon"  src="<?php echo base_url() ?>assets/nhamdis/img/service.png" class="selected_icon"/>
										                				<input type="hidden" class="default_img_src" value="<?php echo base_url() ?>assets/nhamdis/img/service.png"/>				 
										                			</div>
										                			
													                <input style="padding:4px 4px 4px 28px;" id="shopfacilityname" type="text" class="form-control nham-dropdown-inputbox-multi"  placeholder="Search or Select for shop type">
													                
													                <div class="error-selected-result">
													                	<p>ITEM IS SELECTED!</p>
													                </div>
													                <div class="serve-category-result" id="shop-facilities">
													                	
													                	
													                </div>						                  
									                    	       <!--  <input type="hidden" class="selectedid" id="selectedservecategory"/> -->
									                    	    </div>
									                    		<div class="nham-dropdown-detail"  >
									                    			<div class="nham-dropdown-result-wrapper">
									                    				<input type="hidden" value="selected-category-box2"/>
									                    				<div id="display-result-shopfacility" class="display-result-wrapper">
									                    					
									                    				</div>		       				
									                  				</div>
									                  				
									                  				<div id="display-searching-text_shopfacility" style="display:none;">
									                  					<div  class="nham-dropdown-noresult">
																			<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
																				Searching "<span id="text-search-shopfacility-dis1"></span>" has no Result!</p>
																		</div>
																		<div class="nham-dropdown-question">	
																			<p>Do you want to register "<span id="text-search-shopfacility-dis2"></span>" as a new shop type?</p>
																		</div>
									                  				</div>
									                  				
									                  				<div id="nham-dropdown-footer-shopfacility" class="nham-dropdown-result-footer" align="center">
									                  					<button class="btn nhamey-btn" id="yesshopfacility">Yes</button>
									                  				</div>
									                  			</div>
									                    	</div>										                    			                    	
									                  	</div>
								                   </div>						       	 						
								                </div>		       	 										                							                    	
							                 </div>
								             <div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
								                 <div class="row pull-right">
								                  	<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
								                  	<button type="button" class="btn btn-default update-facility nham-btn">save</button>
								                  </div>
								             </div>
							                 <div style="clear:both;"></div>
					       	 			</div>		       	 							       	 				
					       	 		</div>			       	 			
					       	 	</div>
					       	 	
					       	 	<div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">SHOP CAPACITY</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " style="display: inline;" id="shop-capacity"></p> 
					       	 					<span class="wordwrap" id="shop-capacity-num" style="display: inline;font-style: italic;font-size: 12px;color: #BDBDBD;"> PEOPLE</span>
					       	 				</div>
					       	 				<div class="div-right" >
					       	 					<div class="shop-info-edit-btn pull-right">
					       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 					</div>
					       	 				</div>
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 				
				       	 				<div style="clear:both;"></div>				       	 				
				       	 				<div class="save-shop-info-box">			       	 				
				       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 						<div class="row">
				       	 						     <input type="text" id="shopcapacity" class="form-control insert-value" placeholder="number of customer">
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="shop_capacity"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
					       	 	
					       	 	<div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">SHOP'S SERVE-TYPE</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap" id="shop-serve-type"></p>
					       	 				</div>
					       	 				<div class="div-right" >
					       	 					<div class="shop-info-edit-btn pull-right">
					       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 					</div>
					       	 				</div>
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 				
				       	 				<div style="clear:both;"></div>				       	 				
				       	 				<div class="save-shop-info-box">			       	 				
				       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 						<div class="row">
				       	 						    <select class="form-control insert-value" style="width: 100%;" id="shopservetype">
								                      <option selected="selected" value="FOOD">Food</option>
								                      <option value="DRINK">Drink</option>
								                    
								                    </select>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="shop_serve_type"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		    
			       	 		    <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">SHORT DESCRIPTION</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " id="shop-short-description"></p>
					       	 				</div>
					       	 				<div class="div-right" >
					       	 					<div class="shop-info-edit-btn pull-right">
					       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 					</div>
					       	 				</div>
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 				
				       	 				<div style="clear:both;"></div>				       	 				
				       	 				<div class="save-shop-info-box">			       	 				
				       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 						<div class="row">
				       	 						    <textarea id="shopshortdes" class="form-control insert-value" rows="3" placeholder="describe shortly about the shop" style="resize:none;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="shop_short_description"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		  
			       	 		    <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">DESCRIPTION</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " id="shop-description"></p>
					       	 				</div>
					       	 				<div class="div-right" >
					       	 					<div class="shop-info-edit-btn pull-right">
					       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 					</div>
					       	 				</div>
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 				
				       	 				<div style="clear:both;"></div>				       	 				
				       	 				<div class="save-shop-info-box">			       	 				
				       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 						<div class="row">
				       	 						    <textarea id="shopdes" class="form-control insert-value" rows="3" placeholder="describe briefly about the shop"  style="resize:vertical;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="shop_description"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		   
			       	 		    <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">REMARK</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " id="shop-remark"></p>
					       	 				</div>
					       	 				<div class="div-right" >
					       	 					<div class="shop-info-edit-btn pull-right">
					       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 					</div>
					       	 				</div>
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 				
				       	 				<div style="clear:both;"></div>				       	 				
				       	 				<div class="save-shop-info-box">			       	 				
				       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 						<div class="row">
				       	 						     <textarea id="shopremark" class="form-control insert-value" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="shop_remark"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		  			       	 		  			       	 		  			       	 					       	 		
		       	 		</div>
		       	 		
		       	 	</div>
		       	 	
		       	 	
		       	 	<div class="col-lg-5 col-sm-5" >
		       	 	   <div class="row">
		       	 		 <div class="col-lg-12 col-sm-12 update-info-box">
				       	 	<p class="update-title">WORKING TIME</p>
				       	 	<div class="shop-info-wrapper">			       	 			
				       	 		<div class="info-edit-wrapper">
					       	 		<div class="div-left">
					       	 			<p class="shop-info wordwrap"><span id="open-time"></span> - <span id="close-time"></span></p>
					       	 		</div>
					       	 		<div class="div-right" >
					       	 			<div class="shop-info-edit-btn working-time pull-right">
					       	 				<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 			</div>
					       	 		</div>
					       	 		<div style="clear:both;"></div>	
				       	 		</div>			       	 				
				       	 		<div style="clear:both;"></div>				       	 				
				       	 		<div class="save-shop-info-box">			       	 				
				       	 			<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 				<div class="row">
				       	 					  <div class="bootstrap-timepicker form-group">
							                    <div class="form-group">
							                     
							                      <input id="shopopentime" placeholder="start time" type="text" class="form-control timepicker" value="9:00">			                      
							                    </div><!-- /.form group -->
							                  </div>
							                  
							                  <div class="bootstrap-timepicker">
							                    <div class="form-group">
							                    
							                      <input id="shopclosetime" placeholder="end time" type="text" class="form-control timepicker" value="21:00">			                      
							                    </div><!-- /.form group -->
							                  </div>
				       	 				</div>				                							                    	
						            </div>
						            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                <div class="row pull-right">
						                   <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                   <button type="button" class="btn btn-default update-shop-working-time nham-btn">save</button>
						                </div>
						            </div>
						            <div style="clear:both;"></div>
				       	 		</div>		       	 							       	 				
				       	 	</div>				       	 				       	 		       	 							       	 			
			       	 	</div>
			       	 	
			       	 	<div class="col-lg-12 col-sm-12 update-info-box">
				       	 	<p class="update-title">WORKING DAY</p>
				       	 	<div class="shop-info-wrapper">			       	 			
				       	 		<div class="info-edit-wrapper">
					       	 		<div class="div-left">
					       	 			<div id="dis-working-day">
					       	 				
					       	 			</div>
					       	 			
					       	 		</div>
					       	 		<div class="div-right" >
					       	 			<div class="shop-info-edit-btn  pull-right">
					       	 				<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 			</div>
					       	 		</div>
					       	 		<div style="clear:both;"></div>	
				       	 		</div>			       	 				
				       	 		<div style="clear:both;"></div>				       	 				
				       	 		<div class="save-shop-info-box">			       	 				
				       	 			<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 				<div class="row">
				       	 					<div class="form-group" style="overflow:hidden"  >
						                      	<div class="col-lg-12">
						                      		<div class="row">
								                     
									                  <div style="float:left;">
										                  <div class="form-group">
										                    	  <div class="nham-control-group">
																    <label class="nham-control nham-control--checkbox">All
																      <input type="checkbox"  value="0" id="allday"/>
																      <div class="nham-control__indicator"></div>
																    </label>
																  </div>			                   
										                  </div>
									                  </div>
									                  
									                  <div style="clear:both;"></div>
									                 </div>
								                  </div>
								                  <div class="col-lg-12" style="margin-bottom:20px;;margin-top:-10px;">
								                  	<div class="row">
									                   					                    
									                     <div class="col-lg-12 div-top-gap">
															  <label class="nham-control nham-control--checkbox">Monday
															    <input type="checkbox"  id="mon" value="1"  class="work-day"/>
															    <div class="nham-control__indicator"></div>
															 </label>
														</div>	
														<div class="col-lg-12 div-top-gap">
															  <label class="nham-control nham-control--checkbox">Tuesday
															    <input type="checkbox"  id="tue" value="2"  class="work-day"/>
															    <div class="nham-control__indicator"></div>
															 </label>
														</div>	
														<div class="col-lg-12 div-top-gap">
															  <label class="nham-control nham-control--checkbox">Wednesday
															    <input type="checkbox" id="wed" value="3"  class="work-day"/>
															    <div class="nham-control__indicator"></div>
															 </label>
														</div>	
														<div class="col-lg-12 div-top-gap">
															  <label class="nham-control nham-control--checkbox">Thursday
															    <input type="checkbox"  id="thur" value="4"  class="work-day"/>
															    <div class="nham-control__indicator"></div>
															 </label>
														</div>	
														<div class="col-lg-12 div-top-gap">
															  <label class="nham-control nham-control--checkbox">Friday
															    <input type="checkbox"  id="fri" value="5"  class="work-day"/>
															    <div class="nham-control__indicator"></div>
															 </label>
														</div>	
														<div class="col-lg-12 div-top-gap">
															  <label class="nham-control nham-control--checkbox">Saturday
															    <input type="checkbox"  id="sat" value="6"  class="work-day"/>
															    <div class="nham-control__indicator"></div>
															 </label>
														</div>	
														<div class="col-lg-12 div-top-gap">
															  <label class="nham-control nham-control--checkbox">Sunday
															    <input type="checkbox"  id="sun" value="7"  class="work-day"/>
															    <div class="nham-control__indicator"></div>
															 </label>
														</div>	
									                    					                    
								                    </div>
							                  	  </div>	                      
						                      </div>
				       	 				</div>				                							                    	
						            </div>
						            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                <div class="row pull-right">
						                   <input type="hidden" class="update-param" value="shop_working_day"/>
						                   <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                   <button type="button" class="btn btn-default working-day update-shop-save nham-btn">save</button>
						                </div>
						            </div>
						            <div style="clear:both;"></div>
				       	 		</div>		       	 							       	 				
				       	 	</div>				       	 				       	 		       	 							       	 			
			       	 	</div>
			       	 	
			       	 	
			       	 	<div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">CONTACT</p>
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">PHONE</span><div class="shop-info wordwrap" id="shop-phone"></div>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn phone pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <div class="input-group">			                      
							                      <input type="text" class="form-control inputmaskphone" id="shop_phonenum" placeholder="shop phone">
							                      <div class="input-group-addon nham-append-data">
							                        <i class="fa fa-plus"></i>
							                      </div>
							                    </div><!-- /.input group -->
							                  	 <div class="phone-add-result" id="phone-add-result">							                    	                  	
							                    </div>
			       	 						</div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="shop_phone"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-save phone nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 			
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">EMAIL</span><p class="shop-info wordwrap" id="shop-email"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="" class="form-control insert-value" placeholder="shop email">
			       	 					    </div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">					                 		
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="shop_email"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			 </div>
			       	 		  </div>
			       	 		  
			       	 		  <div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">SOCIAL MEDIA</p>
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text"><i class="fa fa-facebook-square" aria-hidden="true"></i> FACEBOOK</span>
				       	 					<p class="shop-info wordwrap" id="shop-facebook"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopengname" class="form-control insert-value" placeholder="facebook's link">
			       	 						</div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="facebook"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-media-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 			
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text"><i class="fa fa-google-plus-square" aria-hidden="true"></i> GOOGLE-PLUS</span>
				       	 					<p class="shop-info wordwrap" id="shop-googleplus"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopkhname" class="form-control insert-value" placeholder="google-plus's link">
			       	 					    </div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">					                 		
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="google_plus"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-media-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			 </div>
			       	 			 
			       	 			 <div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text"><i class="fa fa-twitter-square" aria-hidden="true"></i> TWITTER</span>
				       	 					<p class="shop-info wordwrap" id="shop-twitter"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopengname" class="form-control insert-value" placeholder="twitter's link">
			       	 						</div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="twitter"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-media-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 			
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text"><i class="fa fa-instagram" aria-hidden="true"></i> INSTAGRAM</span>
				       	 					<p class="shop-info wordwrap" id="shop-instagram"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopkhname" class="form-control insert-value" placeholder="intagram's link">
			       	 					    </div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">					                 		
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="instagram"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-media-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			 </div>
			       	 			 
			       	 		  </div>
			       	 	</div>
		       	 	</div>	
		       	 						
	       	 	</div>
	       	 </div>
	    </div>
	       	 				
    </div>
    
    
     
    
    

    <?php include 'imports/scriptimport.php'; ?>
    
    <script>

	var servecatearr = [];
	var servecatearrdelete = [];

	var facilityarr = [];
	var facilityarrdelete = [];

	var g_shop_opening_time = "";
	var g_shop_close_time = "";

	
    
	var isclickbranch = false;
	var isclickservecategory = false;
	var isclickfacility = false;
    $(document).on("click",".shop-info-edit-btn", function(){
    	
		$(this).focus();
        if($(this).hasClass("edit-active")){
        	$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideUp(100);
        	$(this).removeClass("edit-active");

        	if($(this).hasClass("serve-category")){
        		$(".close-default-item").hide();
        	}

        	if($(this).hasClass("facility")){
        		$(".close-default-facility-item").hide();
        	}

        	if($(this).hasClass("phone")){
				$("i.delete-phone").hide();
            }
        	
        }else{
            if($(this).hasClass("working-time")){
                
            	$("#shopopentime").val(g_shop_opening_time);
            	$("#shopclosetime").val(g_shop_close_time);
            }

            if($(this).hasClass("phone")){
				$("i.delete-phone").show();
            }
            
        	if($(this).hasClass("branch")){
        		
            	if(!isclickbranch){
            		$(this).siblings(".shop-update-loading").show();
            		loadBranch(this, function(obj){ 
            			$(obj).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);
                		$(obj).addClass("edit-active");           			
                		isclickbranch = true;
                		setTimeout(function(){top.resizeIframe();},150);
                	});
             
                }else{
                	$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
                 	$(this).addClass("edit-active");
                }
                return;        	    		
            }
        	else if($(this).hasClass("serve-category")){

				if(!isclickservecategory){
					$(this).siblings(".shop-update-loading").show();
					loadServeCategory(this, function(obj){
						$(obj).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);
                		$(obj).addClass("edit-active");           			
                		isclickservecategory = true;
                		$(".close-default-item").show();
                		setTimeout(function(){top.resizeIframe();},150);
					});
				}else{
					$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
			        $(this).addClass("edit-active");
					$(".close-default-item").show();
				}	
				return;
            }
        	else if($(this).hasClass("facility")){

        		if(!isclickfacility){
					$(this).siblings(".shop-update-loading").show();
					loadShopFacility(this, function(obj){
						$(obj).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);
                		$(obj).addClass("edit-active");           			
                		isclickfacility = true;
                		$(".close-default-facility-item").show();
                		setTimeout(function(){top.resizeIframe();},150);
					});
				}else{
					$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
			        $(this).addClass("edit-active");
					$(".close-default-facility-item").show();
				}
				return;
            }
        	
            $(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
        	$(this).addClass("edit-active");
                      		        	
        }       
      	setTimeout(function(){top.resizeIframe();},150);
				
    });
    
    $(window).load(function(){
   		top.resizeIframe();
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
    });

    $(document).ready(function(){
    	
    	$(".timepicker").timepicker({
             showInputs: false,
             showMeridian : false,
             maxHours : 24
        });	
    	$('.inputmaskphone').inputmask({
   		 	mask: '999-999-9999'
   		});
    });
       

	/*================ load branch ==================*/
		
	var myBranch = [];
	function loadBranch( obj, callback ){
	    $.ajax({
			type: "GET",
			url: $("#base_url").val()+"API/BranchRestController/getAllBranch", 
			success: function(data){
				data = JSON.parse(data);
				myBranch = data;
				if( typeof callback === "function"){
					callback(obj);
				}
				$(obj).siblings(".shop-update-loading").hide();
				displaySearchBranch(myBranch, $("#branchname").val());
				
				top.progressbar.stop();
				
			 }
		});
	}
	
	function displaySearchBranch( data , srchbranchname){
	
		var branchdis = '';
		if(data.length <= 0){
			$("#text-search-dis1").html(cutString(srchbranchname , 35));
			$("#text-search-dis2").html(cutString(srchbranchname , 20));
			branchdis +="<div class='no-data-wrapper' align='center'>";
			branchdis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
			branchdis +="  <span class='no-data-text'>No Record Found!</span>";
			branchdis +="</div>";
			$("#display-searching-text").show();
			$("#nham-dropdown-footer").show();
			
		}else{	
			
			$("#display-searching-text").hide();
			$("#nham-dropdown-footer").hide();		
			 for(var i=0 ; i<data.length ; i++){			
				 branchdis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].branch_id+'" /><p><span class="title">'+data[i].branch_name+'</span></p></div>';
			 }				
			
		}
		$("#display-result").html(branchdis); 	
		
	}
	
	$("#branchname").on("keyup",function(){
		
		var srchresult = [];
		var srchname = $(this).val().replace(/\s/g,'');
	
		if(srchname){
			for(var i = 0; i < myBranch.length; i++)
	    	{
	    	  if(myBranch[i].branch_name.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
	    	  {
	    	     srchresult.push(myBranch[i]);
	    	  }
	    	}
			
			displaySearchBranch(srchresult,  srchname);
			
	    }else{
	    	displaySearchBranch(myBranch, srchname);
	    }	
	});
	
	$("#yesbranch").on("mousedown",function(){
		var branchdata = {
			"BranchData" : {
				"branch_name" : $("#branchname").val(),
				"branch_remark": ""
			}
		};
		top.progressbar.start();
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/BranchRestController/insertBranch",
			contentType : "application/json",
			data :  JSON.stringify(branchdata),
			success : function(data){
				 data = JSON.parse(data);
				
				if(data.is_insert == false){
					top.swal({
						 title: "Insert Error!",
					     text: "",
					     html: true,
					     type: "error",
					    			     
					 });
				}else{
					$("#selectedbranch").val(data.branch_id);
					$("#branchname").attr('disabled','disabled');
					$("#branchname").siblings(".font-icon-cross").remove();
					$("#branchname").parent().append("<i class='fa fa-times font-icon-cross'  aria-hidden='true'></i>");
					loadBranch();
				}
			}
		});
	});
	/*================== end load branch ===================*/
	/*================== load serve category =================*/
	
	var myServeCategory = [];
	
	function loadServeCategory(obj, callback){
	    $.ajax({
			type: "GET",
			url: $("#base_url").val()+"API/ServeCategoryRestController/getAllServeCategory", 
			success: function(data){
				data = JSON.parse(data);
				myServeCategory = data;
				if( typeof callback === "function"){
					callback(obj);
				}
				$(obj).siblings(".shop-update-loading").hide();
				displaySearchServeCategory(myServeCategory, $("#servecategoryname").val());
				
				top.progressbar.stop();
				
			 }
		});
	}
	
	function displaySearchServeCategory( data , srchname){
	
		var dis = '';	
		if(data.length <= 0){
			$("#text-search-servecategory-dis1").html(cutString(srchname , 35));
			$("#text-search-servecategory-dis2").html(cutString(srchname , 20));
			dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
			dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
			dis +="  <span class='no-data-text'>No Record Found!</span>";
			dis +="</div>";
			$("#display-searching-text_servecategory").show();
			$("#nham-dropdown-footer-servecategory").show();
		}else{
	
			$("#display-searching-text_servecategory").hide();
			$("#nham-dropdown-footer-servecategory").hide();
			
			var diffarr = getArrdiff(data,servecatearr);
			 for(var i=0 ; i<diffarr.length ; i++){
				 if(diffarr[i] == undefined ) continue; 
				 dis += '<div  class=" nham-dropdown-multi-result">';
				 dis += ' <input type="hidden" value="'+diffarr[i].serve_category_id+'" />';
				 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+diffarr[i].serve_category_icon+'"/>';
				 dis += ' <p><span class="title">'+diffarr[i].serve_category_name+'</span></p></div>';
			 }		
			 			 			
			 for(var i=0 ; i<data.length ; i++){			
				for(var j=0; j<servecatearr.length; j++){
					if(servecatearr[j] == data[i].serve_category_id){
						dis += '<div  class="chosen-record nham-dropdown-multi-result-disable">';
						dis += ' <input type="hidden" value="'+data[i].serve_category_id+'" />';
						dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+data[i].serve_category_icon+'"/>';
						dis += ' <p><span class="title">'+data[i].serve_category_name+'</span></p>';	
						dis += ' <i class="fa fa-check chosen-icon" aria-hidden="true"></i>';
						dis += '</div>';
					}
				}								 
			 }
			 
			 dis+="<div style='clear:both'></div>";
		}
		$("#display-result-servecategory").html(dis); 
		
		
	}

	function getArrdiff(a1, a2){

		var a = [];
	    for (var i = 0; i < a1.length; i++) {
	        a[a1[i].serve_category_id] = a1[i];
	    }
	    for (var i = 0; i < a2.length; i++) {
	        if (a[a2[i]]) {
	            delete a[a2[i]];
	        }else{
				
		    }
	    }
	    var diff = [];
	    for(var i=0; i<a.length;i++){
			diff.push(a[i]);
		}
	    return diff;
	}

	
	$("#servecategoryname").on("keyup",function(){
		
		var srchresult = [];
		var srchname = $(this).val().replace(/\s/g,'');
	
		if(srchname){
			for(var i = 0; i < myServeCategory.length; i++)
	    	{
	    	  if(myServeCategory[i].serve_category_name.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
	    	  {
	    	     srchresult.push(myServeCategory[i]);
	    	  }
	    	}
			
			displaySearchServeCategory(srchresult, srchname);
			
	    }else{
	    	displaySearchServeCategory(myServeCategory, srchname);
	    }	
	});

	$("#yesservecategory").on("mousedown",function(){

		window.parent.$("#servecategorybtnpop").click();
		window.parent.$("#servecategorynamepopup").val($("#servecategoryname").val());
		
	});

	function getServeCategories(){

		var catesource = $("#serve-categories").find(".selected-category-box");
		var servecategories = [];
		for(var i=0 ; i<catesource.length; i++){
			var cateval = catesource.eq(i).find("input").val();
			servecategories.push(cateval);
		}
		return servecategories;
	}
	
	/*================== end load serve category ================*/
	
	/*================== load facility ==================*/
	
	
	var myShopFacility = [];
	
	function loadShopFacility(obj, callback){
	    $.ajax({
			type: "GET",
			url: $("#base_url").val()+"API/ShopFacilityRestController/getAllShopFacility", 
			success: function(data){
				data = JSON.parse(data);
				myShopFacility = data;
				if( typeof callback === "function"){
					callback(obj);
				}
				$(obj).siblings(".shop-update-loading").hide();
				displaySearchShopFacility(myShopFacility, $("#shopfacilityname").val());
				
				top.progressbar.stop();
				
			 }
		});
	}
	
	function displaySearchShopFacility( data , srchname){
	
		var dis = '';
		if(data.length <= 0){
			$("#text-search-shopfacility-dis1").html(cutString(srchname , 35));
			$("#text-search-shopfacility-dis2").html(cutString(srchname , 20));
			dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
			dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
			dis +="  <span class='no-data-text'>No Record Found!</span>";
			dis +="</div>";
			$("#display-searching-text_shopfacility").show();
			$("#nham-dropdown-footer-shopfacility").show();
		}else{	
			$("#display-searching-text_shopfacility").hide();
			$("#nham-dropdown-footer-shopfacility").hide();
			
			 var diffarr = getArrdiffFacility(data,facilityarr);
			 for(var i=0 ; i<diffarr.length ; i++){
				 if(diffarr[i] == undefined ) continue; 
				 dis += '<div  class="nham-dropdown-multi-result">';
				 dis += ' <input type="hidden" value="'+diffarr[i].sh_facility_id+'" />';
				 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+diffarr[i].sh_facility_icon+'"/>';
				 dis += ' <p><span class="title">'+diffarr[i].sh_facility_name+'</span></p></div>';
			 }		
			 			 			
		    for(var i=0 ; i<data.length ; i++){			
				for(var j=0; j<facilityarr.length; j++){
					if(facilityarr[j] == data[i].sh_facility_id){				
						 dis += '<div  class="chosen-record nham-dropdown-multi-result-disable">';
						 dis += ' <input type="hidden" value="'+data[i].sh_facility_id+'" />';
						 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+data[i].sh_facility_icon+'"/>';
						 dis += ' <p><span class="title">'+data[i].sh_facility_name+'</span></p>';
						 dis += ' <i class="fa fa-check chosen-icon" aria-hidden="true"></i>';
						 dis += '</div>';
					}
				}								 
			 }		 
			 dis+="<div style='clear:both'></div>";
			
		}
		$("#display-result-shopfacility").html(dis); 	
		
	}

	function getArrdiffFacility(a1, a2){

		var a = [];
	    for (var i = 0; i < a1.length; i++) {
	        a[a1[i].sh_facility_id] = a1[i];
	    }
	    for (var i = 0; i < a2.length; i++) {
	        if (a[a2[i]]) {
	            delete a[a2[i]];
	        }else{
				
		    }
	    }
	  
	    var diff = [];
	    for(var i=0; i<a.length;i++){
			diff.push(a[i]);
		}
	    return diff;
	}
	
	$("#shopfacilityname").on("keyup",function(){
		
		var srchresult = [];
		var srchname = $(this).val().replace(/\s/g,'');
	
		if(srchname){
			for(var i = 0; i < myShopFacility.length; i++)
	    	{
	    	  if(myShopFacility[i].sh_facility_name.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
	    	  {
	    	     srchresult.push(myShopFacility[i]);
	    	  }
	    	}
			
			displaySearchShopFacility(srchresult,  srchname);
			
	    }else{
	    	displaySearchShopFacility(myShopFacility, srchname);
	    }	
	});

	$("#yesshopfacility").on("mousedown",function(){

		window.parent.$("#shopfacilitybtnpop").click();
		window.parent.$("#shopfacilitynamepopup").val($("#shopfacilityname").val());
		
	});

	function getShopFacilities(){

		var facilitysource = $("#shop-facilities").find(".selected-category-box");
		
		var shopfacilities = [];
		for(var i=0 ; i<facilitysource.length; i++){
			var facility = facilitysource.eq(i).find("input").val();
			shopfacilities.push(facility);
		}
		return shopfacilities;
	}
	
	/*================== end load facility ==================*/
	/*================= working day section ==================*/

	$("#allday").on("change", function () {
		if($(this).is(":checked")){		
			$(".work-day").prop('checked', true);
		}else{
			$(".work-day").prop('checked', false);
		}
	});
	
	$(".work-day").on("change", function(){
	
		if($(this).is(":checked")){
			var len = $("input.work-day:checked").length;
			if(len >= 7){
				$("#allday").prop('checked', true);
			}
		}else{
			$("#allday").prop('checked', false);
		}
	});
	
	function countWorkingday(){
		var workingday = [];
		$('input.work-day:checked').each(function() {		
			workingday.push(this.value);
		});
		return workingday;
	}
	/*================= end working day section =================*/
	/*=================== phone adding =================*/

	$('#shop_phonenum').keypress(function (e) {
        
    	if (e.which == 13) {
    		$(".nham-append-data").click();
    	    return false;    //<---- Add this line
    	}
    });
    
	$(".nham-append-data").on("click",function(){
		var phonenum = $("#shop_phonenum").val().replace(/[_]/g,"").trim();
		if(phonenum == '' || phonenum.indexOf('--') > -1  || phonenum == null) return;		
		displayPhones(phonenum);
		
		$("#shop_phonenum").val("");	
	});
	
	 $(document).on("click",".close-phone",function(){	
		$(this).parents(".nham-box-wrap").remove();
	}) ;
	
	function displayPhones( data ){
		var dis =""; 
			dis += '<span class="nham-box-wrap">';
			dis += '<span class="phone-wrapper">'+data+'</span>';
			dis += '<i class="fa fa-close close-phone" style="margin-left:5px;margin-top:5px;" ></i>';
			dis += '</span>';
		$("#phone-add-result").append(dis);
	}

	$(document).on("click","i.delete-phone", function(){
		$(this).parent().remove();
	});

	function getAllPhone(){
		var shopphone = [];

		var addlng = $("#phone-add-result").find("span.nham-box-wrap").length;
		for(var i=0; i<addlng; i++){
			var addphone = $("#phone-add-result").children().eq(i).find("span.phone-wrapper").text();
			shopphone.push(addphone);
		}

		var remainlng = $("#shop-phone").find("p.shop-info").length;
		for(var i=0; i<remainlng; i++){
			var remainphone = $("#shop-phone").children().eq(i).find("span.phone-dis").text();
			shopphone.push(remainphone);
		}
		
		return shopphone;
	}
	/*================= close phone adding ==================*/
	
	$(document).on("click", ".close-default-item", function(){
		var removeservecate = $(this).parents(".selected-category-box").find("input").val();
		
		servecatearrdelete.push(removeservecate);
			
		$(this).parents(".selected-category-box").remove();
		top.resizeIframe();		 
	});	

	$(document).on("click", ".close-default-facility-item", function(){	

		var removefacility = $(this).parents(".selected-category-box").find("input").val();
			
		facilityarrdelete.push(removefacility);		
		$(this).parents(".selected-category-box").remove();
		
		 top.resizeIframe();		 
	});	
	/*================== display shop data =================*/
	
	/* function getRemainingServeCategory(){

		var remainservecate = [];
		var serveobj= $("#serve-category-wrapper").children(".selected-category-box");
		var serveobj_add = $("#serve-categories").find(".selected-category-box");

		for(var i =0; i<serveobj.length; i++){
			remainservecate.push({"serve_category_name" : serveobj.eq(i).find("span.serve_cate").text()});
		}

		for(var i=0; i<serveobj_add.length; i++){
			remainservecate.push({"serve_category_name" : serveobj_add.eq(i).find("span").text()});
		}
		console.log(remainservecate);
		return remainservecate;
	} */
	
	function loadServeCategoryDis( data ){
		 $("#serve-category-wrapper").children().remove();
		
		 if(data.length <= 0) return;
		 for(var i=0; i<data.length ;i++){

			 var textlng = $("<p></p>").append(data[i].serve_category_name.replace(/\s+/g, '')).textWidth()+55;
			 var box = "<div class='selected-category-box pull-left' style='min-width:"+textlng+"px'>";
			 box += "<input type='hidden' value='"+data[i].serve_category_id+"' />";
			 box += "<img class='pull-left icon-after-select' src='"+$("#dis_img_path").val()+"/uploadimages/real/icon/"+data[i].serve_category_icon+"' />";
			 box += "<p class='text-serve-category-selected'>";
			 box += "<span class='serve_cate'>"+data[i].serve_category_name+"</span>";
	 		 box += "<i class='fa fa-times close-default-item' style='margin-left:10px;cursor:pointer;display:none;'  aria-hidden='true'></i></p></div>";
	 		
	 		 $("#serve-category-wrapper").append(box);
	 		 
		 }	 
		 top.resizeIframe();	
	}

	
	function loadFacilityDis( data ){
		 $("#facility-wrapper").children().remove();
		
		 var box ="";
		 if(data.length <= 0){
			box +="<span class='no-information'>NO INFORMATION!<span>";
		 }else{
			 for(var i=0; i<data.length  ;i++){

				 var textlng = $("<p></p>").append(data[i].sh_facility_name.replace(/\s+/g, '')).textWidth()+55;
				 box += "<div class='selected-category-box pull-left' style='width:"+textlng+"px'>";
				 box += "<input type='hidden' value='"+data[i].sh_facility_id+"' />";
				 box += "<img class='pull-left icon-after-select' src='"+$("#dis_img_path").val()+"/uploadimages/real/icon/"+data[i].sh_facility_icon+"' />";
				 box += "<p class='text-serve-category-selected'>";
				 box += "<span>"+data[i].sh_facility_name+"</span>";
		 		 box += "<i class='fa fa-times close-default-facility-item' style='margin-left:10px;cursor:pointer;display:none;'  aria-hidden='true'></i></p></div>";		 				 		
			 }	 
		 }
		 $("#facility-wrapper").append(box);
		 	
		 top.resizeIframe();		
	}

	var social_media;
	loadDefaultUpdateInfo();
	function loadDefaultUpdateInfo(){
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopRestController/getDefaultUpdateInfo",
			contentType : "application/json", 
			data : JSON.stringify({
				"resq_data" : {
					"shop_id" : $("#shop_id").val()
				}					
			}),
			success : function(data){
				data = JSON.parse(data);
				
				shopdata = data.default_data.shop_data;
				$("#dis-branch").html(shopdata.branch_name);
				$("#dis-eng-name").html(shopdata.shop_name_en);
				
				$("#dis-kh-name").html(defaultNull(shopdata.shop_name_kh));
				$("#shop-capacity").html(defaultNum(shopdata.shop_capacity));

				if(shopdata.is_delivery && parseInt(shopdata.is_delivery) > 0){
					$("#is_delivery").html("<div style='width:160px;height:50px;border-radius:15px;background:#CB202D; '><img style='height:100%;width:100%;padding:0 5px 0 5px;' src='<?php echo base_url(); ?>assets/img/nham24.png' /></div>");
					$("#nham24delivery").prop('checked', true);
				}else{
					$("#is_delivery").html("<span class='no-information'>NO INFORMATION!<span>");
					$("#nham24delivery").prop('checked', false);
				}
				
				if(shopdata.shop_capacity <= 0 || shopdata.shop_capacity =="0" ){
					$("#shop-capacity-num").hide();
				}

				if(shopdata.shop_serve_type){
					$("#shop-serve-type").html(defaultNull(shopdata.shop_serve_type.toUpperCase()));	
				}							
						
				$("#shop-short-description").html(defaultNull(shopdata.shop_short_description));		
				$("#shop-description").html(defaultNull(shopdata.shop_description));
				$("#shop-remark").html(defaultNull(shopdata.shop_remark));

				g_shop_opening_time = defaultNull(shopdata.shop_opening_time, 5);
				g_shop_close_time = defaultNull(shopdata.shop_close_time, 5);
				
				$("#open-time").html(format24hour(defaultNull(shopdata.shop_opening_time, 5)));
				$("#close-time").html(format24hour(defaultNull(shopdata.shop_close_time, 5)));
				
				$("#dis-working-day").html(convertToDay(shopdata.shop_working_day));
				
				if(shopdata.shop_phone)
					$("#shop-phone").html(getPhoneNumber(shopdata.shop_phone));
				else
					$("#shop-phone").html("<span class='no-information'>NO INFORMATION!<span>");

				if(shopdata.shop_social_media){
					social_media = shopdata.shop_social_media;
					
					$("#shop-email").html(defaultNull(shopdata.shop_email));
					$("#shop-facebook").html(getSocialLink(shopdata.shop_social_media.facebook, shopdata.shop_name_en, 'facebook'));
					$("#shop-twitter").html(getSocialLink(shopdata.shop_social_media.twitter, shopdata.shop_name_en, 'twitter'));
					$("#shop-googleplus").html(getSocialLink(shopdata.shop_social_media.googleplus, shopdata.shop_name_en, 'google_plus'));
					$("#shop-instagram").html(getSocialLink(shopdata.shop_social_media.instagram, shopdata.shop_name_en, 'instagram'));
				}
			
					    	 		     	 		    	 		    
				for(var i=0; i<data.default_data.shop_facilities.length; i++){
					facilityarr.push(data.default_data.shop_facilities[i].sh_facility_id);
				}
				
				for(var i=0; i<data.default_data.shop_servecate.length; i++){
					servecatearr.push(data.default_data.shop_servecate[i].serve_category_id);
				}
				loadFacilityDis(data.default_data.shop_facilities);
				loadServeCategoryDis(data.default_data.shop_servecate);

				window.parent.$(".iframe_hover").hide();
				window.parent.$("#updateShopframe").show();
							
			}
		});

	}

	function defaultNum( num ){
		if(num > 0){
			return num;
		}else{
			return "<span class='no-information'>NO INFORMATION!<span>";
		}
	}
	function defaultNull( text , cutstring){

		if(text){
			if(cutstring == undefined)
				return text;
			else
				return text.substring(0,cutstring);
		}else{
			return "<span class='no-information'>NO INFORMATION!<span>";
		}
	}

	function getSocialLink(link, shopname , type){

		if(!link){
			return "<span class='no-information'>NO INFORMATION!<span>";
		}else{
			var dis='';
			dis += '<a title="'+link+'" href="'+link+'">'+shopname+'/'+type+'</a>';
			return dis;
		}
	}

	function format24hour(time) {
		 // Check correct time format and split into components
		  //time = time.substring(0, 5);
		  time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];
		  
		  if (time.length > 1) { // If time format correct
		    time = time.slice (1);  // Remove full string match value
		    time[5] = +time[0] < 12 ? '  AM' : '  PM'; // Set AM/PM
		    time[0] = +time[0] % 12 || 12; // Adjust hours
		  }
		  return time.join (''); // return adjusted time or original string
	}

	function getPhoneNumber(data){
		
		if(!data) return data;

		console.log(data);
		var dis = '';
		var phone = data.split("|");
		for(var i=0; i<phone.length; i++){
			dis += '<p class="shop-info wordwrap"><i class="fa fa-phone" aria-hidden="true"></i><span class="phone-dis">'+phone[i]+'</span><i class="fa delete-phone fa-times" aria-hidden="true"></i></p>';
		}
		return dis;
	}
	function convertToDay( data ){
		
		if(!data) return "<span class='no-information'>NO INFORMATION!<span>";;
		if(data.length <= 0) return "<span class='no-information'>NO INFORMATION!<span>";;
		var dis = '';
		
		var day = data.split("|");
		for(var i=0; i<day.length; i++){
			
			dis += '<p class="shop-info wordwrap">'+ENUM_DAY[day[i]].full+'</p>';
		}
		return dis;
	}

	/*================== end display shop data =================*/
	
	/*================= save update =================*/
	
	$("#save-branch").on("click", function(){

		$(this).siblings(".update-loading").show();
		updateShopField($("#selectedbranch").val(), "branch_id", this, function(obj){
			$("#dis-branch").html($("#branchname").val());
			$(obj).parents(".save-shop-info-box").slideUp(100);
			$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
			$(obj).parents(".shop-info-wrapper").find(".font-icon-cross").click();
			setTimeout(function(){top.resizeIframe()}, 120);
		});
					
	});

	$(".update-shop-save").on("click", function(){
		
		var value = "";

		if($(this).hasClass("working-day")){
			value = countWorkingday().toString().replace(/[,]/g,"|").trim();
		}
		else if($(this).hasClass("phone")){		
			value = getAllPhone().toString().replace(/[,]/g,"|").trim();
		}
		else if($(this).hasClass("deliveryNham24")){
			value = $("#nham24delivery").is(':checked') ? '1' : '0';
		}
		else{
			value = $(this).parents(".save-btn-wrapper").siblings(".input-wrapper").find(".insert-value").eq(0).val();
		}

		
		var param = $(this).siblings("input.update-param").val();
		if(!value){
			top.swal("Update Error!", param+" is invalid", "error");
			return;
		}

		
		
		$(this).siblings(".update-loading").show();
		updateShopField(value, param, this , function(obj){
			
			if($(obj).hasClass("working-day")){
				$("#dis-working-day").html(convertToDay(defaultNull(value)));
			}
			else if($(obj).hasClass("phone")){
				$(obj).parents(".shop-info-wrapper").children(".info-edit-wrapper").find(".shop-info").html(getPhoneNumber(value));
				$("#phone-add-result").children().remove();
			}
			else if($(obj).hasClass("deliveryNham24")){
				if(parseInt(value) > 0){
					$("#is_delivery").html("<div style='width:160px;height:50px;border-radius:15px;background:#CB202D; '><img style='height:100%;width:100%;padding:0 5px 0 5px;' src='<?php echo base_url(); ?>assets/img/nham24.png' /></div>");
					$("#nham24delivery").prop('checked', true);
				}else{
					$("#is_delivery").html("<span class='no-information'>NO INFORMATION!<span>");
					$("#nham24delivery").prop('checked', false);
				}
			}
			else{
				$(obj).parents(".shop-info-wrapper").children(".info-edit-wrapper").find(".shop-info").html(value);
			}			
			$(obj).parents(".save-shop-info-box").slideUp(100);
			$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
			$(obj).parents(".save-btn-wrapper").siblings(".input-wrapper").find("input").eq(0).val("");
			$(obj).parents(".save-btn-wrapper").siblings(".input-wrapper").find("textarea").eq(0).val("");
			setTimeout(function(){top.resizeIframe()}, 120);
			
		});
	});

	$(".update-shop-media-save").on("click", function(){
		
		
		var value = $(this).parents(".save-btn-wrapper").siblings(".input-wrapper").find(".insert-value").eq(0).val();
		var param = $(this).siblings("input.update-param").val();
		
		switch( param ){
			case "facebook" : social_media.facebook = value;break;
			case "google_plus" : social_media.googleplus = value;break;
			case "twitter": social_media.twitter = value;break;
			case "instagram" : social_media.instagram = value;break;
			default: break;
		}

		if(!value){
			top.swal("Update Error!", param+" is invalid", "error");
			return;
		}
		$(this).siblings(".update-loading").show();
		console.log(social_media);
		updateShopField(social_media, "shop_social_media", this , function(obj){
		
			$(obj).parents(".shop-info-wrapper").children(".info-edit-wrapper").find(".shop-info").html(getSocialLink(value,$("#dis-eng-name").text(),param));
			$(obj).parents(".save-shop-info-box").slideUp(100);
			$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
			$(obj).parents(".save-btn-wrapper").siblings(".input-wrapper").find("input").eq(0).val("");
			$(obj).parents(".save-btn-wrapper").siblings(".input-wrapper").find("textarea").eq(0).val("");
			setTimeout(function(){top.resizeIframe()}, 120); 
			
		});
	});

	$(".update-shop-working-time").on("click",function(){
		
		var open_time = $("#shopopentime").val();
		var close_time = $("#shopclosetime").val();
		if(!open_time) {
			top.swal("Update Error!", "shop_opening_time is invalid", "error");
			return;
		}
		if(!close_time) {
			top.swal("Update Error!", "shop_close_time is invalid", "error");
			return;
		}
		var obj = this;
		$(this).siblings(".update-loading").show();
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopRestController/updateShopWorkingTime",
			contentType : "application/json",
			data : JSON.stringify({
				"shopdata" : {
					"shop_opening_time" : open_time,
					"shop_close_time" : close_time,
					"shop_id" : $("#shop_id").val()
				}
			}),
			success : function(data){
				data = JSON.parse(data);
				if(data.is_updated == true){

					top.loadNotCompletedInfo();
					g_shop_opening_time = open_time;
					g_shop_close_time = close_time;
					
					$("#open-time").html(format24hour(defaultNull(open_time, 5)));
					$("#close-time").html(format24hour(defaultNull(close_time, 5)));	
					$(obj).parents(".save-shop-info-box").slideUp(100);
					$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
					setTimeout(function(){top.resizeIframe()}, 120); 
				}else{
					top.swal("Update Error!", data.message, "error");
				}
				$(obj).siblings(".update-loading").hide();
					
			}
		});
		
	});

	function loadUpdatedServeCategory(obj ,callback){
		$.ajax({
			type : "GET",
			url : $("#base_url").val()+"API/ServeCategoryRestController/getServeCategoryByShopId/"+$("#shop_id").val(),
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				$("#serve-categories").children().remove();
				servecatearr = [];
				
				for(var i=0; i<data.length; i++){
					servecatearr.push(data[i].serve_category_id);
				}
				loadServeCategoryDis(data);
				displaySearchServeCategory(myServeCategory, $("#servecategoryname").val());

				if( typeof callback === "function"){
					callback(obj);
				}	
				
			}
		}); 
	}

	
	$("button.update-serve-category").on("click", function(){
		
		$(this).siblings(".update-loading").show();
		var obj = this;
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopRestController/updateShopServeCateogry",
			contentType : "application/json",
			data : JSON.stringify({
					"shopdata" : {
						"shop_id" : $("#shop_id").val(),
						"removeditem" : servecatearrdelete,
						"addeditem" : getServeCategories()
					}
				}
			),
			success : function(data){
				data = JSON.parse(data);
				if(data.is_updated == true){			
					loadUpdatedServeCategory(obj ,function(obj){
						$(obj).parents(".save-shop-info-box").slideUp(100);
						$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
						setTimeout(function(){top.resizeIframe()}, 120); 
					});
							
				}else{
					console.log(data.message);
					top.swal("Update Error!", data.message, "error");
				}
				$(obj).siblings(".update-loading").hide();
				servecatearrdelete = [];
					
			}
		}); 
	});

	function loadUpdatedShopFacility(obj ,callback){
		$.ajax({
			type : "GET",
			url : $("#base_url").val()+"API/ShopFacilityRestController/getShopFacilityByShopId/"+$("#shop_id").val(),
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				$("#shop-facilities").children().remove();
				facilityarr = [];
				
				for(var i=0; i<data.length; i++){
					facilityarr.push(data[i].sh_facility_id);
				}
				loadFacilityDis(data);
				displaySearchShopFacility(myShopFacility, $("#servecategoryname").val());
				if( typeof callback === "function"){
					callback(obj);
				}	
				
			}
		}); 
	}

	$("button.update-facility").on("click", function(){
		
		$(this).siblings(".update-loading").show();
		var obj = this;
		console.log(getShopFacilities());
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopRestController/updateShopFacility",
			contentType : "application/json",
			data : JSON.stringify({
					"shopdata" : {
						"shop_id" : $("#shop_id").val(),
						"removeditem" : facilityarrdelete,
						"addeditem" : getShopFacilities()
					}
				}
			),
			success : function(data){
				data = JSON.parse(data);
				if(data.is_updated == true){			
					loadUpdatedShopFacility(obj ,function(obj){
						$(obj).parents(".save-shop-info-box").slideUp(100);
						$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
						setTimeout(function(){top.resizeIframe()}, 120); 
					}); 
							
				}else{
					console.log(data.message);
					top.swal("Update Error!", data.message, "error");
				}
				$(obj).siblings(".update-loading").hide();
				facilityarrdelete = [];
					
			}
		}); 
	});

	function updateShopField(value, param,obj ,callback){

		
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopRestController/updateShopField",
			contentType : "application/json",
			data : JSON.stringify({
				"shopdata" : {
					"type" : 1,
					"updated_value" : value,
					"shop_id" : $("#shop_id").val(),				
					"param" : param
				}
			}),
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				if(data.is_updated == true){
					top.loadNotCompletedInfo();
					if( typeof callback === "function"){
						callback(obj);
					}				
				}else{
					top.swal("Update Error!", data.message, "error");
				}
				$(obj).siblings(".update-loading").hide();
					
			}
		});
	}
	/*================ end save update ===============*/
    </script>
  </body>
</html>
