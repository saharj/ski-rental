<?php
$page = "weather";
include "../header.php";

include('forecast.io.php');
include 'api-key.php';

$forecast = new ForecastIO($api_key);

$cities = [
[
"name" => "Heavenly",
"latitude" => "38.878205",
"longitude" => "-119.940491"
],
[
"name" => "Northstar",
"latitude" => "39.266816",
"longitude" => "-120.103226"
]
];
?>

<section class="weather">
  <?php foreach ($cities as $city ) {
    $condition = $forecast->getCurrentConditions($city["latitude"], $city["longitude"]);?>
    <div class="city-wrapper">
      <div class="city <?php echo $city["name"]?>" style='background-image: url("http://maps.googleapis.com/maps/api/staticmap?center=<?php echo ($city["latitude"])?>,<?php echo ($city["longitude"])?>&zoom=9&scale=2&size=900x200&sensor=true")' >
        <div class="gradient"></div>
        <div class="city-name"><?php echo $city["name"] ?></div>
        <div class="temp">Right now: <?php echo round((int)$condition->getTemperature()); ?></div>
      </div>
      <div class="today">
        <h4>Today's Weather</h4>
        <table class="table day <?php echo $city["name"]?>">
          <thead>
            <tr>
              <th>Time</th>
              <th>Temperature</th>
              <th>Summary</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $conditions_today = $forecast->getForecastToday($city["latitude"], $city["longitude"]);

            foreach($conditions_today as $cond) { ?> 
            <tr>
              <td> <?php echo $cond->getTime('H:i') ?> </td>
              <td> <?php echo round((int)$cond->getTemperature()); ?> </td>
              <td> 
                <canvas width="64" height="64" class="icon <?php echo $cond->getIcon(); ?>"></canvas>
                <div><?php echo $cond->getSummary(); ?></div>
              </td>
            </tr>
            
            <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="week">
        <h4>This Week's Weather</h4>
        <table class="table week <?php echo $city["name"]?>">
          <thead>
            <tr>
              <th>Day</th>
              <th>Temperature</th>
              <th>Summary</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $conditions_week = $forecast->getForecastWeek($city["latitude"], $city["longitude"]);

            foreach($conditions_week as $cond) { ?> 
            <tr>
              <td> <?php echo $cond->getTime('D') ?> </td>
              <td> <?php echo round((int)$cond->getTemperatureMax()) . " / " . round((int)$cond->getTemperatureMin()); ?> </td>
              <td> 
                <canvas width="64" height="64" class="icon <?php echo $cond->getIcon(); ?>"></canvas>
                <div><?php echo $cond->getSummary(); ?></div>
              </td>
            </tr>
            
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php } ?>
  </section>

  <?php include "../footer.php" ?>
  <script type="text/javascript" src="/script/skycons.js"></script>
  <script type="text/javascript" src="/script/weather.js"></script>