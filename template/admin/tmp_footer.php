</section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?php echo JS;?>jquery.js"></script>
	<script src="<?php echo JS;?>jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo JS;?>jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo JS;?>jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo JS;?>bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo JS;?>jquery.scrollTo.min.js"></script>
    <script src="<?php echo JS;?>jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo ASSETS;?>jquery-knob/js/jquery.knob.js"></script>
    <script src="<?php echo JS;?>jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo ASSETS;?>jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo JS;?>owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="<?php echo JS;?>fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?php echo ASSETS;?>fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo JS;?>calendar-custom.js"></script>
	<script src="<?php echo JS;?>jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo JS;?>jquery.customSelect.min.js" ></script>
	<script src="<?php echo ASSETS;?>chart-master/Chart.js"></script>
	<!-- ck editor -->
       <script type="text/javascript" src="<?php echo ASSETS;?>ckeditor/ckeditor.js"></script>

    <!--custome script for all page-->
    <script src="<?php echo JS;?>scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo JS;?>sparkline-chart.js"></script>
    <script src="<?php echo JS;?>easy-pie-chart.js"></script>
	<script src="<?php echo JS;?>jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo JS;?>jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo JS;?>xcharts.min.js"></script>
	<script src="<?php echo JS;?>jquery.autosize.min.js"></script>
	<script src="<?php echo JS;?>jquery.placeholder.min.js"></script>
	<script src="<?php echo JS;?>gdp-data.js"></script>	
	<script src="<?php echo JS;?>morris.min.js"></script>
	<script src="<?php echo JS;?>sparklines.js"></script>	
	<script src="<?php echo JS;?>charts.js"></script>
	<script src="<?php echo JS;?>jquery.slimscroll.min.js"></script>
	<script src="<?php echo JS;?>jquery.validate.min.js"></script>
	<script src="<?php echo JS;?>custom_changes.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>
  