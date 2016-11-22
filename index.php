<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xinhai's Site</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link href="css/index_style.css" rel="stylesheet"/>
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
        <a class="navbar-brand" href="#">Xinhai's Site</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="php/myself.php">About Me</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Hometown<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="php/place.php">Where is it</a></li>
              <li><a href="#">How does it look like</a></li>
              <li><a href="#">Why I love it</a></li>
            </ul>
          </li>
          <li><a href="php/portfolio.php">Demos</a></li>
          <li><a href="php/form.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron" style="background: #272F32;">
    <div class="container" style="color: lavender">
      <h1 style="text-align: center;">Welcome</h1>
      <p style="text-align: center;">This is my site. You can learn a lot about me here.</p>
      <br>
      <p style="margin: auto"><a class="btn btn-primary btn-lg menu_button" href="php/myself.php" role="button">Enter</a>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>