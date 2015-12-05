<div class="container">

      <form method="post" class="login-form">        
        <?php if(isset($error)){?><p style="color:red;"><?php echo $error;?></p><?php }?>
		<div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input name="username" type="text" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button name="submit" class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <a href="<?php echo BASE_URL.'admin/signup.php'?>" class="btn btn-info btn-lg btn-block" type="submit" >Signup</a>
        </div>
      </form>

    </div>