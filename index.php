<?php
  require_once('mysqlconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  </head>

  <body class="main">

    <div class="se-pre-con"></div>

<div class="container">
    <div id="tabs" class="rf">
      <ul>
        <li>
          <a href="#tabs-2">Registration</a>
        </li>
        <li>
          <a href="#tabs-1">Login</a>
        </li>
      </ul>

      <div id="tabs-1">
        <h3 class="text-center text-primary"> Login Panel </h3>
      </div>

      <div id="tabs-2">
        <h3 class="text-center text-primary"> Registration Panel </h3>
        <div class="reg-form">
          <form id="regForm">
                <div class="row form-group">
                    <label for="firstNameInput" class="col-md-3">First Name</label>
                    <input type="text" id="firstNameInput" name="" value="" class="form-control col-md-5" title=" example:Mahbub " >
                    <small id="firstNameInputError" class="text-warning"></small>
                </div>
                <div class="row form-group">
                    <label for="lastNameInput" class="col-md-3">Last Name</label>
                    <input type="text" id="lastNameInput" name="" value="" class="form-control col-md-5" title=" example:Evan " >
                    <small id="lastNameInputError" class="text-warning"></small>
                </div>
                <div class="row form-group">
                    <label for="emailInput" class="col-md-3">E-Mail</label>
                    <input type="email" id="emailInput" name="" value="" class="form-control col-md-5" title=" example@gmail.com ">
                    <small id="emailInputError" class="text-warning"></small>
                </div>
                <div class="row form-group">
                    <label for="passwordInput" class="col-md-3">Password</label>
                    <input type="password" id="passwordInput" name="" value="" class="form-control col-md-5" title=" minimum 8 character ">
                    <small id="passwordInputError" class="text-warning"></small>
                </div>
                <div class="row form-group">
                    <label for="confirmPasswordInput" class="col-md-3">Confirm Password</label>
                    <input type="password" id="confirmPasswordInput" name="" value="" class="form-control col-md-5" title=" should same as password ">
                    <small id="confirmPasswordInputError" class="text-warning"></small>
                </div>
                <div class="row form-group">
                    <label for="dobInput" class="col-md-3">Date Of Birth</label>
                    <input type="text" id="dobInput" name="" value="" class="form-control col-md-2" title=" you should be more than 18 ">
                    <small id="dobInputError" class="text-warning"></small>
                </div>
                <div class="row form-group">
                    <label for="phoneInput" class="col-md-3">Phone No</label>
                    <input type="text" id="phoneInput" name="" value="" class="form-control col-md-5" title=" ex: +8801686169922 ">
                    <small id="phonenoInputError" class="text-warning"></small>
                </div>

                <div class="row form-group">
                      <label for="genderInput" class="col-md-3">Gender</label>
                      <div class="form-check col-md-4">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input genderInput" name="gender" id="genderInputMale" value="male">Male
                        </label>
                      </div>
                      <div class="form-check col-md-4">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input genderInput" name="gender" id="genderInputFemale" value="female">Female
                        </label>
                        <small id="genderInputError" class="text-warning"></small>
                      </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-3">
                      <label for="bloodInput" class="">Blood Group</label>
                  </div>
                  <div class="col-md-5">
                      <select class="form-control" name="" id="bloodInput">

                      </select>
                    </div>
                    <small id="bloodGroupInputError" class="text-warning"></small>
                </div>

                <div class="country-cities-states container row">

                    <div class="col-md" id="countrySelectDiv">
                      <div class="row">
                        <label for="countrySelect">Select Country</label>
                      </div>
                      <div class="row" id="country">
                        <select class="form-control" name="" id="countrySelect" onchange="change_country()">
                          <option value="">Select</option>
                          <?php
                          $sql = "SELECT * FROM `countries`";
                          $result = $conn->query($sql);
                          if($result->num_rows>0){
                            while ($row = $result->fetch_assoc()){
                              echo '<option class="font-weight-bold text-monospace" value="'.$row['id'].'">
                                '. $row['name'].'
                              </option>'."<br>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md" id="stateSelectDiv">
                      <div class="row">
                        <label for="stateSelect">Select State</label>
                      </div>
                      <div class="row" id="state">
                        <select class="form-control" name="" id="stateSelect" onchange="change_state()">
                          <option value="" disabled>Select</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md" id="citySelectDiv">
                      <div class="row">
                        <label for="citySelect">Select City</label>
                      </div>
                      <div class="row" id="city">
                        <select class="form-control" name="" id="citySelect">
                          <option value="" disabled>Select</option>
                        </select>
                      </div>
                    </div>


                </div>

                <br/><br/>
                <div class="row">
                  <input type="submit" id="submitButton" name="" value="Submit" class="btn btn-info" title="Check Twice Before Submit">
                </div>
          </form>
        </div>
      </div>
    </div>
</div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="tab.js"></script>
    <script type="text/javascript" src="validate.js"></script>
    <script type="text/javascript" src="tooltip.js"></script>
    <script type="text/javascript" src="datePicker.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="myAjax.js"></script>
  </body>
</html>
