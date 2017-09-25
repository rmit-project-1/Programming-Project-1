<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css" >
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>
    $( function() {
      $( "#datepicker1" ).datepicker({dateFormat: 'yy/mm/dd'});
    } );

    $( function() {
      $( "#datepicker2" ).datepicker({dateFormat: 'yy/mm/dd'});
    } );
    </script>

  </head>
  <body>
    <div class="wrapper">

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <div class="navwidth">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">
      <img class="logo" src="img/logo.png" alt="logo"></img></a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="fleet.php">Fleet</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="location.php">Locations</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>

      </ul>

      </div>
      <ul class="navbar-nav fixednav">
      <div class="dropdown">
        <li class="nav-item navlength-account">
          <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span class="fa fa-user" aria-hidden="true"></span> My Account</a>
          <div class="dropdown-menu drop-nav" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item drop-nav" href="account.php"><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
            <a class="dropdown-item drop-nav" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
            <a class="dropdown-item drop-nav" href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
          </div>
        </li>
      </div>


    </div>
</nav>
