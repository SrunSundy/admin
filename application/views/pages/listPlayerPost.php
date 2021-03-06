<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PLayer Post list | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	
  <style>
  	p.list-shop-total{
  		font-size: 18px;
  		font-weight: bold;
  		color: #616161;
  	}
  	
  	button.header-shop-btn{
  		border-radius: 0;
  		font-weight: bold;
  	} 	
  
  	button.header-shop-btn i{
  		padding-right: 7px;
  	}
  	
  	p.search-shop-result{
  		color:#9E9E9E;
  		font-style: italic;
  		line-height:40px;
  		
  	}
  	
  	div.advance-search-box{
  		  		
  		border-bottom:2px solid #E0E0E0; 		
  		display:none;
  		background:#f6f7f9;
  	}
  	
  	div.border-line{
  		margin-top:7px;
  		height: 2px;
  		background: #E0E0E0;
  	}
  	
  	div.nham-div-line{
  		width: 50%;
  		float:left;
  	}
  	
  	p.text-show-style{
  		color: #757575;
  	}
  	
  	p.text-show-style i{
  		padding-right:5px;
  	}
  	
  	th{
  		color: #757575;
  	}
  	
  	.shop-open-time{
  		color: #9E9E9E;
  		padding-left: 1px;
  		font-style: italic;
  	}
  	
  	.active-shop{
  		
  		font-size: 8px;
  		padding-right: 5px;
  	}
  	
  	img.table-shop-img{
  		width: 50px;
  		height: 50px;
  		border-radius: 5px;
  		position:absolute;
  		top:6px;
  		right:0;
  		border: 2px solid #fff;
  		box-shadow: 1px 1px 2px gray;
  	}
  	
  	.img-logo-wrapper{
  		width:55px;
  		height:55px;
  		position:relative;
  	}
  	
  	.shop-display-status{
  		
  		transition: all 0.5s linear;
  	}
  	
  	i.shop-edit{
  		font-size: 22px;
  		color: #dd4b39;
  		cursor: pointer;
  	}
  	
  	
  	@media screen and (max-width: 1198px) {
  		#srch-order-by{
  			width: 100% !important;
  		}
  		.select2{
  			width: 100% !important;
  		}
  		
  		
  	}
  </style>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/css/nhamslider.css">
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
  	
  	<input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
  	<input type="hidden" id="dis_img_path" value="<?php echo DIS_IMAGE_PATH ?>"/>
  
    <div class="wrapper">

      <header class="main-header">
      	  <?php include 'elements/headnavbar.php';?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
       	  <?php include 'elements/leftnavbar.php';?>
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Player Post Management
            <small>manage all the Player Post</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List Player</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          	  <div class="box box-danger" style="border-radius: 0;min-height: 500px;" >
          	  
                <div class="box-header">
                  <!--<h3 class="box-title">Total Number of Shop : 12010</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>-->
                  
                  <div class="col-lg-12">
                  	<div class="row">
                  		<div class="col-lg-7">
                  			<div class="row">
                  				<div class="col-lg-12">
                  					<div class="row">
                  						<p class="list-shop-total">Total Number of Player : <span id="total_items"><img src="<?php echo base_url(); ?>assets/img/bars.gif"></span></p>
                  					</div>
                  				</div>
                  				
                  				<div class="col-lg-12" id="shop-data-detail">
                  					<div class="row">
                  						<div class="col-lg-3">
                  							<div class="row">
                  								<p class="text-show-style" title="Total of disable shop">
                  									<i class="fa fa-building" style="color:#ccc;" aria-hidden="true"></i>
                  									Disable: <span id="disable_items"><img src="<?php echo base_url(); ?>assets/img/bars.gif">
                  								</p>      
                  							</div>
                  						</div>
                  						
                  						<div class="col-lg-3">
                  							<div class="row">
                  								<p class="text-show-style" title="Total of active shop">
                  									<i class="fa fa-building"  style="color:#dd4b39;" aria-hidden="true"></i>
                  									Enable : <span id="enable_items"><img src="<?php echo base_url(); ?>assets/img/bars.gif"></span>
                  								</p>      
                  							</div>
                  						</div>
                  						
                  						<div class="col-lg-3">
                  							<div class="row">
                  								<!--<p class="text-show-style" title="Total photo of the shop">
                  									<i class="fa fa-picture-o" style="color:#00BCD4" aria-hidden="true"></i>
                  									Photo : 500000
                  								</p>   -->   
                  							</div>
                  						</div>
                  						          						
                 					</div>
                  				</div>
                  				
                  			</div>
                  		</div>
                  		
                  		<div class="col-lg-5">
                  			<div class="row">
                  				<div class="col-lg-12">
                  					<div class="row">
                  		
		                  				
		                  				<button type="button" class="btn btn-default pull-right header-shop-btn" id="advance-search-btn-down">
		                  					<i class="fa fa-sort-desc" aria-hidden="true" style="font-size:16px;"></i>
		                  					Advanced search 
		                  				</button>
		                  				
		                  				<button type="button" class="btn btn-default pull-right header-shop-btn" id="advance-search-btn-up" style="display:none;">
		                  					<i class="fa fa-sort-asc" aria-hidden="true" style="font-size:16px;"></i>
		                  					Advanced search 
		                  				</button>
                  					</div>
                  				</div>
                  				
                  				<div class="col-lg-12" style="padding-top:7px;" id="normal-search-box">
                  					<div class="row">
                  						 <div class="col-lg-5"></div>
                  						 <div class="col-lg-7">
                  						 	<div class="row">
                  						 		<div class="input-group ">
							                       <input type="text" name="table_search" id="whole-search" class="form-control input-sm pull-right" placeholder="Search Name Email Phone...">
							                       <div class="input-group-btn">
							                         <button id="btn-whole-search" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
							                       </div>
							                     </div>
                  						 	</div>
                  						 </div>
                  						 
                  					</div>
                  				</div>      
                  				           				
                  			</div>
                  		</div>
                  	</div>             
                  </div>
                  
                  <div class="col-lg-12 border-line"></div>
                  <div class="col-lg-12 advance-search-box"  id="advance-search-box">
                  	 <div class="row">
                  	 	<div class="col-lg-9">
                  	 	
                  	       <div class="col-lg-12"  style="padding-top:10px;">
                  	          <div class="row">
                  	          	 <div class="form-group">		                   
			                        <div class="input-group">
				                       <div class="input-group-addon">
				                         <i class="fa fa-clock-o"></i>
				                       </div>
				                       <input type="text" class="form-control pull-right" placeholder="Select range of date" id="reservationtime">
			                        </div><!-- /.input group -->
			                     </div><!-- /.form group -->
                  	          </div>
                  	        </div>
                  	        
                  	        <div class="col-lg-12" align="center">
                  	        	<div class="row">
	                  	            <select class="form-control nham-control  country-option" 
							            id="srch_country" style="width: 100%; border-radius: 0!important;">						                      	
							        </select>
							    </div>
                  	        </div>
                  	        
                  	        <div class="col-lg-12" >
                  	          <div class="row">                  	                        	          	
                  	          	<div class="col-lg-4" style="padding-top:13px;" align="center">
                  	          		<div class="row">
	                  	          	   <select class="form-control nham-control  city-option" 
							        		id="srch_city" style="width: 100%; border-radius: 0!important;">						                      	
							           </select>
							        </div>
                  	          	</div>
                  	          	
                  	          	<div class="col-lg-4" style="padding-top:13px;" align="center">
                  	          		<div class="row">
		                  	          	 <select class="form-control nham-control  district-option" 
								        	id="srch_district" style="width: 90%; border-radius: 0!important;">						                      	
								         </select>
							        </div>
                  	          	</div>
                  	          	
                  	          	<div class="col-lg-4" style="padding-top:13px;" align="center">
                  	          		<div class="row">
	                  	          	    <select class="form-control nham-control  commune-option" 
							        		id="srch_commune" style="width: 100%; border-radius: 0!important;">						                      	
							            </select>
							        </div>
                  	          	</div>      	         				                						                    
						       
                  	          </div>
                  	        </div>
                  	        
                  	        <div class="col-lg-12" style="padding-top:13px;">
                  	          <div class="row">
                  	          	 <div class="col-lg-4" style="padding-bottom:10px;" align="center">
                  	          	 	<div class="row">                 	          	 						                						                    
						                <select class="form-control nham-control  category-option"  style="width: 100%; border-radius: 0!important;padding-left:10px;">
						                      	
						                </select>	
                  	          	 	</div>
                  	          	 </div>
                  	          	 
                  	          	 <div class="col-lg-4" style="padding-bottom:10px;" align="center">
                  	          	 	<div class="row">              	          	 						                						                    
						                <select class="form-control " style="width: 90%; padding-left:10px;" id="srch-order-by">
					                      <option selected="selected" value="food">Food</option>
					                      <option value="drink">Drink</option>					                    
					                    </select>
                  	          	 	</div>
                  	          	 </div>
                  	          	 
                  	          	 <div class="col-lg-4" style="padding-bottom:10px;">
                  	          	 	<div class="row">          	          	 						                						                    
						                <select class="form-control " style="width: 100%;" id="shopservetype">
					                      <option selected="selected" value="food">Food</option>
					                      <option value="drink">Drink</option>					                    
					                    </select>
                  	          	 	</div>
                  	          	 </div>
                  	          	 
                  	          </div>
                  	         </div>
                  	 	  
                  	 	</div>
                  	 	
                  	 	<div class="col-lg-3" style="padding-top:7px;">
                  	 	    <div class="col-lg-12">
                  	 	    	<div class="row">
                  	 	    		<div class="nham-div-line div-top-gap">
										<label class="nham-control nham-control--checkbox">Thursday
											<input type="checkbox"  id="thur" value="4"  class="work-day"/>
											<div class="nham-control__indicator"></div>
										</label>
									</div>	
									<div class="nham-div-line div-top-gap">
										<label class="nham-control nham-control--checkbox">Friday
											<input type="checkbox"  id="fri" value="5"  class="work-day"/>
											<div class="nham-control__indicator"></div>
										</label>
									</div>	
                  	 	    	</div>
                  	 	    </div>
                  	 	    
                  	 	    <div class="col-lg-12"  style="padding-top:16px;">
                  	 	    	<div class="row">
                  	 	    		<select class="form-control " style="width: 100%;" id="shopservetype">
					                     <option selected="selected" value="food">Food</option>
					                     <option value="drink">Drink</option>					                    
					                </select>     	 	    		
                  	 	    	</div>
                  	 	    </div>
                  	 	    
                  	 	    <div class="col-lg-12" style="padding-top:13px;">
                  	 	    	<div class="row">                  	 	    	
                  	 	    		<input type="text" class="form-control" placeholder="searching..." />                 	 	    		       	 	    		
                  	 	    	</div>
                  	 	    </div>
                  	 	    
                  	 	    <div class="col-lg-12" style="padding-top:11px;padding-bottom:10px;" >
                  	 	    	<div class="row">                 	 	    	                 	 	    		
                  	 	    		<button type="button" class="btn btn-default " style="border-radius:0px;width:100%;">Search</button>
                  	 	    	</div>                  	 	    			                 	 	    	
                  	 	    </div>
                  	 	    
                  	 	</div>
                  		 
						
                  	 </div>
                  </div>
                  
                  <div class="col-lg-12" style="padding-top:10px;">
                  	<div class="row">    
                  		<div class="nham-div-line">                			
                  			<div class="form-group">
					             <select class="form-control " id="shop-row-num" style="width: 70px;">
					            	  <option value="5">5</option>
					                  <option value="10" selected="selected" >10</option>
					                  <option value="15" >15</option>
					                  <option value="30">30</option>
					                  <option value="50" >50</option>			                    
					             </select>
					         </div><!-- /.form-group -->                 		           			 
                  		</div>      
                  		<div class="nham-div-line">                  			
                  			<p class="search-shop-result pull-right">searching results: <span id="shop-total-record"></span></p>                    			             			 
                  		</div>     
                  		<div style="clear:both"></div>      		                  		                		
                  	</div>             
                  </div>
                  
                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding" style="margin-top:-10px;" >
                  <table class="table table-hover" >
	                  <thead>
	                    <tr>
	                      <th style="width:7%">Photo</th>
	                      <th style="width:15%">Name</th>
	             
	                      <th style="width:15%">Total Image</th>
	                      <th style="width:15%">Post_caption</th>
						  <th style="width:15%">Created_date</th>
	                      <th style="width:13%">Checked_in</th>
	                      <th style="width:13%">Report</th>
	                      <th style="width:5%">status</th>
	                      
	                    </tr>
                   	   </thead>
                   	   <tbody id="display-shop-result">
                   	   
                   	   </tbody>
                   	   
                  </table>
                </div><!-- /.box-body -->
                
                <div class="" >
	                <div id="pagi-display" class="pagination-display " style="padding-left:20px;">	     
	                </div>
                </div>
                
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
      		<?php include 'elements/footnavbar.php';?>
      </footer>

      <!-- Control Sidebar -->
      
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
   <script id="display-shop-table" type="text/x-jQuery-tmpl">
		<tr>					
			<td>
				<input type="hidden" value="{{= post_id}}"/>
				<div class="img-logo-wrapper" >
				   <img class="table-shop-img" src="{{= addSrcLogoimg(user_photo) }}" />
				   <span class="active-shop" style="position:absolute;top:0;right0;">
				   </span>
				</div>				
			</td>
           	<td>				
				{{= user_fullname }} 
			
				<div class="shop-open-time">{{= type }} </div>
			</td>
      
            <td>
			   <div class="img-logo-wrapper" >
				   <img class="table-shop-img" src="https://storedernham.s3.amazonaws.com/uploadimages/real/post/medium/{{= image_src}}" />
				   
		           <span class="" style="position:absolute;top:0;right0; color:red">
					    {{= amount_post }} 
				   </span>
				</div>	</td>
 			<td>{{= post_caption }}</td>
 			<td>{{= post_created_date }}</td>
 			<td >{{= checked_in }}</td> 
	        <td >{{= count_report }}</td>
 			<td>
				<label class="switch">
  					<input class="toggleshop" id="{{= generateIdWithShopId('toggleshop',post_id)}}" type="checkbox" {{= checkShopStatus(post_status)}}>
  					<div class="slider"></div>
				</label>
			</td>
									
		</tr>
					           	
   	</script>
    <script src="<?php echo base_url(); ?>assets/nhamdis/jscontroller/listplayerPost.js"></script>
  </body>
</html>

			                								                					                
					            