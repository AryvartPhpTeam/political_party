<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Events Management</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-file-text-o"></i>Events Management</li>
					</ol> 
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
						  <form method="post" class="form-horizontal ">
                          <header class="panel-heading">
                             Events List
                          </header>
                          <div class="panel-body">
                              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  <form method="post" >
                          <header class="panel-heading">
                            <div class="navbar-form ">Advanced  Select   
							    <select name="select" class="form-control" >
								<option>select</option>
								<option  value="publish">Bulk Publish</option>
								<option  value="unpublish">Bulk Unpublish</option>
							    </select>
								<input type="submit" class="btn btn-primary" name="submit" value="submit" />
						    </div>
							</div>
						   </header>
						  
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                                 <th><input type="checkbox"  id="check" /></th>
                                 <th><i class=""></i>Event Title</th>
                                 <th><i class=""></i>Sart Date and Time</th>
								  <th><i class=""></i>End Date and Time</th>
								  <th><i class=""></i>Location</th>
								  <th><i class=""></i>Status</th>
								  <th><i class=""></i>image</th>
								  <th><i class=""></i>Event Website</th>
								  <th><i class=""></i>No of Participant</th>
								  <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php foreach($events as $res){?>
							  <tr>
								 <td><input type="checkbox" class="checkbox" name="check[]" value="<?php echo $res['id'] ?>"></td>
                                 <td><?php echo $res['event_title']?></td>
                                 <td><?php echo date("d-m-Y H:i", strtotime($res['start_date_and_time']))?></td>
								 <td><?php echo date("d-m-Y H:i", strtotime($res['end_date_and_time']))?></td>
								 <td><?php echo $res['location']?></td>
								 <td><?php echo $res['status']?></td>
								 <td><img src="<?php echo BASE_URL.'uploads/'.$res['image']?>" width="50" height="50"></td>
								 <td><?php echo $res['event_website']?></td>
								 <td><?php echo $res['no_of_participant']?></td>
								 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo BASE_URL.'admin/events.php?id='.$res['id']?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="<?php echo BASE_URL.'admin/events_management.php?delete='.$res['id']?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                               <?php }?>                            
                           </tbody>
                        </table>
						</form>
						<?php echo $ownobj->getpagination('events', $page, $per_page);?>
                      </section>
                  </div>
              </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->