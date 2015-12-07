<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Pages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Pages</li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <?php echo isset($pages) ? 'Edit' : 'Add';?> Form 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" enctype="multipart/form-data">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Title</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="title" value="<?php echo isset($pages) ? $pages['title'] : '';?>" class="form-control" placeholder="placeholder">
                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Description</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="description" value="<?php echo isset($pages) ? $pages['description'] : '';?>" class="form-control" placeholder="placeholder">
                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Image</label>
                                      <div class="col-sm-10">
                                          <input type="file" name="image"  placeholder="placeholder">
										  <?php if(isset($pages) && !empty($pages['image'])) {?>
											<img src="<?php echo BASE_URL.'uploads/'.$pages['image']?>" width="50" height="50">
											<input type="hidden" name="old_image" value="<?php echo $pages['image'];?>">
										  <?php }?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Status</label>
                                      <div class="col-sm-10">
                                          <select name="status"  class="form-control" placeholder="placeholder">
										  <option >select</option>
										  <option value="1">yes</option>
										  <option value="0">no</option>
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