<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?php echo BASE_URL.'admin/'?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>News</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo BASE_URL.'admin/add_news.php'?>">Add News</a></li>                          
                          <li><a class="" href="<?php echo BASE_URL.'admin/news.php'?>">News Management</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo BASE_URL.'admin/add_pages.php'?>">Add Pages</a></li>                          
                          <li><a class="" href="<?php echo BASE_URL.'admin/pages.php'?>">Page Management</a></li>
                      </ul>
                  </li> 
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Slider</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo BASE_URL.'admin/add_slider.php'?>">Add Slider</a></li>                          
                          <li><a class="" href="<?php echo BASE_URL.'admin/slider.php'?>">Slider Management</a></li>
                      </ul>
                  </li> 				         
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->