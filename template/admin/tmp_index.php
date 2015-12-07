<div class="container">

      <form method="post" class="form-validate login-form" id="login_form" novalidate>        
        <?php if(isset($error)){?><p style="color:red;"><?php echo $error;?></p><?php }?>
		<div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="form-group ">
              
              <input required name="username" id="username" type="text" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="form-group ">
                
                <input required name="password" id="password" type="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="<?php echo BASE_URL.'admin/forgot.php'?>"> Forgot Password?</a></span>
            </label>
            <button name="submit" class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <a href="<?php echo BASE_URL.'admin/signup.php'?>" class="btn btn-info btn-lg btn-block" type="submit" >Signup</a>
        </div>
      </form>

    </div>
	<script src="<?php echo JS;?>jquery.js"></script>
	<script src="<?php echo JS;?>jquery.validate.min.js"></script>
	<script src="<?php echo JS;?>custom_changes.js"></script>