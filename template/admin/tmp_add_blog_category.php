<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Blog Category</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Blog Category</li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
						               <?php echo isset($blog) ? 'Edit' : 'Add';?> Form 
                             </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" enctype="multipart/form-data" id="blog_category_form">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Name</label>
                                      <div class="col-sm-8">
                                          <input type="text" required id="category_name" name="category_name" value="<?php echo isset($blog) ? $blog['category_name'] : '';?>"  class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Status</label>
                                      <div class="col-lg-8">
                                          <select name="status" class="form-control" >
										  <option value="" required>select</option>
										  <option  <?php echo isset($blog) && $blog['status']=='Yes' ? 'selected' : '';?> value="Yes">yes</option>
										  <option  <?php echo isset($blog) && $blog['status']=='No' ? 'selected' : '';?> value="No">No</option>
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