<!-- start jquery scripts -->
<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
<script type='text/javascript' src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
<!-- load slider menu here, just after jquery, because it won't work after other scripts -->
<script type='text/javascript' src='js/sliderMenu.js'></script>
<!-- end jquery scripts -->

<!-- start jquery calender scripts -->
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.2/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/eventsCalendar.js"></script>-->
<!-- end jquery calender scripts -->

<?php include"googleScripts.php"; ?>

<!-- start custom scripts -->
<script type='text/javascript'>
	var locations =  <?php echo json_encode( $array ) ?>;
</script>
<script type='text/javascript' src='js/jquery.custom.js'></script>
<script type='text/javascript' src='js/jquery.supersized.js'></script>
<script type='text/javascript' src='js/jquery.supersized.shutter.min.js'></script>
<script type='text/javascript' src='js/jquery-ui-1.8.18.custom.min.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/jquery.form.js'></script>
<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.js'></script>
<script type='text/javascript' src='js/jquery.preloader.js'></script>
<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='js/jquery.scroll.min.js'></script>
<script type='text/javascript' src='js/googleMaps.js'></script>
<script type='text/javascript' src='js/facebook.js'></script>
<?php
	
if($loadFormActionsScript=="Yes") {
	echo "<script type='text/javascript' src='js/formActions.js'></script>";
} else {
	$loadFormActionsScript = "No";
}

if($loadSearchScript=="Yes") {
	echo "<script type='text/javascript' src='js/search.js'></script>";
} else {
	$loadSearchScript = "No";
}

?>
<!-- end custom scripts -->
