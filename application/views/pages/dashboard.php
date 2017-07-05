<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 <style>
 	.des-title{
 		font-size: 17px;
    	font-weight: bold;
 	}
 	
 	ul.top-user li{
 		width: 82px;
 		hight: 82px;
 		padding: 0;
 	}
 	
 	ul.top-user li img{
 		width: 75px;
 		height: 75px;
 		border
 	}
 	
 	
 	ul.top-user li a{
 		font-size: 11px;
 	}
 	
 	ul.small-user{
 		margin-right: 10px;
 		min-height: 40px;
 	}
 	
 	ul.small-user li{
 		/* position:absolute; */
 		width: 20px;
 		height: 40px;
 		transition: all 0.2s linear;
 		padding: 0;
 		padding-top: 7px;
 		
 		
 	}
 	
 	ul.small-user li img{
 		width: 20px;
 		height: 20px;
 	}
 	
 	
 	
 	ul.small-user li:hover{
 		margin-top: -10px;
 		z-index: 10;
 	
 	}
 	
 	ul.small-user li:hover img{
 		
 		z-index: 10;
 	}
 	
 	ul.top-post li img{
 		border-radius: 0;
 	}
 	
 	ul.top-post li {
 		width: 120px;
 		hight: 120px;
 		padding: 0;
 		margin-top: 5px;
 	}
 	
 	ul.top-post li img{
 		width: 110px;
 		height: 110px;
 	}
 	
 	div.num-post{
 	
 		width:25px;
 		height: 25px;
 		border-radius: 100%;
 		background: #2196F3;
 		position:absolute;
 		top: -8px;
 		right: 0;
 		color:white;
 	}
 	
 	
 </style>	
 </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <div class="wrapper">

      <header class="main-header">
      	  <?php include 'elements/headnavbar.php';?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
       	  <?php include 'elements/leftnavbar.php';?>
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 910px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><span id="ttl_place">0</span></h3>
                  <p>Total Places</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-stalker"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><span id="ttl_user">0</span></h3>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-chatboxes"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><span id="ttl_post">0</span></h3>
                  <p>Total Posts</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><span id="ttl_product">0</span></h3>
                  <p>Total Product</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          
          
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              
              <div class="row">
              	
	              	
	              	 	<div class="user-objective col-md-8">
	              	 		<div class="row">
	              			<div class="col-lg-4 col-xs-6">
				              <!-- small box -->
				              <div class="small-box bg-primary" >
				                <div class="inner">
				                  <h3><span id="reported_post">0</span></h3>
				                  <p>Reported Post</p>
				                </div>
				                <div class="icon">
				                  <i class="ion ion-stats-bars"></i>
				                </div>
				                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              </div>
				            </div><!-- ./col -->
				            <div class="col-lg-4 col-xs-6">
				              <!-- small box -->
				              <div class="small-box bg-primary">
				                <div class="inner">
				                  <h3>65</h3>
				                  <p>User's Feedback</p>
				                </div>
				                <div class="icon">
				                  <i class="ion ion-pie-graph"></i>
				                </div>
				                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              </div>
				            </div><!-- ./col -->
				            <div class="col-lg-4 col-xs-6">
				              <!-- small box -->
				              <div class="small-box bg-primary">
				                <div class="inner">
				                  <h3>65</h3>
				                  <p>Today's User Registration</p>
				                </div>
				                <div class="icon">
				                  <i class="ion ion-pie-graph"></i>
				                </div>
				                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              </div>
				            </div><!-- ./col -->
				            
				            <div class="col-lg-4 col-xs-6">
				              <!-- small box -->
				              <div class="small-box bg-primary">
				                <div class="inner">
				                  <h3><span id="today_place_register">0</span></h3>
				                  <p>Today's Place Registration</p>
				                </div>
				                <div class="icon">
				                  <i class="ion ion-stats-bars"></i>
				                </div>
				                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              </div>
				            </div><!-- ./col -->
				            <div class="col-lg-4 col-xs-6">
				              <!-- small box -->
				              <div class="small-box bg-primary">
				                <div class="inner">
				                  <h3>65</h3>
				                  <p>TEST</p>
				                </div>
				                <div class="icon">
				                  <i class="ion ion-pie-graph"></i>
				                </div>
				                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              </div>
				            </div><!-- ./col -->
				            <div class="col-lg-4 col-xs-6">
				              <!-- small box -->
				              <div class="small-box bg-primary">
				                <div class="inner">
				                  <h3>65</h3>
				                  <p>TEST</p>
				                </div>
				                <div class="icon">
				                  <i class="ion ion-pie-graph"></i>
				                </div>
				                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              </div>
				            </div><!-- ./col -->
				            </div>
		                </div>
		            
		                <div class="admin-box col-md-4">
		              	
		              	 <h3 class="box-title des-title" >Super Admin (<span id="num_sup_admin">0</span>)</h3>
		              	 <div style="width:100%;height: 2px; background: #ccc;margin-bottom:12px;"></div>
		              	 <div class="progress-group" style="padding-bottom: 15px;height: 100px;">
		                      	<div class="box-body no-padding">
			                      <ul class="users-list top-user clearfix" id="sup_admin_result">		                       		                       
			                     
			                      </ul><!-- /.users-list -->
			                    </div><!-- /.box-body -->
	                    
		                      </div><!-- /.progress-group -->
		                      
		                  <h3 class="box-title des-title" >Admin (<span id="num_admin" >0</span>)</h3>
		              	 <div style="width:100%;height: 2px; background: #ccc;margin-bottom:12px;"></div>
		              	 <div class="progress-group" style="padding-bottom: 15px;height: 100px;">
		                      	<div class="box-body no-padding">
			                      <ul class="users-list top-user clearfix" id="admin_result">
			                        
			                     
			                      </ul><!-- /.users-list -->
			                    </div><!-- /.box-body -->
	                    
	                      </div><!-- /.progress-group -->
	              		</div>
	              	 
	            
              </div>
              <!-- Place statistic col -->
          	  <div class="row">
	            <div class="col-md-12">
	            	
	              	             	             
	            
	              <div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title des-title" >Place Statistic</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>	                   
	                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	                  </div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <div class="row">
	                    <div class="col-md-8">
	                      <p class="text-left">
	                        <strong>Monthly's Report</strong>
	                      </p>
	                      <div class="data-chart-setting" style="padding-bottom: 7px;float: right; margin-right: 13px;">
	                      
	                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
			                    <div class="btn-group" data-toggle="btn-toggle" >
			                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-bar-chart" aria-hidden="true"></i></button>
			                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-table" aria-hidden="true" style="font-size:13px"></i></button>
			                    </div>
		                    </div>
	                      	
	                      </div>
	                      <div class="chart" id="w_place_chart">
	                        <!-- Sales Chart Canvas -->
	                        <canvas id="place_chart" style="height: 310px;"></canvas>
	                      </div><!-- /.chart-responsive -->
	                       
	                       <div class="col-sm-4 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL PLACES</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-4 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL DISBILITY</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                   <!-- <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL BOOSTERS</span>
		                      </div>
		                    </div>-->
		                    
		                    <div class="col-sm-4 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL UNAUTHORIZATION</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
	                        <div style="clear:both;"></div>
	                    </div><!-- /.col -->
	                    <div class="col-md-4">
	                      <p class="text-left">
	                        <strong>Place's Current Statistic</strong>
	                      </p>
	                      <div class="progress-group" style="padding-bottom: 15px;">
	                        <span class="progress-text">Top Places</span>
	                      	<div class="box-body no-padding" style="min-height: 90px;">
		                      <ul class="users-list top-user clearfix" id="place_result">
		                        	                        
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">New Places (last 1 month)</span>
	                        <span class="progress-number"><b><span id="new_place">0</span></b>/<span class="total_place">0</span></span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" id="new_place_percentage" style="width: 0%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix" id="pic_new_place">
		                       
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">Unauthorized Places</span>
	                        <span class="progress-number"><b><span id="u_place">0</span></b>/<span class="total_place">0</span></span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" id="u_place_percentage" style="width: 0%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px" >
		                      <ul class="users-list small-user clearfix"id="u_place_pic">
		                       
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">Disabled PLaces</span>
	                        <span class="progress-number"><b><span id="disabled_place">0</span></b>/<span class="total_place">0</span></span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" id="disabled_place_percentage" style="width: 0%"></div>
	                        </div>
	                        <div class="box-body no-padding"  style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix" id="disabled_place_pic">
		                        
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                      <!--<div class="progress-group">
	                        <span class="progress-text">Advertising Places</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul>
		                    </div>
		                    
	                      </div> -->
	                      
	                      <!--<div class="progress-group">
	                        <span class="progress-text">Boosting Places</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul>
		                    </div>
		                    
	                      </div> -->
	                     
	                    </div><!-- /.col -->
	                  </div><!-- /.row -->
	                </div><!-- ./box-body -->
	              
	              </div><!-- /.box -->
	            </div><!-- /.col -->
	          </div><!-- /.row -->
           	  <!-- end place statistic col -->
           	  
           	   <!-- user statistic col -->
          	  <div class="row">
	            <div class="col-md-12">
	              <div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title des-title" >User Statistic</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>	                   
	                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	                  </div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <div class="row">
	                  
	                    <div class="col-md-12">
	                    	<div class="progress-group" style="padding-bottom: 8px;">
	                        <span class="progress-text">Top Users</span>
	                      	<div class="box-body no-padding">
		                      <ul class="users-list top-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Alexander Pierce</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Norman</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Jane</a>
		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">John</a>
		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Alexander</a>
		                          
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Sarah</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         
		                          
		                        
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                    </div>
	                    
	                    <div class="col-md-8">
	                      <p class="text-left">
	                        <strong>Monthly's Report</strong>
	                      </p>
	                      <div class="data-chart-setting" style="padding-bottom: 7px;float: right; margin-right: 13px;">
	                      
	                       <select class="pull-right" style="width: 120px;height: 30px;padding-left:10px;margin-left:15px;">
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      	
	                      	</select>
	                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
			                    <div class="btn-group" data-toggle="btn-toggle" >
			                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
			                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
			                    </div>
		                    </div>
	                      	
	                      </div>
	                      <div class="chart" id="w_user_chart">
	                        <!-- Sales Chart Canvas -->
	                        <canvas id="user_chart" style="height: 310px;"></canvas>
	                      </div><!-- /.chart-responsive -->
	                      
	                       
	                       <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL USERS</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL DISABLE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL ACTIVE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL UNAUTHORIZED</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
	                      
	                    </div><!-- /.col -->
	                    <div class="col-md-4">
	                      <p class="text-left">
	                        <strong>User's report</strong>
	                      </p>
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">New Users (last 1 month)</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                       
	                      <div class="progress-group">
	                        <span class="progress-text">Shop Owners</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Reported Users</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                       <div class="progress-group">
	                        <span class="progress-text">Unauthorized Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Disabled Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                     
	                    </div><!-- /.col -->
	                  
	                  
	                  </div><!-- /.row -->
	                </div><!-- ./box-body -->
	              
	              </div><!-- /.box -->
	            </div><!-- /.col -->
	          </div><!-- /.row -->
           	  <!-- end user statistic col -->
           	  
           	  <!-- post statistic col -->
          	  <div class="row">
	            <div class="col-md-12">
	              <div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title des-title" >Post Statistic</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>	                   
	                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	                  </div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <div class="row">
	                  
	                    <div class="col-md-12">
	                    	<div class="progress-group" style="padding-bottom: 8px;">
	                        <span class="progress-text">Top Posts</span>
	                      	<div class="box-body no-padding">
		                      <ul class="users-list top-post clearfix">
		                        <li>		                         
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                         
		                        </li>
		                        <li>
		                           <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                          
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                          		                        
		                        </li>		                        
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                                                   
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                         		                         
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                                                   
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                         		                         
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">	                                                   
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                          		                          
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">                                              
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                          		                        
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">                                            
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>	                          		                        
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">                                           
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                          		                          
		                        </li>
		                         <li>		                          
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">                                         
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>
		                        </li>
		                        <li>		                          
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">                                     
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>
		                        </li>
		                        
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                    </div>
	                    
	                    <div class="col-md-8">
	                      <p class="text-left">
	                        <strong>Monthly's Report</strong>
	                      </p>
	                      <div class="data-chart-setting" style="padding-bottom: 7px;float: right; margin-right: 13px;">
	                      
	                       <select class="pull-right" style="width: 120px;height: 30px;padding-left:10px;margin-left:15px;">
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      	
	                      	</select>
	                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
			                    <div class="btn-group" data-toggle="btn-toggle" >
			                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
			                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
			                    </div>
		                    </div>
	                      	
	                      </div>
	                      <div class="chart" id="w_post_chart">
	                        <!-- Sales Chart Canvas -->
	                        <canvas id="post_chart" style="height: 310px;"></canvas>
	                      </div><!-- /.chart-responsive -->
	                      
	                       
	                       <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL USERS</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL DISABLE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL ACTIVE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL UNAUTHORIZED</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
	                      
	                    </div><!-- /.col -->
	                    <div class="col-md-4">
	                      <p class="text-left">
	                        <strong>Product's report</strong>
	                      </p>
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">New Users (last 1 month)</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                       
	                      <div class="progress-group">
	                        <span class="progress-text">Shop Owners</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Reported Users</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                       <div class="progress-group">
	                        <span class="progress-text">Unauthorized Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Disabled Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                     
	                    </div><!-- /.col -->
	                  
	                  
	                  </div><!-- /.row -->
	                </div><!-- ./box-body -->
	              
	              </div><!-- /.box -->
	            </div><!-- /.col -->
	          </div><!-- /.row -->
           	  <!-- end post statistic col -->
           	  
           	  <!-- Product statistic col -->
          	  <div class="row">
	            <div class="col-md-12">
	              <div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title des-title" >Product Statistic</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>	                   
	                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	                  </div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <div class="row">
	                  
	                    <div class="col-md-12">
	                    	<div class="progress-group" style="padding-bottom: 8px;">
	                        <span class="progress-text">Top Product</span>
	                      	<div class="box-body no-padding">
		                      <ul class="users-list top-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Alexander Pierce</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Norman</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Jane</a>
		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">John</a>
		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Alexander</a>
		                          
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Sarah</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         		                          		                        
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                    </div>
	                    
	                    <div class="col-md-8">
	                      <p class="text-left">
	                        <strong>Monthly's Report</strong>
	                      </p>
	                      <div class="data-chart-setting" style="padding-bottom: 7px;float: right; margin-right: 13px;">
	                      
	                       <select class="pull-right" style="width: 120px;height: 30px;padding-left:10px;margin-left:15px;">
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      	
	                      	</select>
	                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
			                    <div class="btn-group" data-toggle="btn-toggle" >
			                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
			                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
			                    </div>
		                    </div>
	                      	
	                      </div>
	                      <div class="chart" id="w_Product_chart">
	                        <!-- Sales Chart Canvas -->
	                        <canvas id="Product_chart" style="height: 310px;"></canvas>
	                      </div><!-- /.chart-responsive -->
	                      
	                       
	                       <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL USERS</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL DISABLE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL ACTIVE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL UNAUTHORIZED</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
	                      
	                    </div><!-- /.col -->
	                    <div class="col-md-4">
	                      <p class="text-left">
	                        <strong>User's report</strong>
	                      </p>
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">New Users (last 1 month)</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                       
	                      <div class="progress-group">
	                        <span class="progress-text">Shop Owners</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Reported Users</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                       <div class="progress-group">
	                        <span class="progress-text">Unauthorized Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Disabled Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                     
	                    </div><!-- /.col -->
	                  
	                  
	                  </div><!-- /.row -->
	                </div><!-- ./box-body -->
	              
	              </div><!-- /.box -->
	            </div><!-- /.col -->
	          </div><!-- /.row -->
           	  <!-- end Product statistic col -->
           	  
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
           <!--  <section class="col-lg-5 connectedSortable">

            </section> --><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
      		<?php include 'elements/footnavbar.php';?>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        	<?php include 'elements/settingnavbar.php';?>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
    <script src="<?php echo base_url(); ?>assets/plugins/Chart.bundle.min.js"></script>
    <script id="display-sup_admin" type="text/x-jQuery-tmpl">
		  <li>
			  <img src="{{= setPhoto(admin_photo) }}" alt="{{= admin_name }}">
			  <a class="users-list-name" href="#">{{= admin_name }}</a>
		  </li>
   	</script>   
   	 <script id="display_admin" type="text/x-jQuery-tmpl">
		  <li>
			  <img src="{{= setPhoto(admin_photo) }}" alt="{{= admin_name }}">
			  <a class="users-list-name" href="#">{{= admin_name }}</a>
		  </li>
   	</script> 
   	<script id="display_top_shop" type="text/x-jQuery-tmpl">
		 <li>
		      <img src="{{= setPlacePhoto(shop_logo) }}" style="border-radius:5px;border:2px solid #ccc" alt="{{= shop_name_en }}">
		      <a class="users-list-name" href="#">{{= shop_name_en }}</a>
		 </li>
   	</script> 
   	<script id="display_shop_img"  type="text/x-jQuery-tmpl">
	    <li>
	    	  <img src="{{= setPlacePhoto(shop_logo)}}" alt="{{= shop_name_en }}" title="{{= shop_name_en }}" >	                         	                         
	  	</li>
   	</script>
   
   	 
    <script>

	
	var _show_month;
	var _month_dis = [];
    $(document).ready(function(){
    	    
    	  /*   var user_data = {
    			"l1": [500,650,720,690,800,550,465,375,489,687,752,930], //Total Users
    			"l2": [250,256,165,212,65,141,421,117,251,410,365,59],   //Total Unauthorized Users
    			"l3": [50,26,105,152,125,101,121,107,151,110,65,159]     //Total Disabled Users
    	    }; */
			_show_month = 12;
    	    for(i=_show_month-1 ; i>=0; i--){
				_month_dis.push(fn_getMonth(i));
        	}
    	    fn_createLineBarChart("user_chart",_month_dis);
    	    fn_createLineBarChart("place_chart",_month_dis);
    	    fn_createLineBarChart("post_chart",_month_dis);
    	    fn_createLineBarChart("Product_chart",_month_dis);
    	   
    	    initializeDashboard();
    });
	
	function initializeDashboard(){
				
	  $.ajax({
			 type: "GET",
			 url: $("#base_url").val()+"API/DashboardRestController/getinitializeddata", 
			 contentType : "application/json",
			 /* data : JSON.stringify({
				"req_data" : {
					"email" : $("#username").val(),
					"password": $("#pwd").val()
				 }
			 }),		 */	
			 success: function(data){
				 //var data = JSON.parse(data);
				 $("#ttl_place").html(data.total_place);
				 $("#ttl_post").html(data.total_post);
				 $("#ttl_product").html(data.total_product);
				 $("#ttl_user").html(data.total_user);

				 $("#today_place_register").html(data.today_place_register);
				 $("#reported_post").html(data.reported_post);

				 $("#num_sup_admin").html(data.total_sup_admin);
				 $("#display-sup_admin").tmpl(data.sup_admin_rec).appendTo("#sup_admin_result");
				 $("#num_admin").html(data.total_admin);
				 $("#display_admin").tmpl(data.admin_rec).appendTo("#admin_result");
				 $("#display_top_shop").tmpl(data.pop_shop).appendTo("#place_result");
				 
				 fn_createLineBarChart("place_chart", _month_dis , data.shop_monthly);
				 $(".total_place").html(data.total_place);
				 $("#new_place").html(data.thirty_day_shop_cnt);
				 var new_place_percentage =  (parseInt(data.thirty_day_shop_cnt)*100)/ parseInt(data.total_place);
				 console.log(new_place_percentage);
				 $("#new_place_percentage").css({
					"width" : new_place_percentage +"%"
				 });
				 $("#u_place").html(data.shop_unauth_cnt);
				 var u_place_percentage = (parseInt(data.shop_unauth_cnt)*100)/parseInt(data.total_place) ;
				 $("#u_place_percentage").css({
					"width" : u_place_percentage +"%"
				 });
				 $("#disabled_place").html(data.shop_disability_cnt);
				 var disabled_place_percentage = (parseInt(data.shop_disability_cnt)*100)/parseInt(data.total_place) ;
				 $("#disabled_place_percentage").css({
					"width" : disabled_place_percentage +"%"
				 });
				 $("#display_shop_img").tmpl(data.thirty_day_shop).appendTo("#pic_new_place");
				 $("#display_shop_img").tmpl(data.shop_unauth).appendTo("#u_place_pic");
				 $("#display_shop_img").tmpl(data.shop_disability).appendTo("#disabled_place_pic");
			
				  				
	  	 	 }
	  });  		  
	}

	function setPhoto(img_name){
		return $("#base_url").val()+"assets/dist/img/user1-128x128.jpg";
	}

	function setPlacePhoto(img_name){
		return $("#base_url").val()+"uploadimages/logo/small/"+img_name;
	}
    
    function fn_createLineBarChart(chart_id, chart_date, chart_data){
    	
    	if(chart_data == null){
    		
    		chart_data = {
    			"l1" : [],
    			"l2" : [],
    			"l3" : []   			
    		};
    		for(var i=0; i<12; i++){
    			chart_data.l1.push(0);
    			chart_data.l2.push(0);
    			chart_data.l3.push(0);
    
    		}
    	}
    	/* if(chart_date ==  null){
    		chart_date = ["January","Febuary","March","April","May","June","July","August","September","October","November","December"];
        }
    	 */
    	 console.log(chart_data.all);
    	 console.log(chart_data.u_shop);
    	 console.log(chart_data.d_shop);
     	var par = "#w_"+chart_id;
    	$(par).children().remove();
    	$(par).append("<canvas style=' height:310px;' id='"+chart_id+"'></canvas>"); 
    	
    	var limit_tick = 10;
    	var max_limitvalue = 200;
    	//var all_data = chart_data.l1.concat(chart_data.l2);
    	/* //var max_data = Math.max.apply(Math,all_data);
    	if(max_data<20){
    		limit_tick = 0;
    		max_limitvalue = 0;
    	} *//*else if(max_data > 5000 && max_data <= 10000){
    		limit_tick = 10;
    		max_limitvalue = 10000;
    	}*/
    	
    	  var config = {
    		data :{
    			labels: chart_date,
    			datasets: [ 
    				{
    				 label: "ff",
    				 lineTension: 0,
    				 type:"line",    				
    				 backgroundColor: "#F44336",
    				 borderColor: "#F44336",
    				 fill: false,
    				 borderWidth: 2,
    				 pointBorderColor: "#F44336",
    				 pointBackgroundColor: "white",
    				 pointHoverBorderWidth: 2,
    				 pointBorderWidth: 2,
    				 pointRadius: 4,
    				 pointHoverRadius: 5,
    				 pointHitRadius: 4,
    				data: chart_data.l0
    			},{
	   				 label: "ff",
					 lineTension: 0,
					 type:"line",    				
					 backgroundColor: "#4CAF50",
					 borderColor: "#4CAF50",
					 fill: false,
					 borderWidth: 2,
					 pointBorderColor: "#4CAF50",
					 pointBackgroundColor: "white",
					 pointHoverBorderWidth: 2,
					 pointBorderWidth: 2,
					 pointRadius: 4,
					 pointHoverRadius: 5,
					 pointHitRadius: 4,
					data: chart_data.l1
				},{
	   				 label: "ff",
					 lineTension: 0,
					 type:"line",    				
					 backgroundColor: "#f7cd4e",
					 borderColor: "#f7cd4e",
					 fill: false,
					 borderWidth: 2,
					 pointBorderColor: "#f7cd4e",
					 pointBackgroundColor: "white",
					 pointHoverBorderWidth: 2,
					 pointBorderWidth: 2,
					 pointRadius: 4,
					 pointHoverRadius: 5,
					 pointHitRadius: 4,
					data: chart_data.l2
				},{
    				 label: "d",				 
    				 type:"bar",
    				 backgroundColor: "#3891d8",
    				 borderColor: "#3891d8",
    				 borderWidth: 1,
    				 data: chart_data.all
    			}
    			]
    		},options: {
    			responsive: true,
    			title:{
    				display:false
    			},
    			legend: {
    				display: false
    			},
    			animation: {
    	        	
    				onComplete: function () {
    					var chartInstance = this.chart,
    						ctx = chartInstance.ctx;
    						ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
    						ctx.textAlign = 'center';
    						ctx.textBaseline = 'bottom';
    						var all_val = [];
    						this.data.datasets.forEach(function (dataset, i) {
    						
    							var meta = chartInstance.controller.getDatasetMeta(i);											
    							meta.data.forEach(function (bar, index) {
    								var data = dataset.data[index];   						
    								all_val.push(data);
    							});							
    							if(dataset.type == "bar"){
    								
    								var max_val = Math.max.apply( Math, all_val );					
    								meta.data.forEach(function (bar, index) {
    									var data = dataset.data[index]; 

    									var cur_val = (data / max_val)*100;
    									var dis_data = "";
    									if(data < 1000){
    										dis_data = data+"";
    									}else{
    										dis_data = data+'';
    									}	
    									
    									if(cur_val > 95.8){
    										
    										var color = "white";
    										if(dis_data.length > 7){
    											color = "#BDBDBD";
    										}
    										ctx.fillStyle = color;
    										ctx.fillText(dis_data, bar._model.x, bar._model.y+17);
    									}else{
    										ctx.fillStyle = 'gray';
    										ctx.fillText(dis_data, bar._model.x, bar._model.y-2);
    									}
    									
    								});
    								
    								
    							}
    							
    						});
    				}
    	        },
    			tooltips: {			
    				mode: 'label',
    				callbacks: {
                        label: function(tooltipItems, data) {
                        	return  data.datasets[tooltipItems.datasetIndex].label +" : "+ fn_numFormat(tooltipItems.yLabel) + "";
                        }
                    }               
    			},
    			hover: {
    				animationDuration: 0
    			},				
    			scales: {
    				xAxes: [{
    					display: true,
    					
    					scaleLabel: {
    						display: true
    					},
    					gridLines: {
    						show: false,
    						drawBorder: false,
    						color: "rgba(0,0,0,0)"
    					}
    				}],
    				yAxes: [{
    					display: true,
    					ticks: {
    						beginAtZero: true,
    						callback: function(label, index, labels) {

    							var dis_label = "";
    							if(label >= 1000){
									dis_label = fn_numFormat(label /1000) + "K";
        						}else{
            						if(label < 1){
										dis_label = label.toFixed(1);
                					}else{
                						dis_label = fn_numFormat(label);
                    				}
									
            					}
    							
    							return dis_label;
    						},
    						maxTicksLimit: 10
    						
    					},
    					gridLines: {
    						show: true,
    						color: "#d4d4d4",
    						borderDash: [3, 3]
    					},
    					scaleLabel: {
    						display: true

    					}
    				}]
    			}
    	    }
    	 };
    	 var myBarChart = Chart.Bar(document.getElementById(chart_id), config);
    	 Chart.pluginService.register({
    		afterDatasetsDraw: function(chart) {
    			var ctx = chart.chart.ctx;					
    								
    			var xAxe = chart.config.options.scales.xAxes[0];
    			var xScale = chart.scales[xAxe.id];
    			var yAxe = chart.config.options.scales.yAxes[0];
    			var yScale = chart.scales[yAxe.id];
    			
    			ctx.strokeStyle = "rgb(172, 172, 172)";
    			ctx.beginPath();
    			ctx.moveTo(xScale.right,yScale.bottom+0.5);
    			ctx.lineTo(xScale.left-10, yScale.bottom+0.5);
    			ctx.stroke();
    			
    								
    		}	
    	 });
    }
    
    function fn_numFormat(val){
    	var myval = parseFloat(val);
    	if(myval < 1000){
    		return val;
    	}
    	return parseFloat(val).toFixed(1).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").split(".")[0];
    }

    function fn_getMonthOfYear(date){

    	var monthofyear = ["Jan", "Feb", "Mar", 
			"Apr", "May", "Jun", "Jul", "Aug", "Sep", 
			"Oct", "Nov", "Dec"];
    	var m = new Date(date).getMonth();
    	return monthofyear[m];
    }

    function fn_getMonth( num_month , format){
    	
    	var today = new Date();
    	today.setDate(1);
    	today.setMonth(today.getMonth()-num_month);

    	var dd =today.getDate();
    	var mm=today.getMonth()+1;
    	var yyyy=today.getFullYear();
    	if(dd<10)	
    		dd='0'+dd;	
    	if(mm<10 )
    	    mm='0'+mm;
    	if(format == "yyyymmdd")
    		return yyyy+""+mm+""+dd;
    	else if(format == "yyyy-mm-dd"){
    		return yyyy+"-"+mm+"-"+dd;
    	}
    	else {
    		/*var m_names = new Array("Jan", "Feb", "Mar", 
    				"Apr", "May", "Jun", "Jul", "Aug", "Sep", 
    				"Oct", "Nov", "Dec");*/
    		return mm+"/"+yyyy + "("+fn_getMonthOfYear(yyyy+"/"+mm+"/"+dd)+")";
    	}
    		
    }
    </script>
  </body>
</html>
