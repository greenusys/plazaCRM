<div class="container bg-white  mt-5" id="ticket">
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
		<?php
			// print_r($Deatils);
			foreach ($Deatils as $value ) {
			 // print_r($value);
			?>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-md-10">
							<h5 class="mt-2 text-dark font-weight-bold"><?=$value['Dept_name']?></h5>
				   			<h6>Department head:<span class="text-info"> Jonathan Tornil Grasa</span></h6>		
						</div>
						<div class="col-md-2">
						   <a href="javascript:void(0)" class="btn btn-primary fs"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-square-o"></i></a>
						   <a href="javascript:void(0)" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped  table-bordered">
								<thead>
									<tr>
										<th scope="col" class="fs1">#</th>
										<th scope="col" class="fs1">Designation</th>
										<th scope="col" class="fs1">Action</th>
									</tr>
								</thead>
								<tbody> 
									<?php
									$j=1;
										foreach ($value['designation'] as $desg) {
											# code...
											?>
												<tr>
													<td scope="row" class="text-info"><?=$j?></td>
													<td scope="row" ><?=$desg->designations?></td>
													<td scope="row" >
													    <a href="departmentform.php"><button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></a>
														
														<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
													</td>
												</tr>
											<?php
											$j++;
										}
									?>
									
											
									<!-- <tr>
										<td scope="row" class="text-info">2</td>
										<td scope="row">Administrator</td>
										<td scope="row">
										     <a href="departmentform.php"><button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></a>
											
											<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
										</td>
									</tr> -->
									
								</tbody>
							</table> 
						</div>
					</div>
				   
				</div>
			<?php
					
			}
			?>




	</div>
	<div class="row">
	    <div class=" col-md-8">
	       
	    </div>
	</div>
</div>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>	