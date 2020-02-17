<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- Multiple select link -->  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
       <!-- end Multiple select link -->  
</head>
<style>
  .mt
    {
	   margin-top:-36px;
    }
	.mt1
    {
	   margin-top:-70px;
   }
   .bg-table-color
{
	background-color: #6c757d69!important;
}
</style>
<body class="bg-light">
    <div class="container bg-white p-5 mt-5" id="ticket">
	    <div class="row">
			<div class="col-md-10">
			   <h6 class="mt">All Department</h6>
			</div>
			<div class="col-md-2">
			   <a href="newdepartment.php" class="text-dark"><h6 class="mt">New Department</h6></a>
			</div>
		</div>
		<div class="line"></div>
		<div class="row pd-5 mt-4">
			<div class="col-sm-6">
			   <h5 class="mt-2 text-dark font-weight-bold">IT / Collaborative</h5>
			   <h6>Department head:<span class="text-info"> Jonathan Tornil Grasa</span></h6>
			</div>
			<div class="col-sm-3">
			   <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-square-o"></i></button>
			   <button type="button" class="btn btn-danger " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
			</div>
		</div>
		<div class="row">
		    <div class=" col-md-8">
		        <table class="table table-striped  table-bordered">
					<thead>
						<tr>
							<th scope="col" class="fs1">#</th>
							<th scope="col" class="fs1">Designation</th>
							<th scope="col" class="fs1">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row" class="text-info">1</td>
							<td scope="row" >Head Of Collaborative</td>
							<td scope="row" >
							    <a href="departmentform.php"><button type="button" class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></a>
								
								<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>
						<tr>
							<td scope="row" class="text-info">2</td>
							<td scope="row">Administrator</td>
							<td scope="row">
							     <a href="departmentform.php"><button type="button" class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></a>
								
								<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>
						<tr>
							<td scope="row" class="text-info">3</td>
							 <td scope="row" >VIE</td>
							<td scope="row" >
							     <a href="departmentform.php"><button type="button" class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></a>
								
								<button type="button" class="btn btn-danger  " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>
						<tr>
							<td scope="row" class="text-info">4</td>
							 <td scope="row" >Coordinator</td>
							<td scope="row" >
							     <a href="departmentform.php"><button type="button" class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></a>
								
								<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>
					</tbody>
				</table> 
		    </div>
		</div>
	</div>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: 0px solid #dee2e6;">
        <h5 class="modal-title" id="exampleModalLabel">Edit Departments</h5>
		<div class="line"></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-4">
						<label for="exampleInputEmail1">Edit Departments <span class="text-danger">*</span></label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="new" aria-describedby="emailHelp" placeholder="IT/Collaborative">
					</div>
				</div>
			</div>  
		</form>
      </div>
      <div class="modal-footer " style="border-top: 0px solid #dee2e6;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>	



 </body>
</html>