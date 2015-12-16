<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> <?php echo $title; ?></h3>
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

                             <?php echo isset($pages) ? 'Edit' : 'Add';?> Page
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" enctype="multipart/form-data" id="page_form">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Title</label>
                                      <div class="col-sm-8">
                                          <input type="text" required id="title" name="title" value="<?php echo isset($pages) ? $pages['title'] : '';?>" class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                                  <label class="control-label col-sm-2">Description</label>
                                                  <div class="col-sm-8">
                                                      <textarea required class="form-control ckeditor"  id="description" name="description"  rows="6"><?php echo isset($pages) ? $pages['description'] : '';?></textarea>
                                                  </div>
                                 </div>
                                 
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Image</label>
                                      <div class="col-sm-8">
                                          <input type="file" name="image" <?php if(!isset($pages)){ ?> required <?php } ?>placeholder="placeholder">
										  <?php if(isset($pages) && !empty($pages['image'])) {?>
											<img src="<?php echo BASE_URL.'uploads/'.$pages['image']?>" width="50" height="50">
											<input  type="hidden" name="old_image" value="<?php echo $pages['image'];?>">
										  <?php }?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Status</label>
                                      <div class="col-lg-8">
                                          <select   name="status"  class="form-control" >
										  <option value="" required>select</option>
										  <option <?php echo isset($pages) && $pages['status']=='yes' ? 'selected' : '';?> value="yes">yes</option>
										  <option <?php echo isset($pages) && $pages['status']=='no' ? 'selected' : '';?> value="no">no</option>
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