<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add News</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Add News</li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  
					  
                          <header class="panel-heading">
                             <?php echo isset($news) ? 'Edit' : 'Add';?> News 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" enctype="multipart/form-data" id="news_form">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Title</label>
                                      <div class="col-sm-10">
                                          <input required type="text" name="title" value="<?php echo isset($news) ? $news['title'] : '';?>" class="form-control" placeholder="placeholder">
                                      </div>
                                  </div>
								  <div class="form-group">
                                        <label class="control-label col-sm-2">Description</label>
                                            <div class="col-sm-8">
                                                <textarea required class="form-control ckeditor"  id="description" name="description"  rows="6"><?php echo isset($news) ? $news['description'] : '';?></textarea>
                                            </div>
                                 </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Image</label>
                                      <div class="col-sm-10">
                                          <input  type="file" <?php if(!isset($news)){ ?> required <?php } ?> name="image"  placeholder="placeholder">
										  <?php if(isset($news) && !empty($news['image'])) {?>
											<img src="<?php echo BASE_URL.'uploads/'.$news['image']?>" width="50" height="50">
											<input type="hidden" name="old_image" value="<?php echo $news['image'];?>">
										  <?php }?>
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