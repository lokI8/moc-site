
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>Massachusetts Open Cloud</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css' />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
	<link href="css/moc.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
          <button type="button btn-primary" class="navbar-toggle btn" data-toggle="collapse" data-target=".navbar-collapse">
            <span>Menu <i class="fa fa-cog" style="margin-left:4px;"></i></span>
          </button>
            <a class="navbar-brand" href="home.php"><i class="fa fa-cloud fa-4x pull-left"></i> <span class="logoText pull-left"><strong>M</strong>ass<br /><strong>O</strong>pen<br /><strong>C</strong>loud</span></a>
          </div>
          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="market.php"><i class="fa fa-shopping-cart"></i> Marketplace</a></li>
            <li><a href="mycloud.php"><i class="fa fa-cloud"></i> MyCloud</a></li>
            <li><a href="login.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">	
		  <div class="row">
				<div class="col-md-3 sidebar">
					<div class="panel panel-default" style="display:none;">
					  <div class="panel-heading">
						<h3 class="panel-title">Marketplace</h3>
					  </div>
					  <div class="panel-body">
					  <a href="market.php" class="btn btn-primary" role="button"><i class="fa fa-shopping-cart"></i> View Market</a>
					  </div>
					</div>
				</div>
				<div class="col-md-9 content">
					<h2><i class="fa fa-th-list"></i> Updates</h2>
					
					<div class="update">
						<h3>Lorem Ipsum Dolar</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat in orci vitae varius. Proin nec dignissim sem. Quisque euismod vitae nulla a pharetra. Fusce condimentum interdum lorem volutpat placerat. Suspendisse magna velit, feugiat a nisl auctor, sagittis auctor elit. Donec vel turpis interdum, mattis quam facilisis, aliquam arcu. Nullam tristique porta nunc, eget faucibus neque scelerisque eu. Fusce hendrerit elementum justo, at faucibus nunc luctus adipiscing.</p>
						<p>Sed et nibh quis ante dapibus varius sed vel risus. Vestibulum in feugiat enim. Nam congue in diam at interdum. Etiam nec viverra ante. Mauris eget auctor mauris. Fusce semper dolor at mollis mollis. Praesent pellentesque felis a lorem convallis, in suscipit risus porta. Donec porta felis nec varius scelerisque. Sed tempor augue nec dolor laoreet, sed posuere elit laoreet. Praesent tincidunt tincidunt sapien vitae sollicitudin. Proin non varius enim.</p>
					</div>
					<div class="update">
						<h3>Nam Id Est Sapien</h3>
						<p>Suspendisse lobortis quam augue, non varius metus facilisis a. Vivamus ac consectetur augue, in elementum magna. Sed ac consequat massa. Aenean quis leo lectus. Morbi mi nunc, sollicitudin in consectetur at, accumsan nec eros. Pellentesque eu justo pharetra, venenatis magna vel, pellentesque mauris. Aenean nec pulvinar nulla. Curabitur et odio sit amet mauris mattis dapibus. Praesent sed sem ipsum.</p>
						<p>Etiam pulvinar neque vel leo euismod tincidunt. Cras consequat dui non ligula sodales, a luctus metus suscipit. Morbi tortor est, sodales et sodales eu, aliquet id turpis. Donec lacinia urna et lacinia ullamcorper. Suspendisse quis dui sit amet ante viverra facilisis sit amet eu ante. Etiam eu feugiat dui. Mauris aliquet consectetur nunc vitae iaculis. Praesent ac purus at nibh congue mollis. Praesent sagittis eget ante eget dapibus. In tempor ligula et enim molestie, sit amet molestie arcu dapibus. Proin vulputate hendrerit eros in tempor. Morbi quis venenatis augue, a consectetur lectus. Cras ac tempus mauris, sed malesuada nisi.</p>
					</div>					
				</div>
	  
		  </div>		
      </div>
	  

	  
	  
	  
	  
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted credit"><span class="copyright">&copy; 2013 MassOpenCloud</span> &nbsp; <span class="powered"><a href="http://idesignconsulting.com" target="_blank" data-toggle="tooltip" data-placement="top" title="Drop by iDesign for Web, Hosting, &amp; Print Needs">powered by iDesign Consulting</a></p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
	  $('.powered').tooltip({
          selector: "a[data-toggle=tooltip]"
        });
	</script>
  </body>
</html>
