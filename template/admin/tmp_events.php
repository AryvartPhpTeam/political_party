<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Events</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						
						<li><i class="icon_document_alt"></i><a href="<?php echo BASE_URL.'admin/events.php'?>">Events</a></li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  					  
                          <header class="panel-heading">
                              Add Events
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post"  id= "events_form" enctype="multipart/form-data" novalidate >
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Event Title</label>
                                      <div class="col-sm-10">
                                          <input required type="text" name="eventtitle" value="<?php echo isset($mang) ? $mang['event_title'] : '';?>" id="eventtitle" class="form-control">
                                      </div>
                                  </div>
								  
								 <div class="form-group">
                                      <label class="control-label col-sm-2">Description</label>
                                      <div class="col-sm-10">
                                      <textarea class="form-control ckeditor" name="description"  rows="6"><?php echo isset($mang) ? $mang['description'] :'' ;?></textarea>
                                      </div>
                                 </div>
								  
								         <div class="form-group">
                                              <label class="col-sm-2 control-label">Start date and time</label>
                                              <div class="col-sm-10">
                                              <input required id="dp1" type="text" name="stdate" value="<?php echo isset($mang) ? $mang['start_date_and_time'] : '';?>"  class="form-control">
                                            </div>
										 </div>
										 <div class="form-group">
                                              <label class="col-sm-2 control-label">End date and time</label>
                                              <div class="col-sm-10">
                                              <input required id="dp2"  type="text" name="etdate" value="<?php echo isset($mang) ? $mang['end_date_and_time'] : '';?>" class="form-control">
                                            </div>
										
                                          </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Location</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name="location" value="<?php echo isset($mang) ? $mang['location'] : '';?>" id="location" class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Status</label>
                                      <div class="col-sm-10">
                                          <select  name="status"  class="form-control" >
                                          <option value="" id="status" >Select</option>
										  <option <?php echo isset($mang) && $mang['status']=='yes' ? 'selected' : '';?> value="yes">yes</option>
										  <option <?php echo isset($mang) && $mang['status']=='no' ? 'selected' : '';?> value="no">no</option>
										  </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Event Head</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name="eventhead" value="<?php echo isset($mang) ? $mang['event_head'] : '';?>"id="eventhead" class="form-control" >
                                      </div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Image</label>
                                      <div class="col-sm-10">
                                          <input type="file" name="image"  placeholder="placeholder">
										  <?php if(isset($mang) && !empty($mang['image'])) {?>
											<img src="<?php echo BASE_URL.'uploads/'.$mang['image']?>" width="50" height="50">
											<input type="hidden" name="old_image" value="<?php echo $mang['image'];?>">
										  <?php }?>
                                      </div>
                                  </div>
                                  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Event contact</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name="eventcontact" value="<?php echo isset($mang) ? $mang['event_contact'] : '';?>" id="eventcontact"class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Event Website</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name="eventwebsite" value="<?php echo isset($mang) ? $mang['event_website'] : '';?>" id="eventwebsite" class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">No Of Participant</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name="noofparticipant" value="<?php echo isset($mang) ? $mang['no_of_participant'] : '';?>" id="noof participant" class="form-control" >
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