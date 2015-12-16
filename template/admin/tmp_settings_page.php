<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i><?php echo $title; ?></h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						<li><i class="fa fa-file-text-o"></i>Settings</li>
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
                              <form class="form-horizontal " method="post">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Site title</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="sitetitle"  value="<?php echo $settings[0]['site_title']; ?>"class="form-control" >
                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Site Description</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="sitedescription" value="<?php echo $settings[0]['site_description']; ?>" class="form-control" >
                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Meta keyword</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="metakeyword" value="<?php echo $settings[0]['meta_keyword']; ?>" class="form-control" >
										</div>
										</div>
									  <div class="form-group">
                                      <label class="col-sm-2 control-label">Meta Description</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="metadescription" value="<?php echo $settings[0]['meta_description']; ?>"class="form-control" >
										  
                                      </div>
									  </div>
									  <div class="form-group">
                                      <label class="col-sm-2 control-label">Facebook</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="facebook" value="<?php echo $settings[0]['facebook_link']; ?>"class="form-control" >
										  
                                      </div>
									  </div>
									  <div class="form-group">
                                      <label class="col-sm-2 control-label">Twitter</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="twitter" value="<?php echo $settings[0]['twitter_link']; ?>"  class="form-control" >
										  
                                      </div>
									  </div>
									  <div class="form-group">
                                      <label class="col-sm-2 control-label">Google+</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="google" value="<?php echo $settings[0]['googleplus_link']; ?>" class="form-control">
										  
                                      </div>
                                  </div>
                                  
								  <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                              </form>
                          </div>
                      </section>
					 </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->