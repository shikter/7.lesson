<?php require_once("header.php");?>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
      <ul class="nav navbar-nav">
	  
        <li><a href="app_b.php">App page</a></li>
		<li class="active"><a href="table_b.php">Table</a></li>
		
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




	<div class="container">
	
		<h1>This is the Table page!</h1>
		
		
		<form>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="form-group">
						<label for="to">To: </label>
						<input name="to" id="to" type="text" class="form-control">
						
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
						<div class="form-group">
							<label for="message">Message: </label>
							<input name="message" id="message" type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
				<!-- btn-lg   visible-xs-inline  hidden-xs-->
					<input class="btn btn-primary" type="submit" value="Save data 1">
					<input class="btn btn-primary btn-block " type="submit" value="Save data 2">
					
				</div>
			</div>
		</form>
	</div>



  </body>
</html>