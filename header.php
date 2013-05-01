<?php date_default_timezone_set('America/Los_Angeles'); ?>
<!doctype html>
<html>
<head>
  <title>Ski Renter Mountain View</title>
  <link rel="stylesheet" type="text/css" href="/style/style.css">
  <link rel="stylesheet" type="text/css" href="/style/bootstrap.css">
  <link href='http://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
</head>
<body>
  <header>
    <a class="logo" href="/">Ski Renter Mountain View</a>
    <div class="quick-contact">
        <p>Today's Open Hours:</p>
      <?php $dw = date("w"); ?>
      <?php if($dw > 0 && $dw < 4) { // Monday to Wednesday?>
          <span>10 am - 7 pm</span>
      <?php } ?>
      <?php if($dw > 3 && $dw < 6) { // Thursday to Friday?>
          <span>10 am - 9 pm</span>
      <?php } ?>
      <?php if ($dw == 0 || $dw  == 6){ // Saturday and Sunday?>
          <span>12 pm - 5 pm</span>
      <?php } ?>
    <p class="phone">Phone: <a href="tel:+16509611414">(650) 961-1414</a></p>
    </div>
  </header>
  <div class="container">
    <nav class="main-nav">
      <ul class="nav nav-pills nav-stacked">
        <li>
          <a class="btn btn-large <?php if ($page == "home") { ?>btn-success<?php } else {?>btn-info<?php } ?>" href="/">Home</a>
        </li>      
        <li>
          <a class="btn btn-large <?php if ($page == "price") { ?>btn-success<?php } else {?>btn-info<?php } ?>" href="/price">Price</a>
        </li>
        <li>
          <a class="btn btn-large <?php if ($page == "weather") { ?>btn-success<?php } else {?>btn-info<?php } ?>" href="/weather">Weather Info</a>
        </li>    
        <li>
          <a class="btn btn-large <?php if ($page == "road") { ?>btn-success<?php } else {?>btn-info<?php } ?>" href="/road">Road info</a>
        </li>
        <li>
          <a class="btn btn-large <?php if ($page == "links") { ?>btn-success<?php } else {?>btn-info<?php } ?>" href="/links">Resort links</a>
        </li> 
      </ul>
      <div class="cover"></div>
    </nav>