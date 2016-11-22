<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <meta content="author: Xinhai_Xu">

  <title>Xinhai Xu's Site</title>

  <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head>

<body>
  <h1>Contact Me</h1>
  <header>
    <div id="menu_container">
      <div id="menu1" class="menu_box">
        <a href="../index.html" class="menu_button">Home</a>
      </div>
      <div id="menu2" class="menu_box">
        <a href="place.html" class="menu_button">Place I lived</a>
      </div>
      <div id="menu3" class="menu_box">
        <a href="portfolio.html" class="menu_button">Portfolio</a>
      </div>
    </div>
  </header>
  <form action="" method="get" id="form">
    <fieldset class="text_form">
      <div class="text_holder">
        <label for="text1">Name: </label>
        <input type="text" name="name" id="text1">
      </div>
      <div class="text_holder">
        <label for="text2">Email: </label>
        <input type="text" name="email" id="text2">
      </div>
      <div class="text_holder">
        <label for="text3">Message: </label>
        <input type="text" name="message" id="text3">
      </div>
      <div class="text_holder">
        <input type="button" name="submit" value="Submit" onclick="submitForm()" id="submit_button" class="menu_button">
      </div>
      <p id="submit_message"></p>
    </fieldset>
  </form>
</body>
<script src="../js/formJS.js"></script>
</html>
