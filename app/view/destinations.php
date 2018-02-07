<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinations | Fly Guys</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="public/css/style.css">

    <link rel="stylesheet" href="public/css/fakeLoader.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
 
  <div id="fakeLoader"></div>

  <?php require 'content-parts/navbar.php'; ?>

    <div class="header-colour yellow">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Our destinations</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="featured-destinations">
        <div class="row">
          <div class="col-sm-4 destination">
            <img src="public/images/paris.jpg" class="img-responsive img-circle" alt="Paris">
            <h3>Paris</h3>
            <p>The new destination is Paris</p>
          </div>
          <div class="col-sm-4 destination">
            <img src="public/images/madrid.jpg" class="img-responsive img-circle" alt="Madrid">
            <h3>Madrid</h3>
            <p>The new destination is Madrid</p>
          </div>
          <div class="col-sm-4 destination">
            <img src="public/images/dublin.jpg" class="img-responsive img-circle" alt="Dublin">
            <h3>Dublin</h3>
            <p>The new destination is Dublin</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 destination">
            <img src="public/images/paris.jpg" class="img-responsive img-circle" alt="Paris">
            <h3>Paris</h3>
            <p>The new destination is Paris</p>
          </div>
          <div class="col-sm-4 destination">
            <img src="public/images/madrid.jpg" class="img-responsive img-circle" alt="Madrid">
            <h3>Madrid</h3>
            <p>The new destination is Madrid</p>
          </div>
          <div class="col-sm-4 destination">
            <img src="public/images/dublin.jpg" class="img-responsive img-circle" alt="Dublin">
            <h3>Dublin</h3>
            <p>The new destination is Dublin</p>
          </div>
        </div>
      </div>
    </div>

<?php require 'content-parts/footer.php'; ?>