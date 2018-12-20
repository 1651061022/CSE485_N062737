<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>H&M-Travel</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script type="text/javascript" src="js/myscript.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var bindDatePicker = function() {
        $("#datetimepicker3").datetimepicker({
          format: 'HH:mm',
          icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
          }
        })
        $("#datetimepicker").datetimepicker({
          format: 'YYYY/MM/DD',
          icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
          }
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

          return isNaN(timestamp) == false;
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
    <div class="style2">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>
      <div id="id01" class="modal">
        <form class="modal-content animate" action="" method="post">
          <div class="container conta" >
            <div class="row">
              <div class="cot1 col-md-4">           
                <div class="col-md-12">
                  <div class="Name">
                    <label for="fristname"><b>First name: </b></label>
                    <input type="text" placeholder="Enter first name" name="fristname" required>
                    <label for="lastname"><b>Last name: </b></label>
                    <input type="text" placeholder="Enter last name" name="lastname" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="Contact Info">
                    <label for="mail"><b>Email: </b></label>
                    <input type="text" placeholder="E-mail@..." name="email" required>
                    <label for="phone"><b>Phone Number: </b></label>
                    <input type="text" placeholder="PhoneNumber..." name="phone" required>
                  </div>
                </div>
                <div class='col-md-12'>
                  <label for="username"><b>BirthDay: </b></label>
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker'>
                      <input type='text' class="form-control" placeholder="BirthDay" name="birthday" data-format="YYYY/MM/DD"/>
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cot2 col-md-4">
                <div class="col-md-12">
                  <div class="Login Info">
                    <label for="username"><b>Username: </b></label>
                    <p><p><input type="text" placeholder="Enter Username" name="username" required></p></p>
                    <label for="password"><b>Password: </b></label>
                    <p><input type="password" placeholder="Enter Password" name="password" required></p>
                <!-- <label for="password"><b>Repeat Password: </b></label>
                  <p><input type="password" placeholder="Enter Password" name="re_password" required></p> -->
                </div>
              </div>
            </div>
            <div class="cot3 col-md-4">           
              <div class="col-md-11">
                <img src="image/avatar.png" alt="Avatar" class="avatar">
              </div>
              <div class="col-md-1">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit">Register</button>
            </div>
          </div>
        </div>
        <div class="container conta" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
