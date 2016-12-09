<!DOCTYPE html>
<html lang='en'>
  <head>
    <?php include '../html/header.html';?>
  </head>

  <body>
    <?php include '../html/navbar.html';?>

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
