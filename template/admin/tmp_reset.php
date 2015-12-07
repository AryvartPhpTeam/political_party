<div class="container">

      <form method="post" class="form-validate login-form" id="reset_form" novalidate> 	  
		<div class="login-wrap">
            <p><span> Reset Password </span></p>
            <div class="form-group">
              
              <input required name="newpassword" id="newpassword" type="password" class="form-control" placeholder="New Password" autofocus>
            </div>
			<div class="form-group">
              
              <input required name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password" >
            </div>
			
		                         
            <button name="submit" class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
            <input class="btn btn-info btn-lg btn-block" type="reset" value="Cancel">
        </div>
      </form>

    </div>
	<script src="<?php echo JS;?>jquery.js"></script>
	<script src="<?php echo JS;?>jquery.validate.min.js"></script>
	<script src="<?php echo JS;?>custom_changes.js"></script>