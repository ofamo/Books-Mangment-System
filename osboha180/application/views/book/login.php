<head><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/register_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!------ Include the above in your HEAD tag ---------->

<div id="fullscreen_bg" class="fullscreen_bg"/>
<div id="regContainer" class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
<div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
	
               <form id="login-form" action="" method="post" role="form">
			   			 <?php 
	 $message = $this->session->flashdata('error');
    if (isset($message)) {
        echo '<div class="alert alert-danger">' . $message . '</div>';
         $this->session->unset_userdata('error');
    }
	?>
	
			    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                  <div class="form-group">
                    <label for="email">Email</label>
					  <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                    <input type="text" name="email" id="email" tabindex="1" class="form-control" required placeholder="Email" value="">
                  </div>
				   </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
					 <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                    <input type="password" name="Password" id="Password" tabindex="2" class="form-control" required placeholder="Password">
                  </div>
                 </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                </form>
				   </div>
				      </div>
					     </div>
						   </div>
				      </div>
					     </div>
						 </div>
						   <script>
  $(function() {

    $('#login-form-link').click(function(e) {
		 window.location = "<?php echo base_url()?>admin/login";
	});
	$('#register-form-link').click(function(e) {
	 window.location = "<?php echo base_url()?>admin/register";
	});

});
  </script>