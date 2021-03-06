<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Slider</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Slider </li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  
					  
                          <header class="panel-heading">
                             <?php echo isset($slider) ? 'Edit' : 'Add';?> Form 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" enctype="multipart/form-data" id="slider_form">
                                 
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Title</label>
                                      <div class="col-sm-10">

                                          <input type="text" name="title" id="title" required value="<?php echo isset($slider) ? $slider['title'] : '';?>" class="form-control" >

                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Link</label>
                                      <div class="col-sm-10">

                                          <input type="text" name="link" id="link" required value="<?php echo isset($slider) ? $slider['link'] : '';?>" class="form-control" >

                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Image</label>
                                      <div class="col-sm-10">

                                          <input type="file" name="image" id="image" required placeholder="upload images">

										  <?php if(isset($slider) && !empty($slider['image'])) {?>
											<img src="<?php echo BASE_URL.'uploads/'.$slider['image']?>" width="50" height="50">
											<input type="hidden" name="old_image" value="<?php echo $slider['image'];?>">
										  <?php }?>
                                      </div>
                                  </div>
                                  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Status</label>
                                      <div class="col-lg-2">
                                          <!--<input type="text" name="description" class="form-control" placeholder="placeholder">-->
										  <select name="status" required class="form-control">
										  <option value="">Select status</option>
										  <option <?php echo isset($slider) && $slider['status']=='Yes' ? 'selected' : '';?> value="Yes">Yes</option>
										  <option <?php echo isset($slider) && $slider['status']=='No' ? 'selected' : '';?> value="No">No</option>
										  </select>
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