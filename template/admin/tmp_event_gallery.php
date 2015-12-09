<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		      <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Event Gallery</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Event Gallery</li>
						
					</ol>
				</div>
			  </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Event Gallery 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" enctype="multipart/form-data" id="eventgallery_form">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Event Title</label>
                                      <div class="col-sm-10">
                                         
										 <select name="event_title"  class="form-control" placeholder="placeholder">
										 <option required value="" id="event_title">select</option>
										 <?php foreach($event_res as $res){ ?>
										  <option value="<?php echo $res['id']; ?>" ><?php echo $res['event_title']; ?></option>
										  <?php } ?>
										   </select>
										
                                      </div>
                                  </div>
                                                                 								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Image</label>
                                      <div class="col-sm-4">
                                          <input required type="file" name="image[]" id="image">
										  
									  </div>
									<input type="button" name="btn" value="Add" class="addfield">
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

<div id="field">
<script id="backup" type="text/template">				  
	<div class="form-group">
        <label class="col-sm-2 control-label">Image</label>
        <div class="col-sm-4">
        <input required type="file" name="image[]" id="image">
		</div>
		<input type="button" name="remove" value="Remove"  class="removefield">
   </div>
</script>
</div>