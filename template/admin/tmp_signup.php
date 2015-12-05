<div class="container">

      <form method="post" class="login-form"> 	  
		<div class="login-wrap">
            <p><span> Sign Up Form</span></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input name="username" type="text" class="form-control" placeholder="Username" autofocus>
            </div>
			<div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input name="firstname" type="text" class="form-control" placeholder="Firstname" >
            </div>
			<div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input name="lastname" type="text" class="form-control" placeholder="Lastname" >
            </div>
			<div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input name="email" type="text" class="form-control" placeholder="Mail Id" >
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
			<div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Password">
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