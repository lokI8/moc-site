<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/ico/favicon.png">

    <title>Log In | Massachusetts Open Cloud</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css' />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
	<link href="css/moc.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
	<?php 
	 echo $message;
	?>
	

	<div class="modal fade" aria-hidden="true" role="dialog" aria-labelledby="loginModalLabel" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="display:none;">&times;</button>
		
        <h4 class="modal-title" id="loginModalLabel" style="text-align:center;"> <a><i class="fa fa-cloud fa-4x"></i></a></h4>
      </div>
      <div class="modal-body">
      <form class="form-signin" id="form-login" role="form" action="./home.php" method="post">
		<h4 class="form-signin-heading" align="center">Please Log In</h4>
		<input type="hidden" id="sound" name="sound" value="decibels" />
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus />
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" />  
	  </form>
		
      </div>
      <div class="modal-footer">        
        <p><button class="btn btn-lg btn-primary btn-block" type="submit" form="form-login">Log In</button></p>
		<p align="center">
<a href="#">Register</a> | <a href="#">Forgot User/Password</a>
</p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	
	
	
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	$('#loginModal').modal({
  backdrop: false,
  keyboard: false,
  show: true
})
	</script>
  </body>
</html>