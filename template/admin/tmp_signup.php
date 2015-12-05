<div class="container">

      <form method="post" class="form-validate login-form" id="signup_form" novalidate> 	  
		<div class="login-wrap">
            <p><span> Sign Up Form</span></p>
            <div class="form-group">
              
              <input required name="username" id="username" type="text" class="form-control" placeholder="Username" autofocus>
            </div>
			<div class="form-group">
              
              <input required name="firstname" id="firstname" type="text" class="form-control" placeholder="Firstname" >
            </div>
			<div class="form-group">
              
              <input required name="lastname" id="lastname" type="text" class="form-control" placeholder="Lastname" >
            </div>
			<div class="form-group">
              
              <input required name="email" id="email" type="text" class="form-control" placeholder="Mail Id" >
            </div>
            <div class="form-group">
                
                <input required name="password" id="password" type="password" class="form-control" placeholder="Password">
            </div>
			<div class="form-group">
               
                <input required name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password">
            </div>
			
              <select name="status"hidden >
			  <option value="0">Status</option>
			  </select>
            			
              <select name="role"hidden>
			  <option value="1">Admin</option>
			  </select>
           
            <button name="submit" class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
            <input class="btn btn-info btn-lg btn-block" type="reset" value="Cancel">
        </div>
      </form>

    </div>
	<script src="<?php echo JS;?>jquery.js"></script>
	<script src="<?php echo JS;?>jquery.validate.min.js"></script>
	<script src="<?php echo JS;?>custom_changes.js"></script>