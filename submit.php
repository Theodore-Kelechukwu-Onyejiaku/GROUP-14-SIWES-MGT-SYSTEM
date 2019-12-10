<!DOCTYPE html>
<html>
<head>
  <title>Student Submission</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="Mycss.css">
  <script src="jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</head>
<body class="background1">
<div class="container">
  <nav class="navbar navbar-inverse navbar-fixed-top relative">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">
          SIWES MANAGEMENT PORTAL
        </a>
      </div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <li><a href="index.html"> <span class="glyphicon glyphicon-home"></span> HOME</a></li>
        <li><a href="Guide.html">Guide</a></li>
        <li><a href="About Us.html">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">LOG OUT</a>
            </li>
         </ul>
      </div>
    </div>
  </nav>
</div>  

<div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-0.5 col-md-4 col-lg-3"> 
      </div>

      <div class="col-sm-4 col-xs-11 col-md-4 col-lg-6">
         <div class="text-center text-danger well well-lg">
            <i class="fa fa-graduation-cap fa-3x"><br>Submit Monthly Work Experiences</i>
        </div>
        <form name="siwessubmission">
           <div class="form-group">
            <label for="w1" class="text-danger">Month 1:</label>
            <input class="form-control" type="file" id="w1" required>
           </div>
           <div class="form-group">
            <label for="w2" class="text-danger">Month 2:</label>
            <input class="form-control" type="file" id="w2" required>
           </div>
           <div class="form-group">
            <label for="w3" class="text-danger">Month 3:</label>
            <input class="form-control" type="file" placeholder="full name" id="w3" required>
           </div>
           <div class="form-group">
            <label for="w4" class="text-danger">Month 4:</label>
            <input class="form-control" type="file" id="w4" required>
           </div>
           <div class="form-group">
            <label for="w5" class="text-danger">Month 5:</label>
            <input class="form-control" type="file" id="w5" required>
           </div>
           <div class="form-group">
            <label for="m6" class="text-danger">Month 6:</label>
            <input class="form-control" type="file" id="m6" required>
           </div>
           <div class="btn-group">
                  <input type="submit" class="btn btn-danger boxshadow next" value="submit">
                  <input type="reset" class="btn btn-info boxshadow" value="clear">
           </div>
        </form>
      </div>
      <div class="col-sm-3 col-xs-0.5 col-md-4 col-lg-3"> 
      </div>
  </div>
</div>
</body>
</html>