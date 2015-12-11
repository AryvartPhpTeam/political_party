<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Leaders Management</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						<li><i class="fa fa-file-text-o"></i>leaders Management</li>
					</ol> 
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
						  <form method="post" class="form-horizontal ">
                          <header class="panel-heading">
                             leaders List
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
								<option value="delete">Bulk Delete</option>
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
                                 <th><i class=""></i>Leaders Title</th>
                                 <th><i class=""></i>Position</th>
								  <th><i class=""></i>Join Date</th>
								  <th><i class=""></i>Age</th>
								  <th><i class=""></i>Date Of Birth</th>
								  <th><i class=""></i>Native Place</th>
								  <th><i class=""></i>Image</th>
								  <th><i class=""></i>Status</th>
								  <th><i class=""></i>Summary</th>
								  
								  <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php foreach($leaders as $res){?>
							  <tr>
								 <td><input type="checkbox" class="checkbox" name="check[]" value="<?php echo $res['id'] ?>"></td>
                                 <td><?php echo $res['leader_title']?></td>
                                 <td><?php echo $res['position']?></td>
								 <td><?php echo date("d-m-Y", strtotime($res['join_date']))?></td>
								 <td><?php echo $res['age']?></td>
								 <td><?php echo date("d-m-Y", strtotime($res['date_of_birth']))?></td>
								 <td><?php echo $res['native_place']?></td>
								  <td><img src="<?php echo BASE_URL.'uploads/'.$res['image']?>" width="50" height="50"></td>
								 <td><?php echo $res['status']?></td>
								 <td><?php echo $res['summary']?></td>
								 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo BASE_URL.'admin/leaders.php?id='.$res['id']?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="<?php echo BASE_URL.'admin/leaders_management.php?delete='.$res['id']?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                               <?php }?>                            
                           </tbody>
                        </table>
						</form>
						<?php echo $ownobj->getpagination('leaders', $page, $per_page);?>
					  </section>
                      </section>
                  </div>
              </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->