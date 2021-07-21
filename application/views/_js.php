<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?php echo base_url() ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?php echo base_url() ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?php echo base_url() ?>assets/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?php echo base_url() ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?php echo base_url() ?>assets/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url() ?>assets/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>

<!-- Datatables -->
<script src="<?php echo base_url() ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- select2 -->
<script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.min.js"></script>


<script>
	$(function(){
      //get the bar chart canvas
      var cData = JSON.parse("<?php echo $chart_data; ?>");
      var ctx = $("#bar-chart");

      //bar chart data
      var data = {
      	labels: cData.label,
      	datasets: [
      	{
      		label: cData.label,
      		data: cData.data,
      		backgroundColor: [
      		"#DEB887",
      		"#A9A9A9",
      		"#DC143C",
      		"#F4A460",
      		"#2E8B57",
      		"#1D7A46",
      		"#CDA776",
      		"#CDA776",
      		"#989898",
      		"#CB252B",
      		"#E39371",
      		],
      		borderColor: [
      		"#CDA776",
      		"#989898",
      		"#CB252B",
      		"#E39371",
      		"#1D7A46",
      		"#F4A460",
      		"#CDA776",
      		"#DEB887",
      		"#A9A9A9",
      		"#DC143C",
      		"#F4A460",
      		"#2E8B57",
      		],
      		borderWidth: [1, 1, 1, 1, 1,1,1,1, 1, 1, 1,1,1]
      	}
      	]
      };

      //options
      var options = {
      	scales: {
      		yAxes: [{
      			ticks: {
      				beginAtZero: true
      			}
      		}]
      	}
      };

      //create bar Chart class object
      var chart_1 = new Chart(ctx, {
      	type: "bar",
      	data: data,
      	options: options
      });

  });
</script> 

<script>
	$(function(){
      //get the bar chart canvas
      var cData = JSON.parse(`<?php echo $chart_data2; ?>`);
      var ctx = $("#bar-chart2");
      
      //bar chart data
      var data = {
      	labels: cData.label,
      	datasets: [
      	{
      		label: cData.label,
      		data: cData.data,
      		backgroundColor: [
      		"#DEB887",
      		"#A9A9A9",
      		"#DC143C",
      		"#F4A460",
      		"#2E8B57",
      		"#1D7A46",
      		"#CDA776",
      		"#CDA776",
      		"#989898",
      		"#CB252B",
      		"#E39371",
      		],
      		borderColor: [
      		"#CDA776",
      		"#989898",
      		"#CB252B",
      		"#E39371",
      		"#1D7A46",
      		"#F4A460",
      		"#CDA776",
      		"#DEB887",
      		"#A9A9A9",
      		"#DC143C",
      		"#F4A460",
      		"#2E8B57",
      		],
      		borderWidth: [1, 1, 1, 1, 1,1,1,1, 1, 1, 1,1,1]
      	}
      	]
      };
      
      //options
      var options = {
      	scales: {
      		yAxes: [{
      			ticks: {
      				beginAtZero: true
      			}
      		}]
      	}
      };
      
      //create bar Chart class object
      var chart_2 = new Chart(ctx, {
      	type: "bar",
      	data: data,
      	options: options
      });
      
  });
</script>