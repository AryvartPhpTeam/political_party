<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Event Gallery Management</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						<li><i class="fa fa-file-text-o"></i>Event Gallery Management</li>
					</ol>
				</div>
			</div>
              <div class="row">

            <div class="col-lg-12">
             <section class="panel">
                          <header class="panel-heading">
                            Event Gallery Lists
                          </header>
                <div class="panel-body">
                 <div class="row">
                  <div class="col-lg-12">
				   <section class="panel">
					<form method="post" >
						<table class="table table-striped table-advance table-hover">
						  <tbody>
                            <tr>
                                 <th><i class=""></i>Title</th>
                                 <th><i class=""></i>Image</th>
								 <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                              <?php foreach($gallery_res as $res){?>
							<tr>
                                 <td><?php echo $res['event_title']?></td>
                                 <td><img src="<?php echo BASE_URL.'uploads/'.$res['image']?>" width="50" height="50"></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo BASE_URL.'admin/event_gallery.php?id='.$res['id']?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="<?php echo BASE_URL.'admin/event_gallery_management.php?delete='.$res['id']?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                               
                               <?php }?>                            
                           </tbody>
                        </table>
					</form>
                   </section>
					
                  </div>
              </div>
             </div>
            </section>
			</div>
           </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->