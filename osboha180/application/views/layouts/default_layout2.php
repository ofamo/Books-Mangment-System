<!DOCTYPE html>
<html lang="ar">
<head>
                  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                <meta charset="utf-8" />
                <title>مشروع اصبوحة</title>
 
                <meta name="description" content="overview &amp; stats" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 
                <!-- bootstrap & fontawesome -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
                <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="theme-stylesheet" id="theme-style" />
     <link  rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/new_style.css" />

                <!-- page specific plugin styles -->
<style>
.table.table-bordered>thead>tr>th,
.table.table-bordered>tbody>tr>td{
	text-align:right;
}
.btn.btn-custom{
	    float: right;
    border-radius: 20px;
    background: #f5f5f5 !important;
    border-color: #e6e6e6 !important;
	margin-bottom:3px;
}
.btn.btn-custom a{
	text-decoration:none;
}
.btn.btn-scroll-up{
	    display: inline-block;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    user-select: none;
    border: 1px solid transparent;
    border-radius: 4px;
    color: white;
    background-color: #5c6776;
    border-color: #204d74;
}
</style>
				</head>
 
<body class="no-skin">

	
 <!--main nav bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="osboh-brand" href="#">أصبوحة180</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         
   
	<li class="">
					<a href="#">
						<i class="menu-icon fa fa-list-alt"></i>
						<span class="menu-text">  مراجعة الكتب</span>
					</a>
				</li>
      </ul>
	 
<?php
				$user = $this->session->userdata('logged_in');
		//extract($user);
			
			?>
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php  echo $user['Name']; ?>:أهلا </a></li>
      <li><a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> تسجيل خروج </a></li>
    </ul>
    </div>
  </div>
</nav>	 
<!--End main nav bar-->
		<div class="main-content">
			<div class="main-content-inner">
				

			<div class="page-content">
				<div class="container">
					<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<?php echo $contents;?>
					<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->
 
		
 
		<a href="#" id="btn-scroll-up" class="btn btn-scroll-up">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->
 
	<!-- basic scripts -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
</body>
</html>
