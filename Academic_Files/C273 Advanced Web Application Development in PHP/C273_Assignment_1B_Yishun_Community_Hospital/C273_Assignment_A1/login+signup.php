<?php #Ju Long 19013345 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/segmentAnimation.css">
    <link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
    <style>
      form .error {
        color: #ff0000;
      }
      .error {
        color: #ff0000;
      }
    </style>
  </head>
  <body>
    <?php include './nav.php'?>
    <section class="section" style="max-height: 50px">
      <div class="section-inner">
        <div class="segmented-control" style="width: 300px; color: #11AC63">
          <input type="radio" name="sc-2-1" id="login" checked>
          <input type="radio" name="sc-2-1" id="signup">

          <label for="login" data-value="Login">Login</label>
          <label for="signup" data-value="Signup">Signup</label>
        </div>
      </div>
    </section>
    <div class="container">
      <script type="text/javascript">
      $(document).ready(function() {
        $("input[type='radio']").change(function() {
          $(".error").html("");
          if ($("#signup").is(":checked")) {
            $("#loginForm").css('display', 'none');
            $("#signupForm").css('display', 'block');
          } else {
            $("#loginForm").css('display', 'block');
            $("#signupForm").css('display', 'none');
          }
        });
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();
        if(dd<10){
          dd='0'+dd
        }
        if(mm<10){
          mm='0'+mm
        }
        $("#year").attr({
          "max": yyyy
        });

        $("#loginForm").submit(function() {
          $(".error").html("");
          $.get("./doLogin.php", {username: $("#id_loginUsername").val(), password: $("#id_loginPassword").val()}, function(data) {
            data = data.trim();
            if(data == "true") {
              location.replace('./index.php');
            } else if (data == "false") {
              $("#id_loginPassword").val("");
              $("#error").html("you enter the wrong username/password.");
            }
          }, "text")
          return false;
        });

        $("#loginForm").validate({
          rules: {
            loginUsername: {
              required: true
            }, loginPassword: {
              required: true
            }
          },
          messages: {
            loginUsername: {
              required: "Please enter your username"
            }, loginPassword: {
              required: "Please enter your password"
            }
          },
          submitHandler: function() {
            return true;
          }
        });

        $("#signupForm").submit(function() {
          $(".error").html("");
          var returned = null;
          $.get("./doSignup.php", {username: $("#id_signupUsername").val()}, function(data) {
            data = data.trim();
            if (data == "true") {
              returned = true;
            } else {
              returned = false;
              $("#error").html("Username have already been taken, please choose another one.")
            }
          }, "text");
          return returned;
        });

        $("#signupForm").validate({
          rules: {
            signupUsername: {
              required: true,
              minlength: 4
            }, signupPassword: {
              required: true,
              minlength: 4
            }, signupConfirmPassword: {
              equalTo: "#id_signupPassword"
            }, signupHeight: {
              required: true
            }, signupWeight: {
              required: true
            }, date: {
              required: true
            }, month: {
              required: true
            }, year: {
              required: true
            }
          },
          messages: {
            signupUsername: {
              required: "Please enter a username",
              minlength: "Please enter more than 5 characters"
            }, signupPassword: {
              required: "Please enter a password",
              minlength: "Please enter a password that is more than 5 characters."
            }, signupConfirmPassword: {
              equalTo: "Please enter the same password"
            }, signupHeight: {
              required: "Please enter your height"
            }, signupWeight: {
              required: "Please enter your weight"
            }, date: {
              required: "Please enter your date of birth"
            }, month: {
              required: "Please enter your month of birth"
            }, year: {
              required: "Please enter your year of birth"
            }
          },
          submitHandler: function() {
            return true;
          }
        });
      });
      </script>

      <form id="loginForm" action="#" method="post">
        <div class="form-group">
          <label for="id_loginUsername">Please Enter Your Username: </label>
          <input type="text" class="form-control" id="id_loginUsername" name="loginUsername"/>
        </div>

        <div class="form-group">
          <label for="id_loginPassword">Please Enter Your Password: </label>
          <input type="password" class="form-control" id="id_loginPassword" name="loginPassword"/>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-default" value="Reset"/>
      </form>


      <form id="signupForm" action="doSignup.php" method="post" style="display: none">
        <div class="form-group">
          <label for="id_signupUsername">Please Enter a Username: </label>
          <input type="text" class="form-control" id="id_signupUsername" name="signupUsername"/>
        </div>

        <div class="form-group">
          <label for="id_signupPassword">Please Enter a Password: </label>
          <input type="password" class="form-control" id="id_signupPassword" name="signupPassword"/>
        </div>

        <div class="form-group">
          <label for="id_signupConfirmPassword">Please Confirm Your Password: </label>
          <input type="password" class="form-control" id="id_signupConfirmPassword" name="signupConfirmPassword"/>
        </div>

        <div class="form-group row ">
          <div id="height" class="col-6">
            <label for="id_height">Please Enter Your Height (in cm): </label>
            <input type="number" class="custom-form-control" id="id_height" name="signupHeight" min="1" max="300"/>
          </div>
          <div id="weight" class="col-6">
            <label for="id_weight">Please Enter Your Weight (in Kg): </label>
            <input type="number" class="custom-form-control" id="id_weight" name="signupWeight" min="1" max="635"/>
          </div>
        </div>

        <div class="form-group">
          <label>Please Enter Your Date of Birth: </label>
          <div class="row">
            <div class="col-4">
              <label for="date">Date: </label> <input class="custom-form-control" type="number" id="date" name="date" min="1" max="31"/>
            </div>
            <div class="col-4">
              <label for="month">Month: </label> <input class="custom-form-control" type="number" id="month" name="month" min="1" max="12"/>
            </div>
            <div class="col-4">
              <label for="year">Year: </label> <input class="custom-form-control" type="number" id="year" name="year" min="1900"/>
            </div>
          </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-default" value="Reset"/>
      </form>

      <p class="error" id="error"></p>

    </div>
  </body>
</html>

<?php #Ju Long 19013345 ?>
