<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Fly Guys</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="public/css/style.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

  <?php require 'content-parts/navbar.php'; ?>

    <div class="homepage-header">
      <div class="homepage-header-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#booking" data-toggle="tab">Booking</a></li>
                <li><a href="#status" data-toggle="tab">Flight Status</a></li>
                <li><a href="#find-flight" data-toggle="tab">Find Flight</a></li>
              </ul>
                <div class="tab-content booking">
                  <div class="tab-pane active" id="booking">
                    <div class="row">
                      <div class="col-md-12">
                        <form id="flight-search" action="flight-search.php" method="post">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="from">Flying from</label>
                                <div class="input-group input-group-lg">
                                  <select id="from" name="from" class="selectpicker" data-live-search="true" title="Where are you flying from?">
                                    <?php foreach ($allDestinations as $destination) { ?>
                                    <option value="<?= $destination->destinationName;?>"><?= $destination->destinationName;?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="from">Flying to</label>
                                <div class="input-group input-group-lg">
                                  <select id="to" name="to" class="selectpicker" data-live-search="true" title="Where are you flying to?">
                                    <?php foreach ($allDestinations as $destination) { ?>
                                    <option value="<?= $destination->destinationName;?>"><?= $destination->destinationName;?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="from">Date</label>
                                  <input type="date" class="form-control input-lg" name="departureDay" required />
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-lg">Search</button>
                        </form>
                     </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="status">
                    <div class="row">
                      <div class="col-md-12 table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Flight Number</th>
                              <th>Origin</th>
                              <th>Destination</th>
                              <th>Departure Day</th>
                              <th>Departure Time</th>
                              <th>Arrival Time</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($flightsOfToday as $flight) { ?>
                            <tr>
                              <td><?= $flight->flightNumber;?></td>
                              <td><?= $flight->origin;?></td>
                              <td><?= $flight->destination;?></td>
                              <td><?= $flight->departureDay;?></td>
                              <td><?= $flight->departureTime;?></td>
                              <td><?= $flight->arrivalTime;?></td>
                              <td><?= $flight->status;?></td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                     </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="find-flight">
                    <div class="row">
                      <div class="col-md-12">
                        <form id="find-flight-search" action="flight-search.php" method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="flightNumber">Flight Number</label>
                                <input id="flightNumber" name="flightNumber" class="form-control input-lg" type="text" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="from">Date</label>
                                <div class="input-group input-group-lg input-append date" id="datePicker-find-flight">
                                    <input type="text" class="form-control" name="date" required>
                                    <span class="input-group-addon add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Find flight</button>
                        </form>
                     </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="featured-destinations">
        <div class="row">
          <div class="col-sm-12">
            <h1>Featured Destinations</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 destination">
            <img src="https://carpe-noctem.no/showcase/flyguys/assets/images/paris.jpg" class="img-responsive img-circle" alt="Paris">
            <h3>Paris</h3>
            <p>The new destination is Paris</p>
          </div>
          <div class="col-sm-4 destination">
            <img src="https://carpe-noctem.no/showcase/flyguys/assets/images/madrid.jpg" class="img-responsive img-circle" alt="Madrid">
            <h3>Madrid</h3>
            <p>The new destination is Madrid</p>
          </div>
          <div class="col-sm-4 destination">
            <img src="https://carpe-noctem.no/showcase/flyguys/assets/images/dublin.jpg" class="img-responsive img-circle" alt="Dublin">
            <h3>Dublin</h3>
            <p>The new destination is Dublin</p>
          </div>
        </div>
      </div>

    </div>

    <div class="container">
      <div class="jumbotron">
        <h1>More featured content</h1>
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
    responsive, mobile-first projects on the web.</p>
  </div>
</div>

    <div class="section-colour yellow">
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

    <div class="section-colour red">
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

    <div class="section-colour turquoise">
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

<?php require 'content-parts/footer.php'; ?>