<!DOCTYPE html>
<html>
<head>
	<title>KMC</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" >
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="tabselection.js"></script>
</head>
<body> 
		<div class="container">
			<div class="row">
		        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 tab-container">
		            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 tab-menu">
		              <div class="list-group">
		                <a href="#" class="list-group-item active text-center">
		                  <h4 class="glyphicon glyphicon-user" style="font-size:3em;"></h4><br/>Sign IN
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="glyphicon glyphicon-file" style="font-size:3em;"></h4><br/>Get File
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="glyphicon glyphicon-home"></h4><br/>PG
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>ADMIN
		                </a>
		                <a href="#" class="list-group-item text-center">
		                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>XYZ
		                </a>
		              </div>
		            </div>
		            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 tab">
		                <!-- flight section -->
		                <div class="tab-content active">
		                <div class="">	
		                	<div class="login-panel panel panel-default">
			                    <div class="panel-heading">
			                        <h3 class="panel-title">Please Sign In</h3>
			                    </div>	
			                </div>	
			                <div class="panel-body">
	                        <form role="form" method="post">
	                            <fieldset>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="E-mail" name="uname" type="" autofocus>
	                                </div>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
	                                </div>
	                                <div class="form-group">
										<select class="form-control user_type" name="user_type">
												<option value="0">Select an user</option>
										</select>
	                                </div>
	                                <!-- Change this to a button or input when using this as a form -->
	                                <input type="submit" class="submit btn btn-primary" name="submit" value="Login"/>
	                            </fieldset>
	                        </form>
                    		</div>
                    	</div>	                
		                </div>
		                <!-- train section -->
		                <div class="tab-content">
		                    <div class="panel-body">
	                        <form role="form" method="post">
	                            <fieldset>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Patient Name" type="" autofocus>
	                                </div>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="KMC No." type="" value="">
	                                </div>
	                                <!-- Change this to a button or input when using this as a form -->
	                                <input type="submit" class="submit btn btn-primary" name="submit" value="Request File"/>
	                            </fieldset>
	                        </form>
                    		</div>
		                </div>
		    
		                <!-- hotel search -->
		                <div class="tab-content">
		                    <center>
		                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
		                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
		                      <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
		                    </center>
		                </div>
		                <div class="tab-content">
		                    <center>
		                      <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
		                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
		                      <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
		                    </center>
		                </div>
		                <div class="tab-content">
		                    <center>
		                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
		                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
		                      <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
		                    </center>
		                </div>
		            </div>
		        </div>
		  </div>
		</div>

		
		
</html>
 