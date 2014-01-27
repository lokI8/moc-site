<?php 
session_start();
if(isset($_POST['vmname']))
$_SESSION['vmname'] = $_POST['vmname'];
if(isset($_GET['m']) && $_GET['m'] == 'matlab')
$_SESSION['m'] = $_GET['m'];
if(isset($_GET['state']))
$_SESSION['state'] = $_GET['state'];

if(isset($_GET['m']) && $_GET['m'] == 'delete') {
unset($_SESSION['m']);
unset($_SESSION['vmname']);
unset($_SESSION['state']);

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>MyCloud | Massachusetts Open Cloud</title>

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
			<li><a href="market.php"><i class="fa fa-shopping-cart"></i> Marketplace</a></li>
            <li class="active"><a href="mycloud.php"><i class="fa fa-cloud"></i> MyCloud</a></li>
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
					<h2><i class="fa fa-cloud"></i> My Cloud</h2>
					
					<?php if(isset($_SESSION['m']) && $_SESSION['m'] == 'matlab') { ?>
					<div class="item col-md-4">
					<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title"><?php echo (isset($_SESSION['vmname']) && $_SESSION['vmname'] != '' ? $_SESSION['vmname'] : 'Matlab Compute') ;?></h3>
					  </div>
					  <div class="panel-body">
					  <p>Type: Matlab
					  <br />
					  IP: XXX.XXX.XXX.XXX
					  <br />
					  State: <?php 
						
						if(isset($_SESSION['state']) && $_SESSION['state'] == 'off' )
						echo 'Off';
						else
						echo 'On';
						?>
					  </p>
					  <p align="center">
					  <?php 
						
						if(isset($_SESSION['state']) && $_SESSION['state'] == 'off' )
						echo '<a href="mycloud.php?state=on" ><i class="fa fa-play fa-5x"></i><br />Run Machine</a>';
						else
						echo '<a href="mycloud.php?state=off" ><i class="fa fa-pause fa-5x"></i><br />Pause Machine</a></a>';
						?>
						</p>
					  </div>
					  <div class="panel-footer" align="center">		
						<p align="center">				
						<button class="btn btn-primary" data-toggle="modal" data-target="#matlabSettingsModal"><i class="fa fa-gears"></i> Manage</button> 
						<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o"></i> Delete</button>					
						</p></div>
					</div>
					</div>
					<?php } else { ?>
					<div class="alert alert-warning alert-dismissable">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Wait a minute!</strong> You don't have any clouds yet. Visit the <a href="market.php">marketplace</a> to deploy a cloud.
					</div>
					<?php } ?>
					
				</div>
	  
		  </div>		
      </div>
	  
<!-- Matlab Modal -->
		<div class="modal fade" id="matlabSettingsModal" tabindex="-1" role="dialog" aria-labelledby="matlabModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="matlabModalLabel"><i class="fa fa-gears"></i> Settings</h4>
			  </div>
			  <div class="modal-body">
				<form class="form-horizontal" role="form" id="form-vm-settings" action="mycloud.php" method="post">
				  <div class="form-group">
					<label for="vmname" class="col-sm-2 control-label">VM Name</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="vmname" name="vmname" placeholder="Enter a Name" value="<?php echo (isset($_SESSION['vmname']) && $_SESSION['vmname'] != '' ? $_SESSION['vmname'] : 'Matlab Compute') ;?>">
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
				  <div class="form-group">
					<label class="col-sm-2 control-label">I.P.</label>
					<div class="col-sm-8">
					  <p class="form-control-static">XXX.XXX.XXX.XXX <a class="pull-right" style="cursor:pointer;">Need Help Connecting?</a></p>
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-2 control-label">Type</label>
					<div class="col-sm-8">
					  <p class="form-control-static">Matlab</p>
					</div>
				  </div>				  
				  <div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
					  <p class="form-control-static">Donec ut fermentum nunc. Integer tincidunt tincidunt tortor, consequat gravida sem eleifend nec.</p>
					</div>
				  </div>				  
				
				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<p class="form-control-static">
						<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o"></i> Delete</button></p>
					</div>
				  </div>				  
				</form>				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" form="form-vm-settings">Save</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
<!-- Delete Modal -->
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="deleteModalLabel">No Disassemble!</h4>
			  </div>
			  <div class="modal-body">
				<p>Are you sure you want to delete the machine: "<?php echo (isset($_SESSION['vmname']) && $_SESSION['vmname'] != '' ? $_SESSION['vmname'] : 'Matlab Compute') ;?>"?</p>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a href="mycloud.php?m=delete" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
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
	<script>
	  $('.powered').tooltip({
          selector: "a[data-toggle=tooltip]"
        });
	</script>
  </body>
</html>
