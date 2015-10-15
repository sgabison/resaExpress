
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_head.php") ; ?>
	<!-- start: BODY -->
	<body class="single-page">
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_slidingbar.php") ; ?>

		<div class="main-wrapper">
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_topbar.php") ; ?>
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_pageslide_left_full.php") ; ?>
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_pageslide_right.php") ; ?>

			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_panel_configuration_modal_form.php") ; ?>

			<?= $this->layout()->content; ?>

					<div class="subviews">
						<div class="subviews-container">		
						</div>
					</div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_footer.php") ; ?>
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_subview_calendar_page.php") ; ?>
			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_subview_person.php") ; ?>

			<? include( PIMCORE_LAYOUTS_DIRECTORY ."/inc_subview_sample_contents.php") ; ?>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/respond.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/moment/min/moment.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootbox/bootbox.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/velocity/jquery.velocity.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/toastr/toastr.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery.jsonify/jquery.jsonify-0.3.min.js"></script>

		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/truncate/jquery.truncate.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/summernote/dist/summernote.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/js/subview.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/js/pages-calendar.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/js/pages-user-profile.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/select2/select2.min.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/js/subview-examples2.js"></script>
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS Table export ONLY -->
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/tableExport/tableExport.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/tableExport/jquery.base64.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/tableExport/html2canvas.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/tableExport/jquery.base64.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/tableExport/jspdf/libs/sprintf.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/tableExport/jspdf/jspdf.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/tableExport/jspdf/libs/base64.js"></script>
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/js/table-export-custom.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS  Table export ONLY -->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
 				Calendar.init();
				PagesUserProfile.init();
				TableExport.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>