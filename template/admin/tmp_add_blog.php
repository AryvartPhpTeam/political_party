<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add blogs</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Add blogs</li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            <?php echo isset($blog) ? 'Edit' : 'Add';?> Blog 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post"  id="blog_form">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Title</label>
                                      <div class="col-sm-8">
                                          <input type="text" required id="title" name="title" value="<?php echo isset($blog) ? $blog['title'] : '';?>" class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Category</label>
                                      <div class="col-sm-8">
                                         
										 <select name="category"  class="form-control" placeholder="placeholder">
										 <option required value="" >select</option>
										 <?php foreach($blog_res as $res){ ?>
										  <option <?php echo isset($blog) && $blog['category']==$res['id'] ? 'selected' : '';?> value="<?php echo $res['id']; ?>" ><?php echo $res['category_name']; ?></option>
										  <?php } ?>
										   </select>
										
                                      </div>
                                  </div>
								  <div class="form-group">
                                                  <label class="control-label col-sm-2">Description</label>
                                                  <div class="col-sm-8">
                                                      <textarea required class="form-control ckeditor"  name="description" id="description" rows="6"><?php echo isset($blog) ? $blog['description'] : '';?></textarea>
                                                  </div>
                                 </div>
								 <div class="form-group">
                                      <label class="col-sm-2 control-label">Status</label>
                                      <div class="col-lg-8">
                                          <select name="status" class="form-control" >
										  <option value="" required>select</option>
										  <option <?php echo isset($blog) && $blog['status']=='yes' ? 'selected' : '';?> value="yes">yes</option>
										  <option <?php echo isset($blog) && $blog['status']=='no' ? 'selected' : '';?> value="no">no</option>
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