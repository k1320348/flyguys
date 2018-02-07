<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In | Fly Guys</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="public/css/pace-theme-loading-bar.css">
    <link rel="stylesheet" href="public/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand">Fly Guys</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="destinations.php">Destinations</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="sign-in.php">Sign in</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="header-colour yellow">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="header-title">Sign in</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form id="login" class="form-boxed" action="login.php" method="POST">
            <div class="row">
              <div class="col-sm-12">
                <h2>I have a profile</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="email">Email (username) <span class="required">*</span></label>
                  <input id="email" name="email" class="form-control input-lg" type="email" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="password">Password <span class="required">*</span></label>
                  <input id="password" name="password" class="form-control input-lg" type="password" required>
                  <span class="help-block">Forgot your <a href="lost.php">password</a>?</span>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Log in</button>
          </form>
        </div>
        <div class="col-sm-6">
          <form id="register" action="profile-create.php" method="POST" class="form-boxed">
            <div class="row">
              <div class="col-sm-12">
                <h2>I don't have a profile</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="email">Email (username) <span class="required">*</span></label>
                  <input id="email" name="email" class="form-control input-lg" type="email" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input id="phone" name="phone" class="form-control input-lg" type="tel">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="password">Password <span class="required">*</span></label>
                  <input id="password" name="password" class="form-control input-lg" type="password" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="passwordRepeat">Repeat password <span class="required">*</span></label>
                  <input id="passwordRepeat" name="passwordRepeat" class="form-control input-lg" type="password" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <h3>Details</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="firstName">First name <span class="required">*</span></label>
                  <input id="firstName" name="firstName" class="form-control input-lg" type="text" required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="middleName">Middle name</label>
                  <input id="middleName" name="middleName" class="form-control input-lg" type="text">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="lastName">Last name <span class="required">*</span></label>
                  <input id="lastName" name="lastName" class="form-control input-lg" type="text" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="addressStreet">Street <span class="required">*</span></label>
                  <input id="addressStreet" name="addressStreet" class="form-control input-lg" type="text" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="addressCity">City <span class="required">*</span></label>
                  <input id="addressCity" name="addressCity" class="form-control input-lg" type="text" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="addressPostcode">Postcode <span class="required">*</span></label>
                  <input id="addressPostcode" name="addressPostcode" class="form-control input-lg" type="text" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="addressCountry">Country <span class="required">*</span></label>
                  <input id="addressCountry" name="addressCountry" class="form-control input-lg" type="text" required>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Create profile</button>
          </form>
        </div>
      </div>
    </div>

<?php require 'content-parts/footer.php'; ?>