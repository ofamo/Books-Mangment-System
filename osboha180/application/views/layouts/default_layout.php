<!DOCTYPE html>
<html lang="ar">
<head>
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                <meta charset="utf-8" />
                <title>مشروع اصبوحة</title>
 
                <meta name="description" content="overview &amp; stats" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 
                <!-- bootstrap & fontawesome -->
                <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
                <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="theme-stylesheet" id="theme-style" />
                  <link  rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/new_style.css" />
                <!-- page specific plugin styles -->

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
          <li >
	  <a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/B_book" >
							<i class="ace-icon fa fa-home home-icon"></i>
							<span class="menu-text"> الرئيسية</span>
							</a>
							</li>
      <li >
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/B_book/">
						<i class="fa fa-server" aria-hidden="true"></i>
						<span class="menu-text"> جودة الكتب </span>
					</a>
				</li>
   
<!--	<li >
					<a href="/osboha180/admin/reference/1" >
						<i class="menu-icon fa fa-list-alt"></i>
						t<span class="menu-text">  مراجعة الكتب</span>
					</a>
				</li>-->
				<li class="">
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/1" >
							<i class="fa fa-folder-open-o" aria-hidden="true"></i>
							<span class="menu-text"> اقتراحات السفراء</span>
							</a>
							
						</li>
							<li >
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/2" >
							<i class="fa fa-times" aria-hidden="true"></i>
							<span class="menu-text"> كتب مرفوضة</span>
							</a>
							
						</li>
				
							<li >
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/3" >
								<i class="fa fa-folder-open-o" aria-hidden="true"></i>
							<span class="menu-text"> لوحة تحكم الاقتراحات</span>
								</a>
							
				</li>
			
					<li>
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/References/" >
								<i class="fa fa-user-plus" aria-hidden="true"></i>	
							<span class="menu-text"> المستخدمين الجدد</span>
							</a>
							
						</li>		
						
						<li>
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/Panel/" >
								<i class="fa fa-user-plus" aria-hidden="true"></i>	
							<span class="menu-text"> المستخدمين</span>
							</a>
							
						</li>	
				
      </ul>
	 
		<?php
		
				$user = $this->session->userdata('logged_in');
			//	extract($user);
			?>
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $user['Name']; ?>:أهلا </a></li>
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
