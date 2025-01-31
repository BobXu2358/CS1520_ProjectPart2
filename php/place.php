<!DOCTYPE html>
<html lang='en'>
  <head>
    <?php include '../html/header.html';?>
  </head>

  <body>
    <?php include '../html/navbar.html';?>

    <div class="container" style="color: lavender;">
      <h2>My Hometown</h2>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home" style="color: seagreen;">Where is it</a></li>
        <li><a data-toggle="tab" href="#menu1" style="color: seagreen;">How does it look like</a></li>
        <li><a data-toggle="tab" href="#menu2" style="color: seagreen;">Why I love it</a></li>
      </ul>
      <div class="tab-content" style="color: lavender;">
        <div id="home" class="tab-pane fade in active">
          <h3>Where is it</h3>
          The name of my hometown is <b>Hangzhou</b>, which is near the east coast of China.<br/>
          <img src="../image/Hangzhou.jpg"><br/>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>How does it look like</h3>
          <p>
            When the lights are on<br/>
            <img src="../image/01-barges-long-piled-canal_1600.jpg"><br>
            <img src="../image/Night.jpg"><br>
            There are also places that are not so busy<br>
            <img src="../image/river_side.jpg"><br>
          </p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Why I love it</h3>
          <p>I was born and raised there, although I have a lot of experience staying in other cities, I still cannot find a
            second place that can provide better life I had in Hangzhou.<br/>
            By far, it is still my first choice for retiring.
          </p>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/general_function.js"></script>
  </body>
</html>
