<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> <?php echo $title;?></h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-file-text-o"></i>Blog Management</li>
					</ol>
				</div>
			</div>
              <div class="row">

            <div class="col-lg-12">
             <section class="panel">
                          <header class="panel-heading">
                            Page Lists
                          </header>
                <div class="panel-body">
                 <div class="row">
                  <div class="col-lg-12">
				   <section class="panel">
					<form method="post" >
					
							<header class="panel-heading">     <div class="navbar-form "> Action 
							    <select name="bulk" class="form-control" >
								<option>select</option>
								<option  value="publish">Bulk Publish</option>
								<option  value="unpublish">Bulk Unpublish</option>
							    </select>
								<input type="submit" class="btn btn-primary" name="submit" value="submit" />
						     </div>
							</header>
						<table class="table table-striped table-advance table-hover">
						  <tbody>
                            <tr>
									<th><input type="checkbox" id="check"/></th>
                                 <th><i class=""></i>Title</th>
								 <th><i class=""></i>Category</th>
                                 <th><i class=""></i>Description</th>
								 <th><i class=""></i>Status</th>
								 <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                              <?php foreach($blog_result as $res){?>
							<tr>
							     <td><input type="checkbox" class="checkbox" name="check[]" value="<?php echo $res['id']; ?>"/></td>
                                 <td><?php echo $res['title']?></td>
								 <td><?php echo $res['category_name']?></td>
                                 <td><?php echo $res['description']?></td>
								 <td><?php echo $res['status']?></td>
								 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo BASE_URL.'admin/add_blog.php?id='.$res['id']?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="<?php echo BASE_URL.'admin/blog.php?delete='.$res['id']?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                               
                               <?php }?>                            
                           </tbody>
                        </table>
					</form>
					<?php echo $ownobj->getpagination('blogs', $page, $per_page);?>
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