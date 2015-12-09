<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add leaders</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						
						<li><i class="icon_document_alt"></i><a href="<?php echo BASE_URL.'admin/leaders.php'?>">Leaders</a></li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  					  
                          <header class="panel-heading">
                              Add Leaders
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post"  id= "leader_form"  novalidate >
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Leader Title</label>
                                      <div class="col-sm-10">
                                          <input required type="text" name="leadertitle" value="<?php echo isset($lead) ? $lead['leader_title'] : '';?>" id="leadertitle" class="form-control">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Position</label>
                                      <div class="col-sm-10">
                                          <input required type="text" name="position" value="<?php echo isset($lead) ? $lead['position'] : '';?>" id="position" class="form-control">
                                      </div>
                                  </div>
								 
								     <div class="form-group">
                                              <label class="col-sm-2 control-label">Join Date</label>
                                              <div class="col-sm-10">
                                              <input required id="dp1" type="text" name="joindate" value="<?php echo isset($lead) ? $lead['join_date'] : '';?>"  class="form-control">
                                            </div>
										 </div>
										 
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Age</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name="age" value="<?php echo isset($lead) ? $lead['age'] : '';?>" id="age" class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Date Of Birth</label>
                                      <div class="col-sm-10">
                                          <input id="dp2" type="text" required name="dob" value="<?php echo isset($lead) ? $lead['date_of_birth'] : '';?>" id="dob" class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Native_place</label>
                                      <div class="col-sm-10">
                                          <input type="text" required name="nativeplace" value="<?php echo isset($lead) ? $lead['native_place'] : '';?>" id="nativeplace" class="form-control" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">status</label>
                                      <div class="col-sm-10">
                                          <select name="status"  class="form-control">
										  <option value="" id="status" >status</option>
										  <option <?php echo isset($lead) && $lead['status']=='yes' ? 'selected':'' ?> value="no">yes</option>
										  <option <?php echo isset($lead) && $lead['status']=='no' ? 'selected':''?> value="yes">no</option>
										  </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Summary</label>
                                      <div class="col-sm-10">
                                        <textarea class="form-control ckeditor" name="summary" rows="6"><?php echo isset ($lead)? $lead['summary']  :'';?></textarea>  
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