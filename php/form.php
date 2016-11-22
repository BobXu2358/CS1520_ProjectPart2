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
    <h2>Contact</h2>
    <form action="" method="get" id="form">
      <fieldset class="text_form">
        <div class="form-group row">
          <label for="text1" class="col-xs-2 col-form-label">Name</label>
          <div class="col-xs-10">
            <input class="form-control" type="text" id="text1">
          </div>
        </div>
        <div class="form-group row">
          <label for="text2" class="col-xs-2 col-form-label">Email</label>
          <div class="col-xs-10">
            <input class="form-control" type="text" id="text2">
          </div>
        </div>
        <div class="form-group row">
          <label for="text3" class="col-xs-2 col-form-label">Message</label>
          <div class="col-xs-10">
            <input class="form-control" type="text" id="text3">
          </div>
        </div>
        <div class="form-group row">
          <input type="button" name="submit" value="Submit" onclick="submitForm()" id="submit_button" class="menu_button">
        </div>
        <p id="submit_message"></p>
      </fieldset>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/formJS.js"></script>
</body>
</html>
