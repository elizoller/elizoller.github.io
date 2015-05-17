<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <title>Gina and Eli are getting married!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/test.css" rel="stylesheet" />
      <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville|Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body id="page-top" class="secondary">
  <!-- navigation panel -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#">Gina and Eli's Wedding</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden"><a href="#home" class="page-scroll">Home</a></li>
          <li><a href="#about" class="page-scroll">About Us</a></li>
          <li><a href="#bigday" class="page-scroll">Wedding Day</a></li>
          <li><a href="#travel" class="page-scroll">Travel</a></li>
          <li><a href="#rsvp" class="page-scroll">RSVP</a></li>
          <li><a href="#registry" class="page-scroll">Registry</a></li>
          <li><a href="#contact" class="page-scroll">Contact</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div id="about" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1>RSVP</h1>

<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$attendance = $_POST['attendance'];
$meal = $_POST['meal'];
$total = $_POST[''];

?>
<form role="form" action="rsvp.php" method="post">
  <div class="page-1">
    <p><small>To begin your RSVP, please enter your email address (or phone number if you don't have an email address) and the total number in your party. Please indicate both acceptances and regrets</small></p>
    <div class="form-group row">
      <label for="email" class="control-label col-sm-12">Email: </label>
      <div class="col-sm-12">
        <input type="email" class="form-control" placeholder="Your email address" name="email">
        <div class='alert alert-warning email-alert'>Please enter your email address so we can get in touch with you. Thanks!</div>
      </div>
    </div>
    <div class="form-group row small">
      <label for="party-total" class="control-label col-sm-12">Total in your Party: </label>
      <div class="col-sm-12">
        <select name="party-total">
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
    <btn class="btn btn-default" id="page-1-btn">Next >></btn>

  </div>

  <div class="page-2">
    <p class="page-2-start"><small>Please enter the names, RSVP, entree preferences of all guests in your party.</small></p>
    <div class="rsvps"></div>
    <btn class="btn btn-default" id="page-2-btn-prev"><< Back</btn>
    <btn class="btn btn-default" id="page-2-btn-next">Next >></btn>
  </div>

  <div class="page-3">




  </div>
</form>

</div>

<div class="col-sm-6">
  <br/>
  <img src="img/bw5.jpg" width="100%">
</div>

</div>
</div>
</div>
<!-- attach JavaScripts -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/test.js"></script>
 <!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-45145656-1', 'auto');
ga('send', 'pageview');

</script>

<script>
$("#page-1-btn").click(function() {
  if ($("input[name='email']").val() != "") {
    $(".page-2").show();
    $(".page-1").hide();
    $(".rsvps").html("");
    var num_guests = $("select[name='party-total']").val();
    for (i=0; i < num_guests; i++) {
      console.log(i);
      var template = '<div class="form-group row"><div class="col-sm-6"><input type="text" class="form-control" placeholder="First Name" name="firstname'+i+'"></div><div class="col-sm-6"><input type="text" class="form-control" placeholder="Last Name" name="lastname'+i+'"></div></div><div class="form-group row"><div class="col-sm-12"><input type="checkbox" value="yes" name="under12"> Under the age of 12</div></div><div class="form-group row"><div class="col-sm-6"><label for="attendance'+i+'" class="control-label">Attending?</label><br/><select name="attendance'+i+'"><option value="0">Select one</option><option value="yes">Wouldn\'t miss it!</option><option value="no">Celebrating from afar</option></select></div><div class="col-sm-6"><label for="entree'+i+'" class="control-label">Entree Choice</label><br/><select name="entree'+i+'"><option value="0">Select one</option><option value="chicken">Chicken</option><option value="fish">Fish</option></select></div></div><div class="form-group row"><div class="col-sm-12"><textarea name="allergy'+i+'" placeholder="Please list all known food allergies and dietary restrictions (ie. gluten free, vegan, etc.)"></textarea></div></div><hr/>';
      $(".rsvps").append(template);
    }
  } else {
    $(".email-alert").show();
  }
});
$("#page-2-btn-next").click(function() {
  var error = false;
  //process to go to page 3 here
  $(".alert-firstname").remove();
  $(".alert-lastname").remove();
  $("input[name^='firstname']").each(function() {
    if ($(this).val() == "") {
      error = true;
      $(this).after('<div class="alert alert-warning alert-firstname">Please enter a first name</div>');
    }
  });
  $("input[name^='lastname']").each(function() {
    if ($(this).val() == "") {
      error = true;
      $(this).after('<div class="alert alert-warning alert-lastname">Please enter a last name</div>');
    }
  });
  if (error == false) {
    $(".page-2").hide();
    $(".page-3").show();
  }
});
$("input[name='under12']").change(function() {
  if (($this).val() == 'yes') {
    alert("under 12");
    $(this).sibling(".entree").hide();
  }
})
$("#page-2-btn-prev").click(function() {
  $(".page-2").hide();
  $(".page-1").show();
});

</script>
</body>
</html>
