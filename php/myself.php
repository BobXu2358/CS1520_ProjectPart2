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
            <li><a href="../php/portfolio.php">Portfolio</a></li>
            <li><a href="../php/form.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="color: lavender;">
      <h2 style="text-align: center;">About Me</h2>
      <ul class="self_list">
        <li>
          <h3>A brief introduction</h3>
          <p>My name is Xinhai Xu. I am a senior undergraduate student in University of Pittsburgh major in Computer Science.
            I am an international student originally from China.
        </li>
        <li>
          <h3>Professional Skills</h3>
          <p>During my college study, I learned the following as a CS student at Pitt<br></p>
          <ul>
            <li>JAVA</li>
            <li>C</li>
            <li>Web(PHP, HTML, JS, MySQL)</li>
            <li>Mobile dev on Android platform</li>
            <li>Software engineering</li>
            <li>Software quality assurance</li>
          </ul>
        </li>
        <li>
          <h3>Interest based skills</h3>
          <p>I am a big fan of video games,especially in designing and developing them. Although there is no more courses
            about gaming in my school department by the time I became a CS student,I have some experience with Unity engine
            and played around with Cocos2d-X engine a little bit basically through self-study.<br>
            Some demo games are made and you can play them in the demo section in this website.<br>
          </p>
          <ul>
            <li>Unity 3D &amp; 2D</li>
            <li>Cocos2d-X</li>
          </ul>
        </li>
        <li>
          <h3>Languages(not programming languages)</h3>
          <ul>
            <li>English</li>
            <li>Mandarin</li>
            <li>Japanese (not as good as above two)</li>
          </ul>
        </li>
      </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
