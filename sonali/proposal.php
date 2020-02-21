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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
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
<body class="bg-light">
	<div class="container-fluid card bg-white w-75 mt-5">
	    <div class="row bg-light p-0">
		    <div class="tab">
				<div class="container" id=" mydiv">
					<button class="tablinks btn active" onclick="openCity(event, 'all')">All Proposala</button>
					<button class="tablinks btn" onclick="openCity(event, 'new')">New proposals</button>
				</div>
			</div>
		</div>
		<div class="row bg-white p-0">
			<div id="all" class="tabcontent">
			    <table class="table table-striped ">
					<thead>
						<tr class="text-center">
							<th>Proposal #</th>
							<th>Proposals Date</th>
							<th>Expired Date</th>
							<th>To</th>
							<th>Amount</th>
						   	<th>Status </th>
							<th>Action</th>
						</tr>
					</thead>
								
                </table>
			</div>

			<div id="new" class="tabcontent">
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
								</div>
							</div>
							
							<div class="form-group">
								<div class="row">
									<div class=" col-sm-3">
										<label for="exampleInputEmail1" class="ml-5 label-style">Related To </label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control" name="department">
											<option value="high">None</option>
										</select>
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
											<option value="minor">No Discount</option>
											<option value="major">Before Tax</option>
											<option value="show">After Tax</option>
											
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1" class="label-style ml-5">Status</label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control" name="department">
											<option value="minor">Draft</option>
											<option value="major">Sent</option>
											<option value="show">Open</option>
											<option value="minor">Revised</option>
											<option value="major">Declined</option>
											<option value="show">Accepted</option>
										</select>
									</div>
								</div>
							</div>

						</div>
						<div class=" col-sm-5">
							<div class="form-group">
								<div class="row">
									<div class=" col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-4 ">Assigned Users</label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control" name="department">
											<option value="minor">Adminko</option>
											<option value="major">Ravish Beg</option>
											<option value="show">Rahul Kumar</option>
											<option value="show">Shivam Saini</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class=" col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-4">Proposals date</label>
									</div>
									<div class="col-sm-6">
										<input type="text" id="datepicker2" placeholder="2020" class="form-control">
									</div>
									<div class="col-sm-1">
										<button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
									</div>
								</div>
							</div>
						
							<div class="form-group">
								<div class="row">
									<div class=" col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-4">Expired date </label>
									</div>
									<div class="col-sm-6">
										<input type="text" id="datepicker3" placeholder="2020" class="form-control">
									</div>
									<div class="col-sm-1">
										<button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class=" col-sm-4">
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
						    </div>
							<div class="form-group"  id="dvPassport" style="display: none">
						        <div class="row">
									<div class="col-sm-4">
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
						    </div>
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
	$( "#datepicker2" ).datepicker();
  } );
</script>

<script>
  $( function() {
	$( "#datepicker3" ).datepicker();
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

</body>
</html>