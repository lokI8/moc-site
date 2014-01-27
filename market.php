
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>Marketplace | Massachusetts Open Cloud</title>

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
            <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
			<li class="active"><a href="market.php"><i class="fa fa-shopping-cart"></i> Marketplace</a></li>
            <li><a href="mycloud.php"><i class="fa fa-cloud"></i> MyCloud</a></li>
	    <li><a href="providers.php"><i class="fa fa-sun-o"></i> Providers</a></li>
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
					  <a href="market.php" class="btn btn-primary" role="button" style="display:none;"><i class="fa fa-shopping-cart"></i> View Market</a>
					  </div>
					</div>
				</div>
				<div class="col-md-9 content">
					<h2><i class="fa fa-shopping-cart"></i> Marketplace</h2>
					
					<div class="machine windows">
						<div class="col-md-3"><a class="thumbnail"><img data-src="js/holder.js/100%x150/text:windows%20machine/sky" alt="windows machine"></a></div>
						<div class="col-md-6 col-sm-8"><h4>Windows 7</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus feugiat enim, quis tempor felis. Donec aliquam, augue quis ullamcorper iaculis, lectus nibh semper felis, sed scelerisque justo purus eleifend augue. Sed venenatis nisl in ipsum ornare porta. Duis consectetur scelerisque turpis ac porta.</p></div>
						<div class="col-md-1 col-md-offset-2 col-sm-3 col-sm-offset-1"><button class="btn btn-primary btn-deploy" data-toggle="modal" data-target="#windowsModal"><i class="fa fa-cloud-upload"></i> Deploy</button></div>
					</div>
					<div class="clearfix"></div>
					<div class="machine ubuntu">
						<div class="col-md-3"><a class="thumbnail"><img data-src="js/holder.js/100%x150/text:ubuntu%20machine/lava" alt="ubuntu machine"></a></div>
						<div class="col-md-6 col-sm-8"><h4>Ubuntu with Wireshark</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus feugiat enim, quis tempor felis. Donec aliquam, augue quis ullamcorper iaculis, lectus nibh semper felis, sed scelerisque justo purus eleifend augue. Sed venenatis nisl in ipsum ornare porta. Duis consectetur scelerisque turpis ac porta.</p></div>
						<div class="col-md-1 col-md-offset-2 col-sm-3 col-sm-offset-1"><button class="btn btn-primary btn-deploy" data-toggle="modal" data-target="#ubuntuModal"><i class="fa fa-cloud-upload"></i> Deploy</button></div>
					</div>		
					<div class="clearfix"></div>					
					<div class="machine mysql">
						<div class="col-md-3"><a class="thumbnail"><img data-src="js/holder.js/100%x150/text:mysql%20machine/vine" alt="mysql machine"></a></div>
						<div class="col-md-6 col-sm-8"><h4>MySQL Server</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus feugiat enim, quis tempor felis. Donec aliquam, augue quis ullamcorper iaculis, lectus nibh semper felis, sed scelerisque justo purus eleifend augue. Sed venenatis nisl in ipsum ornare porta. Duis consectetur scelerisque turpis ac porta.</p></div>
						<div class="col-md-1 col-md-offset-2 col-sm-3 col-sm-offset-1"><button class="btn btn-primary btn-deploy" data-toggle="modal" data-target="#mysqlModal"><i class="fa fa-cloud-upload"></i> Deploy</button></div>
					</div>
					<div class="clearfix"></div>					
					<div class="machine matlab">
						<div class="col-md-3"><a class="thumbnail"><img data-src="js/holder.js/100%x150/text:matlab%20machine/social" alt="matlab machine"></a></div>
						<div class="col-md-6 col-sm-8"><h4>MatLab</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus feugiat enim, quis tempor felis. Donec aliquam, augue quis ullamcorper iaculis, lectus nibh semper felis, sed scelerisque justo purus eleifend augue. Sed venenatis nisl in ipsum ornare porta. Duis consectetur scelerisque turpis ac porta.</p></div>
						<div class="col-md-1 col-md-offset-2 col-sm-3 col-sm-offset-1"><button class="btn btn-primary btn-deploy" data-toggle="modal" data-target="#matlabModal"><i class="fa fa-cloud-upload"></i> Deploy</button></div>
					</div>	
					<div class="clearfix"></div>					
				</div>
	  
		  </div>		
      </div>
	  
		<!-- Matlab Modal -->
		<div class="modal fade" id="matlabModal" tabindex="-1" role="dialog" aria-labelledby="matlabModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="matlabModalLabel">Setup MatLab Machine</h4>
			  </div>
			  <div class="modal-body">
				<form class="form-horizontal" role="form" id="form-vm-deploy" action="mycloud.php?m=matlab&state=off" method="post">
				  <div class="form-group">
					<label for="vmname" class="col-sm-2 control-label">VM Name</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="vmname" name="vmname" placeholder="Enter a Name" autofocus />
					</div>
				  </div>
				  <div class="form-group">
					<label for="network" class="col-sm-2 control-label">Network</label>
					<div class="col-sm-8">
					  <select class="form-control" id="network" name="network" disabled>
						<option disabled selected>Select Network Type</option>
						<option>Private</option>
						<option>Public</option>						
					  </select>
					</div>
				  </div>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" form="form-vm-deploy"><i class="fa fa-cloud-upload"></i> Deploy</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	  
	  
	  
	  
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
	<script src="js/holder.js"></script>
	<script>
	  $('.powered').tooltip({
          selector: "a[data-toggle=tooltip]"
        });
	</script>
  </body>
</html>
