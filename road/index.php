<?php
$page = "road";
include "../header.php";
include 'api-key.php';
?>
<div class="road">
  <div id="map-canvas"></div>
</div>

<?php include "../footer.php" ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key; ?>&sensor=true"></script>
<script type="text/javascript" src="/script/road.js"></script>