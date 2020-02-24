<style>
	.tabcontent 
	{
	    display: none;
	    width: 100%;
	    padding: 15px 25px;
	    border: 1px solid #ccc;
	    border-top: none;
	}
	.label-style
	{
	    font-size:14px;
	    font-weight:bold;
	    color: #3c3e40!important;
	}
	.bg-color
	{
	    background-color: #6777ef;
	    color:white;
	}
   .straight
   {
   	    border-right: 1px solid gray;
   }
   .container1 
   {
	    display: block;
	    position: relative;
	    padding-left: 35px;
	    margin-bottom: 12px;
	    cursor: pointer;
	    font-size: 14px;
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
   }

	.container1 input 
	{
	   position: absolute;
	   opacity: 0;
	   cursor: pointer;
	}
	.checkmark1 
	{
	    position: absolute;
	    top: 0;
	    left: 0;
	    height: 25px;
	    width: 25px;
	    background-color: #eee;
	    border-radius: 50%;
	}
	.container1:hover input ~ .checkmark1 
	{
	    background-color: #ccc;
	}
	.container1 input:checked ~ .checkmark1 
	{
	    background-color: #2196F3;
	}
	.checkmark1:after 
	{
	    content: "";
	    position: absolute;
	    display: none;
	}
	.container1 input:checked ~ .checkmark1:after 
	{
	    display: block;
	}
	.container1 .checkmark1:after {
	 	top: 9px;
		left: 9px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: white;
	}

</style>

	<div class="container-fluid card mt-5">
	    <div class="row bg-light p-0">
		    <div class="tab">
				<div class="container tabsb " id=" mydiv">
					<button class="tablinks btn active" onclick="openCity(event, 'all')">All Invoices</button>
					<button class="tablinks btn" onclick="openCity(event, 'Create')">Create Invoice</button>
				</div>
			</div>
		</div>
		<div class="row bg-white p-0">
			<div id="all" class="tabcontent">
			    <!-- <table class="table table-striped ">
					<thead>
						<tr class="text-center">
							<th>Invoice</th>
							<th>Invoice Date</th>
							<th>Due Date</th>
							<th>Client Name</th>
							<th>Due Amount</th>
						   	<th>Status </th>
							<th>Action</th>
						</tr>
					</thead>
								
                </table> -->
                <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               
                            <th>Invoice</th>
							<th>Invoice Date</th>
							<th>Due Date</th>
							<th>Client Name</th>
							<th>Due Amount</th>
						   	<th>Status </th>
							<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          
                        </tbody>
                        <!--<tfoot>-->
                        <!--   <tr>-->
                               
                        <!--        <th>Name/Title</th>-->
                        <!--        <th>Date</th>-->
                        <!--        <th>Account Name</th>-->
                        <!--        <th>Ammount</th>-->
                        <!--        <th>Status</th>-->
                        <!--        <th>Attachment</th>-->
                        <!--        <th>Action</th>-->
                        <!--    </tr>-->
                        <!--</tfoot>-->
                    </table>
			</div>

			<div id="Create" class="tabcontent">
				<form>
			        <div class="row mt-3">
				        <div class="col-md-7 straight">
					        <div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Ref No  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="INV-2020-Feb-18-0001">
									</div>
									<div class="col-sm-2">
										<label class="bg-info p-1 text-white" id="recur">Recurring</label>
									</div>
								</div>
							</div>
							<div id="moredata">
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="ml-4 label-style">Recur Every </label>
										</div>
										<div class="col-sm-5">
											<select class=" form-control" name="department">
												<option value="none">None</option>
												<option value="7D">Week</option>
												<option value="1M">Month</option>
												<option value="3M">Quarter</option>
												<option value="6M">Six Monthly</option>
												<option value="1Y">One Year</option>
												<option value="2Y">Two year</option>
												<option value="3Y">Three Year</option>
											</select>
										</div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="label-style ml-4">Start Date</label>
										</div>
										<div class="col-sm-6">
											<input type="text" id="datepicker" placeholder="" class="form-control">
										</div>
										<div class="col-sm-1">
											<button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
										</div>
									</div>
								</div>
						
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="label-style ml-4">End Date </label>
										</div>
										<div class="col-sm-6">
											<input type="text" id="datepicker1" placeholder="" class="form-control">
										</div>
										<div class="col-sm-1">
											<button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
										</div>
									</div>
								</div>
							</div>
							   
							<div class="form-group">
							    <div class="row">
									<div class="offset-1 col-sm-2">
										<label for="exampleInputEmail1" class="label-style"> Client  <span class="text-danger">*</span> </label>
									</div>
									<div class="col-sm-6">
										<div class="input-group">
		                                    <select name="client_id" class="form-control select_boxs" style="width: 100%" required="" id="client_main_id" data-parsley-id="6" tabindex="-1" aria-hidden="true">
		                                        <option value="" selected="" disabled="">Select Client</option>
		                                        <?php
		                                        foreach ($clients as $clnt) {
		                                        ?>
		                                        <option value="<?=$clnt->client_id?>"><?=$clnt->name?></option>
		                                    <?php } ?>
		           		                    </select>
			                            </div>
									</div>
								</div>
							</div>
<script>
$(document).on('change','#client_main_id',function(){
	var client_id = $(this).val();
	$.ajax({
		type:'POST',
		data:{
			client_id:client_id
		},
		url:'<?=base_url()?>Sales/fetch_project',
		success:function(response){
			var response = JSON.parse(response);
			var html='';
			html+='<option value="" selected="" disabled="">Select Project</option>';
			if (response.status==1) {
				for(var i=0;i<response.data.length;i++){
				html+='<option value="'+response.data[i].project_id+'">'+response.data[i].project_name+'</option>';
				}
			  $('#project_main_id').empty();
			  $('#project_main_id').append(html);
			}
			else{
			  $('#project_main_id').empty();
			  $('#project_main_id').append(html);
			}
		}
	})
})	
</script>
				<div class="form-group">
								<div class="row">
									<div class=" col-sm-3">
										<label for="exampleInputEmail1" class="ml-5 label-style">Projects </label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control" name="department" id="project_main_id">
											<option value="high">None</option>
										</select>
									</div>
								</div>
							</div>
							 <div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="label-style ml-4">Invoice Date</label>
										</div>
										<div class="col-sm-6">
											<input type="text" id="datepicker2" placeholder="" class="form-control">
										</div>
										<div class="col-sm-1">
											<button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
										</div>
									</div>
								</div>
						
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="label-style ml-5">Due Date </label>
										</div>
										<div class="col-sm-6">
											<input type="text" id="datepicker3" placeholder="" class="form-control">
										</div>
										<div class="col-sm-1">
											<button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
										</div>
									</div>
								</div>
							
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1" class="label-style ml-3">Discount Type</label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control" name="department">
											<option selected="">No Discount</option>
											<option value="before_tax">Before Tax</option>
											<option value="after_tax">After Tax</option>
											
										</select>
									</div>
								</div>
							</div>
<script type="text/javascript">
$(document).ready(function(){
  $(".btn1").click(function(){
    $(".dvPassport").hide();
  });
 
});

    $(function () {
        $(".customize_permission").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport").show();
            } else {
                $(".dvPassport").hide();
            }
        });
    });
</script>

			
      	<div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Assigned To <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="" name="everyone" id="everyone" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="" name="everyone" class="customize_permission"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
              </div>
            </div>
          </div>
                    <div class="form-group dvPassport"  style="display: none">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                 <?php
                 $count=1;
                 foreach ($users as $user) {
                 ?>

                   <input type="checkbox" value="<?=$user['user_id']?>" class="chkPassport admind" > <?=$user['username']?> 
                   <?php
                   if ($user['role_id']=='1') {
                   echo '<strong class="badge btn-danger">Admin</strong>';
                   }
                   else{
                   	echo '<strong class="badge btn-primary">Staff</strong>';
                   }
                   ?>
                 <br>
                 <div class="row dvPassport"  id="dvPassport<?=$count?>" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" class="data" value="View" > View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" class="data" value="Edit" > Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" class="data" value="Delete"> Delete
                  </div>
                 </div>
                 <?php
                 $count++;
                  }
                 ?>
              </div>
            </div>
          </div>

<!-- 							<div class="form-group">
								<div class="row">
									<div class=" col-sm-3">
										<label for="exampleInputEmail1" class=" label-style ml-4">Permission<span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-7">
									
										<div class="checkbox c-radio needsclick ">
											<input type="radio" name="gender" value="male" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
										</div>
										<div class="checkbox c-radio needsclick">
											<input type="radio" name="gender" value="male" id="chkPassport" onclick="ShowHideDiv(this)" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
										</div>
									</div>
								</div>
						    </div> -->
<!-- 							<div class="form-group"  id="dvPassport" style="display: none">
						        <div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1" class="label-style ml-3">select Users<span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-8">
										 <input type="checkbox" name="vehicle1" value="Bike"  id="chkPassport1" onclick="ShowHideDiv(this)"> admin <strong class="badge btn-danger">Admin</strong>
										 <br>
										 <div class="row"  id="dvPassport1" style="display: none">
										    <div class="col-md-3">
											 <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
											</div>
											<div class="col-md-3">
											     <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
											</div>
											<div class="col-md-3">
											    <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
											</div>
										 </div>
										 
		                                 <input type="checkbox" name="vehicle2" value="Car"  id="chkPassport2" onclick="ShowHideDiv(this)" > adminko <strong class="badge btn-danger">Admin</strong>
										 <br>
										 <div class="row"  id="dvPassport2" style="display: none">
										    <div class="col-md-3">
											 <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
											</div>
											<div class="col-md-3">
											     <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
											</div>
											<div class="col-md-3">
											    <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
											</div>
										 </div>
									</div>
							    </div>
						    </div> -->
						</div>
						<div class=" col-sm-5">
							<div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-4 ">Sales Agent</label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control" name="department">
											<option value="" selected="" disabled="">Select Sales Agent</option>
											<?php
											foreach ($users as $user) {
											?>
											<option value="<?=$user['user_id']?>"><?=$user['username']?></option>
										<?php } ?>
										</select>
									</div>
								</div>
							</div>
<!-- 							<div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-4">Allow Paypal</label>
									</div>
									<div class="col-sm-7">
										<label class="small-box">
										   <input type="checkbox">
										   <span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-4">Allow Stripe</label>
									</div>
									<div class="col-sm-7">
										<label class="small-box">
										   <input type="checkbox">
										   <span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-5">
										<label for="exampleInputEmail1" class="label-style ml-3">Allow Authorize.net</label>
									</div>
									<div class="col-sm-7">
										<label class="small-box">
										   <input type="checkbox">
										   <span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-4">
										<label for="exampleInputEmail1" class="label-style">Allow CCAvenue</label>
									</div>
									<div class="col-sm-7">
										<label class="small-box">
										   <input type="checkbox">
										   <span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-2">Allow Braintree</label>
									</div>
									<div class="col-sm-7">
										<label class="small-box">
										   <input type="checkbox">
										   <span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-4">Allow Mollie</label>
									</div>
									<div class="col-sm-7">
										<label class="small-box">
										   <input type="checkbox">
										   <span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-5">
										<label for="exampleInputEmail1" class="label-style ml-4">Allow PayUmoney</label>
									</div>
									<div class="col-sm-7">
										<label class="small-box">
										   <input type="checkbox">
										   <span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div> -->
						</div>
				    </div>
				    <div class="row mt-3">
				    	<div class="col-md-12">
					        <div class="form-group">
								<div class="row">
									<div class=" col-sm-1">
										<label for="exampleInputEmail1" class=" label-style ml-4">Notes</label>
									</div>
									<div class="col-sm-10">
										<textarea name="remarks" id="reset1" cols="100" rows="1" >
						  							
										</textarea>
										<script>
										   CKEDITOR.replace('reset1');
										</script>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="row">
				    	<div class="col-sm-4">
				    		<div class="form-group">
								<div class="row">
									<div class="col-sm-12">
										<select class=" form-control" name="item">
											<option value="minor">Add Items</option>
										</select>
									</div>
								</div>
							</div>
				    	</div>
                        <div class="offset-2 col-sm-6">
                        	<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1" class="label-style ">Show quantity as</label>
									</div>
									<div class="col-sm-9">
										<div class="example d-flex">
										    <label class="container1">Qty
												<input type="radio" checked="checked" name="radio">
												<span class="checkmark1"></span>
											</label>
											<label class="container1 ml-5">Hours
											   <input type="radio" name="radio">
											   <span class="checkmark1"></span>
											</label>
											<label class="container1 ml-5">Qty/hours
											   <input type="radio" name="radio">
											   <span class="checkmark1"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
				    	</div>
				    </div>
				    <div class="row">
				    	<table class="table ">
							<thead>
								<tr class="text-center">
									<th>Item Name</th>
									<th>Description</th>
									<th>Qty</th>
									<th>Price</th>
									<th>Tax Rate</th>
								   	<th>Total</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							    <tr id="show">
									<td>
										<textarea cols="30" rows="2" class="text-center">Item Name</textarea>
									</td>
									<td>
										<textarea cols="30" rows="2" class="text-center">Description</textarea>
									</td>
									<td>
										<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="1">
										<h6>Unit Type</h6>
									</td>
									<td>
										<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Price">
									</td>
									<td>
										<select class=" form-control" name="department">
											<option value="minor">NO Tax</option>
										</select>
									</td>
									<td></td>
									<td >
									   <label class="small-box" id="add">
										   <input type="checkbox" checked="checked">
										   <span class="checkmark"></span>
										</label> 
									</td>
								</tr>
								<tr id="data" style="display:none">
									<td>
										<textarea cols="30" rows="2" class="text-center"></textarea>
									</td>
									<td>
										<textarea cols="30" rows="2" class="text-center"></textarea>
									</td>
									<td>
										<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="1">
										
									</td>
									<td>
										<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="0">
									</td>
									<td>
										<select class=" form-control" name="department">
											<option value="minor">NO Tax</option>
										</select>
									</td>
									<td>0</td>
									<td >
									   <button type="button" id="delete" class="btn btn-danger  " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td colspan="2">Sub Total :	</td>
									<td>0.00</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
								    <td  colspan="1">Discount (%)</td>
									<td colspan="3"><input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="0"></td>
									<td>0.00</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
								    <td  colspan="1">Adjustment</td>
									<td colspan="3"><input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="0"></td>
									<td>0.00</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td colspan="2"> Total :	</td>
									<td>0.00</td>
								</tr>
							</tbody>
                        </table>
				    </div>
											
				    <div class="row mt-5">
		               <div class="offset-6 col-sm-6">
		                 <button type="submit" class="btn btn-primary ">Save as Draft</button>
		                  <button type="submit" class="btn btn-success ">Update</button>
		               </div>
		            </div>
		        </form>
			</div>
		</div> 
	</div>
	

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content style">
			    <div class="modal-header border-bottom-0">
				    <h5 class="modal-title" id="exampleModalLabel">Client list</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
			    </div>
			    <div class="line"></div>
				<div class="modal-body">
					<div class="card">
						<div class="tab">
						    <div class="container tabsb ">
								<button class="tablinks" onclick="openCity(event, 'general')">General</button>
								<button class="tablinks" onclick="openCity(event, 'contact')">Contact Details</button>
								<button class="tablinks" onclick="openCity(event, 'web')">Web</button>
								<button class="tablinks" onclick="openCity(event, 'host')">Hosting</button>
							</div>
						</div>
						<div id="general" class="tabcontent">
						    <form>
						    <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company Name <span class="text-danger">*</span> </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company Email <span class="text-danger">*</span> </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company VAT </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Customer Group  </label>
									</div>
									<div class="col-sm-9">
										<div class="input-group">
											<select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
					        </div>
					        <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Language  </label>
									</div>
									<div class="col-sm-9">
										<div class="input-group">
											<select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
					        </div>
					        <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Currency </label>
									</div>
									<div class="col-sm-9">
										<div class="input-group">
											<select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Short Note  </label>
									</div>
									<div class="col-sm-9">
										<textarea class="form-control" name="short_note"></textarea>
									</div>
								</div>
					        </div>
							</form>
						</div>

						<div id="contact" class="tabcontent">
						  <form>
						  <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company Phone</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company Mobile </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Zip code </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div> 
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company City</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div> 
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company Country</label>
									</div>
									<div class="col-sm-9">
										<div class="input-group">
											<select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
												<option value="">India</option>
											</select>
										</div>
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company Fax</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
                            <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company Address </label>
									</div>
									<div class="col-sm-9">
										<textarea class="form-control" name="short_note"></textarea>
									</div>
								</div>
					        </div>	
                            <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1"> Latitude( Google Map ) </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
                            <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Longitude( Google Map ) </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
                          </form>							
						</div>

						<div id="web" class="tabcontent">
						   <form>
						    <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Company Website</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Skype id</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Facebook URL</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Twitter URL</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Linkedin URL</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
						  </form>
						</div>

						<div id="host" class="tabcontent">
						  <form>
						    <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Hosting Company</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Hosting</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Username</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Password</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1">Port</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							</form>
						</div>
					</div>
				</div>
			    <div class="modal-footer border-top-0 modal-butn">
     				<button type="button" class="btn btn-primary">Save</button>
			    </div>
			</div>
		</div>
	</div>
	
      <script>
	    function openCity(evt, cityName) {
	      var i, tabcontent, tablinks;
	      tabcontent = document.getElementsByClassName("tabcontent");
	      for (i = 0; i < tabcontent.length; i++) {
	      tabcontent[i].style.display = "none";
	      }
	      tablinks = document.getElementsByClassName("tablinks");
	      for (i = 0; i < tablinks.length; i++) {
	      tablinks[i].className = tablinks[i].className.replace(" active", "");
	      }
	      document.getElementById(cityName).style.display = "block";
	      evt.currentTarget.className += " active";
	    }
	    </script>
	 
	<script>
		// Add active class to the current button (highlight it)
		var header = document.getElementById("myDIV");
		var btns = header.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function() {
		  var current = document.getElementsByClassName("active");
		  current[0].className = current[0].className.replace(" active", "");
		  this.className += " active";
		  });
		}
   </script>

<script>
	$( document ).ready(function() 
	{
		$('#all').css('display','block');

		
	})
	 $(function () {
        $(".addgenral").click(function () {
            $('#general').css('display','block');
        });
    });
</script>




<script>
  $( function() {
	$( "#datepicker" ).datepicker(
		{ dateFormat: 'dd-mm-yy' }
		);
  } );
</script>

<script>
  $( function() {
	$( "#datepicker1" ).datepicker();
  } );
</script>
<script>
  $( function() {
	$( "#datepicker2" ).datepicker(
		{ dateFormat: 'yy-mm-dd' }
		);
  } );
</script>

<script>
  $( function() {
	$( "#datepicker3" ).datepicker(
		{ dateFormat: 'yy-mm-dd' }
		);
  } );
</script>

<script type="text/javascript">
    $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#chkPassport1").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport1").show();
            } else {
                $("#dvPassport1").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#chkPassport2").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport2").show();
            } else {
                $("#dvPassport2").hide();
            }
        });
    });
</script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("#dvPassport").hide();
  });
 
});
</script>

<script>
	$(document).ready(function(){
	  $("#add").click(function(){
	    $("#data").show();
	     
	  });
	 
	});
</script>
<script>
	$(document).ready(function(){
	  $("#delete").click(function(){
	    $("#data").hide();
	     
	  });
	 
	});
</script>

<script>
	$(document).ready(function(){
		$('#moredata').hide();
	  $("#recur").click(function(){
	    $("#moredata").toggle();
	  });
	 
	});
</script>


</body>
</html>