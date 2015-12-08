<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-file-text-o"></i>Form elements</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Form 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" >
							    <?php if(isset($error1)){?><p style="color:red;"><?php echo $error1;?></p><?php }?>
                                <?php if(isset($error)){?><p style="color:red;"><?php echo $error;?></p><?php }?>  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">OLD PASSWORD</label>
                                      <div class="col-sm-10">
                                          <input type="password" required name="currentPassword"  class="form-control" placeholder="type your old password" >
                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">New PASSWORD</label>
                                      <div class="col-sm-10">
                                          <input type="password" required name="newPassword"  class="form-control" placeholder="Type your new password" id="txtPassword">
                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">CONFIRM PASSWORD</label>
                                      <div class="col-sm-10">
                                          <input type="password" required name="confirmPassword" class="form-control" placeholder="Type your confirm new password" id="txtConfirmPassword">
										 
                                      </div>
                                  </div>
                                  
								  <button class="btn btn-primary" name="submit" type="submit" id="btnSubmit" onclick="return Validate()">Submit</button>
                              </form>
                          </div>
                      </section>
					 </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->