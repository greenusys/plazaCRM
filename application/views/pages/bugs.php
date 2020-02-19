<!-- <!DOCTYPE html>
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

</head> -->
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
   
</style>
<!-- <body class="bg-light"> -->
	<div class="container-fluid card bg-white  ">
	    <div class="row bg-light p-0">
		    <div class="tab">
				<div class="container" id=" mydiv">
					<button class="tablinks  active" onclick="openCity(event, 'all')">All Bugs</button>
					<button class="tablinks " onclick="openCity(event, 'new')">New Bugs</button>
				</div>
			</div>
		</div>
		<div class="row bg-white p-0">
			<div id="all" class="tabcontent">
			<table id="example" class="display nowrap" style="width:100%">
				<thead>
					<th>Bug Title</th>
					<th>Date</th>
					<th>Status</th>
					<th>Severity</th>
					<th>Reporter</th>
					<th>ASSigned To </th>
					<th>Action</th>
				</thead>
				<tbody>
					<tr>
						<td><a href="#">Edit mode not displaying all the item</a></td>
						<td>07.30.2019 10:30</td>
						<td>
							<div class="row">
								<div class="col-sm-4">
								<label class="bg-success text-white p-1">Resolved</label>
								</div>
								<div class="col-sm-6">
									<select class=" form-control" name="department">
									<option value="name1">Change</option>
									<option value="name2">Verified</option>
									<option value="name3">Resolved</option>
									<option value="name1">In Progress</option>
									<option value="name2">Confirmed</option>
									<option value="name3">Unconfirmed</option>
									</select>
								</div>
							</div>
						</td>
						<td><label class="bg-primary text-white p-1">Minor</label></td>
						<td>Undefined User</td>
						<td>Everyone<i class="fa fa-question-circle"></i> <i class="fa fa-plus text-primary"></i></td>
						<td scope="row" >
							<button type="button"  id="edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
							
							<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
						</td>
				
					</tr>
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
			    <!-- <table class="table table-striped ">
					<thead>
						<tr class="text-center">
							<th>Bug Title</th>
							<th>Date</th>
							<th>Status</th>
							<th>Severity</th>
							<th>Reporter</th>
						   	<th>ASSigned To </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
				  
						  <tr>
							<td><a href="#">Edit mode not displaying all the item</a></td>
							<td>07.30.2019 10:30</td>
							<td>
								<div class="row">
									<div class="col-sm-4">
								       <label class="bg-success text-white p-1">Resolved</label>
								    </div>
								    <div class="col-sm-6">
									    <select class=" form-control" name="department">
					                       <option value="name1">Change</option>
					                       <option value="name2">Verified</option>
					                       <option value="name3">Resolved</option>
					                       <option value="name1">In Progress</option>
					                       <option value="name2">Confirmed</option>
					                       <option value="name3">Unconfirmed</option>
					                    </select>
					                </div>
				                </div>
							</td>
							<td><label class="bg-primary text-white p-1">Minor</label></td>
							<td>Undefined User</td>
							<td>Everyone<i class="fa fa-question-circle"></i> <i class="fa fa-plus text-primary"></i></td>
							<td scope="row" >
							    <button type="button"  id="edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
								
								<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
							</td>
					 
						</tr>
						  
					</tbody>
					
                </table> -->
			</div>

			<div id="new" class="tabcontent">
			    <div class="row mt-3">
				    <div class="col-md-12">
				    	<form>
					    	<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style" >Issue # <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="ITOWEK8">
									</div>
								</div>
							</div>
						    <div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Bug Title  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Related To </label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="department">
											<option value="none">None</option>
											<option value="project">Projects</option>
											<option value="oppor">Opportunities</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Reporter  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="department">
											<option value="admin">Adminko(admin)</option>
											<option value="admin1">ravish beg(staff)</option>
											<option value="admin2">rahul Kumar(staff)</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Priority  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="department">
											<option value="high">High</option>
											<option value="medium">Medium</option>
											<option value="low">Low</option>
											<option value="ok">Ok</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Severity  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="department">
											<option value="minor">Minor</option>
											<option value="major">Major</option>
											<option value="show">Show Stopper</option>
											<option value="must">Must be Fixed</option>
										</select>
									</div>
								</div>
							</div>
									
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Description</label>
									</div>
									<div class="col-sm-7">
										<textarea name="remarks" id="reset1" cols="70" rows="1">
						  							
										</textarea>
										<script>
										   CKEDITOR.replace('reset1');
										</script>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Reproducibility</label>
									</div>
									<div class="col-sm-7">
										<textarea name="remarks" id="reproduct" cols="70" rows="1">
						  							
										</textarea>
										<script>
										   CKEDITOR.replace('reproduct');
										</script>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Bug Status  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="department">
											<option value="unconform">Unconfirmed</option>
											<option value="conform">Confirmed</option>
											<option value="in">In Progress</option>
											<option value="resolved">Resolved</option>
											<option value="verified">Verified</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Assigned To <span class="text-danger">*</span></label>
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
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="label-style">select Users<span class="text-danger">*</span></label>
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
						    <div class="row mt-5">
				               <div class="offset-4 col-sm-4">
				                 <button type="submit" class="btn bg-color m-auto text-center w-50">Save</button>
				               </div>
				            </div>
						<form>
					</div>
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
</script>

<script>
  $( function() {
	$( "#datepicker" ).datepicker();
  } );
</script>

<script>
  $( function() {
	$( "#datepicker1" ).datepicker();
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
  $("#edit").click(function(){
    $("#all").hide();
    $("#new").show();
  });
 
});
</script>
<!-- 
</body>
</html> -->
