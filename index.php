<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activity</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="script.js" type="text/javascript"></script>
</head>
<body>
	<body style="background-color: black;">
	<div class="card">
				<div class="card-body">
					<h4 class="card-title">Greetings!</h4>
					<p class="card-text">
					</p>

	<div class="container">
     					
      					<div class="row">
        					<div class="mx-auto">
								<form id="addForm" class="float-left">
									<div class="header">Add</div>
									<div class="form-group">
										<input type="number" class="form-control mr-2" name="id" placeholder="ID">
									</div>
									<div class="form-group">
										<input type="text" class="form-control mr-2" name="name" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="number" class="form-control mr-2" name="age" placeholder="Age">
									</div>
									<div class="form-group">
										<input type="text" class="form-control mr-2" name="course" placeholder="Course">
									</div>
									<div class="form-group">
										<button class="btn btn-success mr-2 w-100">Create</button>
									</div>
								</form>
							                           
								<form id="editForm" class="float-right">
									<div class="header">Edit</div>
									<div class="form-group">
										<input type="number" class="form-control mr-2" name="id" placeholder="ID" readonly>
									</div>
									<div class="form-group">
										<input type="text" class="form-control mr-2" name="name" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="number" class="form-control mr-2" name="age" placeholder="Age">
									</div>
									<div class="form-group">
										<input type="text" class="form-control mr-2" name="course" placeholder="Course">
									</div>
									<div class="form-group">
										<button class="btn btn-primary w-100 text-white">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
			
	<div class="row m-auto">
	<div class="col-lg">
		<div class="card">
				<div>
					<div >
	    				<h4 class="card-title"> User Details </h4 >
				<div class="card-body">
					<div class="table" id="viewRecords">
						<table class = "table table-striped table-dark">
							<thead class = "bg-dark text-white">
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Age</th>
									<th>Course</th>
									<th>Actions</th>
								</tr>
							</thead>
						<tbody class="tbody"></tbody>
					</table>
				</div>

					
</body>
</html>