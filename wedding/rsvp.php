<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$attendance = $_POST['attendance'];
$meal = $_POST['meal'];
$total = $_POST[''];

?>
<form role="form" action="rsvp.php" method="post">
  <div class="form-group row">
    <label for="firstname" class="control-label col-sm-2 col-sm-offset-3">First Name: </label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Enter your first name" name="firstname">
    </div>
  </div>
  <div class="form-group row">
    <label for="lastname" class="control-label col-sm-2 col-sm-offset-3">Last Name: </label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Enter your last name" name="lastname">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="control-label col-sm-2 col-sm-offset-2">Email: </label>
    <div class="col-sm-6">
      <input type="email" class="form-control" placeholder="Get updates from the bride and groom" name="email">
    </div>
  </div>
    <br/>
  <div class="form-group row">
    <div class="center">Will you attend? </div>

    <div class="center-block">
      <div class="col-sm-2 col-sm-offset-5">
        <label>
          <input type="radio" name="attendance" id="attendancey" value="yes">Yes
        </label>
      </div>
      <div class="col-sm-2 col-sm-offset-5">
        <label>
          <input type="radio" name="attendance" id="attendancen" value="no">No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="partysize" class="control-label col-sm-6 col-sm-offset-3">How many are in your party (including yourself)? </label>
    <div class="col-sm-2 col-sm-offset-5">
      <select class="form-control" name="partysize" id="partysize" disabled="true">
        <option value="0">Choose an option</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
  </div>
  <div id="addsection"></div>
  <div class="form-group">
    <button type="submit" class="btn btn-default " name="submit">Submit</button>
  </div>
</form>
