<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Scraper</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center white-text">
          <h1>Weather Scraper</h1>
          <p class="lead">This app pulls information using AJAX to scrape weather-forecast.com.
            The following is the 3-day forecast summary.</p>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="city" id="city" placeholder="e.g. London, Paris, San Francisco..."/>
            </div>
            <button id="findTheWeather" type="submit" class="btn btn-success btn-large">Find the weather</button>
          </form>
          <div id="weatherOutput" class="alert alert-success"></div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>