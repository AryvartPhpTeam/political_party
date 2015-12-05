<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-file-text-o"></i>Form elements</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Elements
                          </header>
                          <div class="panel-body">
                              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Advanced Table
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i>Site Title</th>
                                 <th><i class="icon_calendar"></i>Site Description</th>
                                 <th><i class="icon_mail_alt"></i>Meta keyword</th>
								 <th><i class="icon_mail_alt"></i>Meta Description</th>
								 <th><i class="icon_mail_alt"></i>Facebook</th>
								 <th><i class="icon_mail_alt"></i>Twitter</th>
								 <th><i class="icon_mail_alt"></i>Google+</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php foreach($settings as $temp){?>
							  <tr>
                                 <td><?php echo $temp['site_title']?></td>
                                 <td><?php echo $temp['site_description']?></td>
								  <td><?php echo $temp['meta_keyword']?></td>
								   <td><?php echo $temp['meta_description']?></td>
								    <td><?php echo $temp['facebook_link']?></td>
									 <td><?php echo $temp['twitter_link']?></td>
									  <td><?php echo $temp['googleplus_link']?></td>
								
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo BASE_URL.'admin/page.php?id='.$temp['id']?>"><i class="icon_plus_alt2"></i></a>
                                      
                                  </div>
                                  </td>
                              </tr>
                               <?php }?>                            
                           </tbody>
                        </table>
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