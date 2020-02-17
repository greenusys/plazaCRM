
	    <div class="row mt-4">
		    <div class="col-sm-6">
			    <div class="card bg-white shadow p-3">
				   <form action="" method="POST">
						<div class="row ">
						    <div class="offset-1 col-md-8">
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-4 text-right">
											<label for="users">Select Users<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<select type="text" class="form-control" id="users" style="width:100%">
												<option disabled="" selected="">Select User</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary text-weight-bold text-white">Go</button>
							</div>
						</div>
					
					</form>
				</div>
			</div>
		</div>

		<div class="mt-3">
			<div class="card p-2">
		      <div class="card-header row border-bottom py-1">
		        <div class="col-md-6">
		          <span><strong>Attendance Report</strong></span>
		        </div>
		         <div class="col-md-6 text-right">
		          <button class="btn btn-success p-1" data-toggle="modal" data-target="#addTodoModal" >Add New</button>
		        </div>
		      </div>
		      <div class="p-2">
                   <table class="table table-striped display nowrap" id="table2">
                 
                      <thead class="">
                       <tr>
                          <th></th>
                           <th></th>
                         <th>What To Do</th>
                         <th>Status</th>
                         <th>End Date</th>
                          <th></th>
                       </tr>
                      </thead>
            
                    <tbody>
                        <tr>
                            <td class="sorter text-white">1</td>
                            <td><input type="checkbox" name="" ></td>
                            <td>Row 1</td>
                            <td>Record 1</td>
                            <td>Record 1</td>
                            <td><span class="p-1 text-white btn btn-info" title="Edit"><i class="far fa-edit"></i></span>
                            <span class="p-1 ml-2 text-white btn btn-danger" title="Delete"><i class="far fa-trash-alt"></i></span></td>
                        </tr>
                       <tr>
                            <td class="sorter text-white">1</td>
                            <td><input type="checkbox" name="" ></td>
                            <td>Row 1</td>
                            <td>Record 1</td>
                            <td>Record 1</td>
                            <td><span class="p-1 text-white btn btn-info" title="Edit"><i class="far fa-edit"></i></span>
                            <span class="p-1 ml-2 text-white btn btn-danger" title="Delete"><i class="far fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td class="sorter text-white">1</td>
                            <td><input type="checkbox" name="" ></td>
                            <td>Row 1</td>
                            <td>Record 1</td>
                            <td>Record 1</td>
                            <td><span class="p-1 text-white btn btn-info" title="Edit"><i class="far fa-edit"></i></span>
                            <span class="p-1 ml-2 text-white btn btn-danger" title="Delete"><i class="far fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td class="sorter text-white">1</td>
                            <td><input type="checkbox" name="" ></td>
                            <td>Row 1</td>
                            <td>Record 1</td>
                            <td>Record 1</td>
                            <td><span class="p-1 text-white btn btn-info" title="Edit"><i class="far fa-edit"></i></span>
                            <span class="p-1 ml-2 text-white btn btn-danger" title="Delete"><i class="far fa-trash-alt"></i></span></td>
                        </tr>
                    </tbody>
              <!--       <tfoot>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                    </tfoot> -->

                  </table>
		      	
		      </div>
			</div>
		</div>
	</section>
</div>
  <script>
     $(document).ready(function() {
        $("#users").select2();
         
      });
  </script>
               <!-----------todo add modal----------->
<div class="modal fade" id="addTodoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add TODO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="line mt-2"></div>
      <div class="modal-body">
        <div class=" mt-4">
          <div class="card ">
          
              <form>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Users <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <select class="form-control" name="todouser" placeholder="">
                      <option selected="" disabled="">Select User</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>What To DO <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <textarea class="form-control" row="4"></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Status <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <select class="form-control" name="todouser" placeholder="">
                      <option selected="" disabled="">In Process</option>
                      <option value="">On Hold</option>
                      <option value="">Done</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Due Date <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <div class='input-group date datetimepicker1' id='datetimepicker1'>
                        <input type='text' name="task_start_date" class="form-control" />
                        <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                    </div>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
 <!--      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>