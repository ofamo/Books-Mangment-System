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

				
<style>
.table.table-bordered>thead>tr>th,
.table.table-bordered>tbody>tr>td{
	text-align:right;
}
div.main-content{
  display:hidden;
  text-align: center;	
  border-left: 6px solid ;
  background-color: lightblue;
  
}
div.done :empty {
  display:none;
}
div.done{
  
  text-align: center;	
  border-left: 6px solid black;
  background-color: lightgreen;
  
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
      <a class="navbar-brand" href="#">أصبوحة180</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="<?php echo $title == 'Home' ? 'active' : '' ?>">
	  <a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/B_book" >
							<i class="ace-icon fa fa-home home-icon"></i>
							<span class="menu-text"> الرئيسية</span>
							</a>
							</li>
      <li class="<?php echo $title == 'Home' ? 'active' : '' ?>">
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/B_book/">
						<i class="fa fa-server" aria-hidden="true"></i>
						<span class="menu-text"> جودة الكتب </span>
					</a>
				</li>
   
<!--	<li class="<?php echo $title == 'Home' ? 'active' : '' ?>">
					<a href="/osboha180/admin/reference/1" >
						<i class="menu-icon fa fa-list-alt"></i>
						<span class="menu-text">  مراجعة الكتب</span>
					</a>
				</li>-->
				<li class="<?php echo $title == 'Home' ? 'active' : '' ?>">
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/1" >
							<i class="fa fa-folder-open-o" aria-hidden="true"></i>
							<span class="menu-text"> اقتراحات السفراء</span>
							</a>
							
						</li>
							<li class="<?php echo $title == 'Home' ? 'active' : '' ?>">
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/2" >
							<i class="fa fa-times" aria-hidden="true"></i>
							<span class="menu-text"> كتب مرفوضة</span>
							</a>
							
						</li>
					</li>
							<li class="<?php echo $title == 'Home' ? 'active' : '' ?>">
					<a href="https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/3" >
								<i class="fa fa-folder-open-o" aria-hidden="true"></i>
							<span class="menu-text"> لوحة تحكم الاقتراحات</span>
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
<div class="done" style="color:red"><?php if(isset($response)){echo $response	;} ?><br></div>	
<div class="main-content">
			<div class="main-content-inner">
				
<div class="notes" dir="rtl" style="color:black"> موعد الاطلاق: <?php if(isset($sd)){echo " GMT ".$sd;}?> <br>
	
					موعد الاغلاق: <?php if(isset($ed)){echo " GMT ".$ed;}?></div>
	 <div style=" width:200px; margin-right:auto; margin-left:auto;">
	 <form id="start_end" method='post' action='https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/3'>
		<div class="notes2"> <table>
			<tr><td><label style="color:black; " for="start"> تاريخ بداية التقديم للاقتراحات</label>
			<tr><td><input style=" dir = rtl;" type="datetime-local" name="start" id="start" required ></td></tr>
			<tr><td><label style="color:black" for="end">تاريخ نهاية التقديم للاقتراحات </label>
			<tr><td><input style=" ;" type="datetime-local" name="end" id="end" required></td></tr>
		<tr><td><input name="send" id="submit" type="submit" value="submit" form="start_end"/></td></tr>
		</table>
		</dive>
		</form>
		</div>
			</div>
		</div><!-- /.main-content -->
 
		
 
		<br><br><br>
	</div><!-- /.main-container -->

 
	<!-- basic scripts -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
</body>
</html>
