<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xinhai's Site</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet"/>
  <link href="../css/general_style.css" rel="stylesheet"/>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php">Xinhai's Site</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../php/myself.php">About Me</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Hometown<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../php/place.php">Where is it</a></li>
              <li><a href="#">How does it look like</a></li>
              <li><a href="#">Why I love it</a></li>
            </ul>
          </li>
          <li><a href="../php/portfolio.php">Demos</a></li>
          <li><a href="../php/form.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="color: lavender;">
    <h2 style="text-align: center;">Demo</h2>
    <p>Some very basic demos that I built:</p>

      <h3><a href="../game/RollerMadness/index.html" role="button">Demo 1<br></a></h3>
      <h3><a href="../game/BoxShooter/index.html" role="button">Demo 2</a></h3>

    <p>Note: The demo cannot play if JavaScript is turned off.</p>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
