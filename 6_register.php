<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booking Portal</title>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <script type="text/javascript" src="js/myscript.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/fonts.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="./js/scripts.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
     var bindDatePicker = function() {
      $("#datetimepicker3").datetimepicker({
       format: 'DD-MM-YYYY'
     })
      $("#datetimepicker").datetimepicker({  
       format: 'DD-MM-YYYY'
     })
      .find('input:first').on("blur", function() {
                  // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
                  // update the format if it's yyyy-mm-dd
                  var date = parseDate($(this).val());
                  if (!isValidDate(date)) {
                    //create date based on momentjs (we have that)
                    date = moment().format('YYYY-MM-DD');
                  }
                  $(this).val(date);
                });
    }
    
    var isValidDate = function(value, format) {
     format = format || false;
              // lets parse the date to the best of our knowledge
              if (format) {
               value = parseDate(value);
             }
             
             var timestamp = Date.parse(value);
             
             return isNaN(timestamp) == true;
           }
           
           var parseDate = function(value) {
            var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
            if (m)
              value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);
            
            return value;
          }
          
          bindDatePicker();
        });
      </script>
    </head>
    <body>
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>

      <div id="id01" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="GET">
          <div class="container">
            <div class="Name">
              <label for="fristname"><b>First name: </b></label>
              <input type="text" placeholder="Enter first name" name="fristname" required>
              <label for="lastname"><b>Last name: </b></label>
              <input type="text" placeholder="Enter last name" name="lastname" required>
            </div>
            <div class="Contact Info">
              <label for="mail"><b>Email: </b></label>
              <input type="text" placeholder="E-mail@..." name="email" required>
              <label for="phone"><b>Phone Number: </b></label>
              <input type="text" placeholder="PhoneNumber..." name="phone" required>
            </div>
<!--         <div class="Birthday">
          <label for="day"><b>day</b></label>
          <p><input type="text" placeholder="dd" name="dd" required></p>
          <label for="month"><b>month</b></label>
          <p><input type="text" placeholder="nn" name="nn" required></p>
          <label for="years"><b>years</b></label>
          <p><input type="text" placeholder="yyyy" name="yyyy" required></p>
        </div>           -->
        <div class='col-md-6'>
          <div class="form-group">
            <div class='input-group date' id='datetimepicker'>
              <input type='text' class="form-control" placeholder="Start Date" data-format="DD/MM/YY - HH"/>
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
          </div>
        </div>
        <div class="Login Info">
          <label for="username"><b>Username: </b></label>
          <p><p><input type="text" placeholder="Enter Username" name="username" required></p></p>
          <label for="psw"><b>Password: </b></label>
          <p><input type="password" placeholder="Enter Password" name="psw" required></p>
        </div>
        <button type="submit">Register</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>
</body>
</html>