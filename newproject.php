<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Dockyard Code Documentation System">
		<meta name="author" content="Rob Parham">
		<link rel="icon" href="favicon.ico">

		<title>Dockyard Code Documentation System</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="container">
			<h3>Dockyard</h3>
			<h5>New Project</h5>
			<hr>
			<div class='row'>
				<div class='col-lg-6'>
					
					<div class="form-group">
						<label for="title">Project Title:</label>
						<input type="text" class="form-control" id="title">
					</div>
					
					<div class="form-group">
						<label for="type">Type:</label>
						<select class="form-control" id="type">
							<option value='API'>Webservice API</option>
							<option value='Library'>Library</option>
							<option value='Plugin'>Plugin</option>
						</select>
					</div>
					
					<div class="form-group" style='display:none'>
						<label for="language">Language:</label>
						<select class="form-control" id="language">
							<option value='Javascript'>Javascript</option>
							<option value='PHP'>PHP</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="endpoint">Base Endpoint URL:</label>
						<input type="text" class="form-control" id="endpoint">
					</div>
					
					<div class="checkbox">
						<label><input type="checkbox" id="opensource" value="1">Open Source</label>
					</div>
					
					<div class="form-group" style="display:none;">
						<label for="url">Repository or Download URL:</label>
						<input type="text" class="form-control" id="url">
					</div>

					 <div class="form-group">
						 <label for="description">Comment:</label>
						 <textarea class="form-control" rows="5" id="description"></textarea>
					 </div>
					
				</div>
				<div class='col-lg-6'></div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
		<script src="js/newproject.js"></script>
	</body>
</html>
