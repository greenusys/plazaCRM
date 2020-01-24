<!--   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->

         
        
          <div class="row mt-4">
            <div class="col-lg-12">
              <div class="card">
               <!--  <div class="card-header">
                  <h4>Budget vs Sales</h4>
                </div> -->
             <!--    <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div> -->
                <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">All Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Jobs Posted</a>
                  </li>
               <!--    <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Expense</a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-5" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="job_post" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               
                                <th>Job Title</th>
                                <th>Designation</th>
                                <th>Vacancy</th>
                                <th>Last Date</th>
                                <th>Status</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Tittle</td>
                                <td>2011/04/25</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>61</td>
                            
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                            </tr>
                            
                            <tr>
                              <tr>
                              <td>Tittle</td>
                                <td>2011/04/25</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>61</td>
                       
                               <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                              
                                <td>Michael Bruce</td>
                              <td>2011/04/25</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>61</td>
                
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                           
                                <td>Donna Snider</td>
                                <td>2011/04/25</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>61</td>
                   
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                           <tr>
                              <th>Job Title</th>
                              <th>Designation</th>
                              <th>Vacancy</th>
                              <th>Last Date</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                      <div class="row">
        <div class="offset-1 col-sm-8 cl-md-8 col-lg-8">
            <form>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Job Title <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name/Title For Personal Use">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Designation <sub class="text-danger">*</sub> </label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                      <select name="client_id" class="form-control" id="customer_group">
                          <option value=""></option>
                      </select>
                </div>
              </div>
              
            </div>
          </div>
           <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Job Nature <sub class="text-danger">*</sub> </label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                      <select name="client_id" class="form-control" id="job_nature">
                          <option value=""></option>
                      </select>
                </div>
              </div>
            </div>
          </div>
            <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Experience   <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
           <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Age <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
           <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Salary Range  <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Vacancy <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Posted Date <sub class="text-danger">*</sub> </label>
              </div>
              <div class="col-sm-8">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                    <span ><i class="fa fa-calendar"></i></span>
                    </span>
                </div>
              </div>
            </div>
          </div>
            <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Last Date to Apply <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-8">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                    <span ><i class="fa fa-calendar"></i></span>
                    </span>
                </div>
              </div>
            </div>
          </div>
           
          <div class="form-group">
            <div class="row">
              <div class=" col-sm-3">
                <label for="exampleInputEmail1">Description <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-9">
             <textarea class="ckeditor" id="myEditor" name="myEditor" cols="35" rows="20"></textarea>
              </div>
            </div>
          </div>
  
          <div class="form-group">
              <div class="row">
                <div class="col-sm-3">
                  <label for='uploaded_file'>Status</label>
                            </div>
              <div class="col-sm-4">
                  <div class="form-group d-flex">
                    <!--<label>Upload Your File </label>--->
                    <input type="checkbox" class="form-control" checked style="height: 20px;width: 20px"><span class="ml-2"> Published</span>
                  </div>
              </div>
               <div class="col-sm-4">
                  <div class="form-group d-flex">
                    <!--<label>Upload Your File </label>--->
                    <input type="checkbox" class="form-control" style="height: 20px;width: 20px"><span class="ml-2"> Unpublished</span>
                  </div>
              </div>
              </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Permission<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
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
              <div class="col-sm-3">
                <label for="exampleInputEmail1">select Users<span class="text-danger">*</span></label>
              </div>
              <!--<div class="col-sm-9">
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
              </div>--->
            </div>
          </div>
          </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="offset-11 col-md-1">
         <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<script type="text/javascript"> 

  CKEDITOR.replace( 'myEditor',
    {
      fullPage : true,
      uiColor : '#efe8ce'
    });

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#job_post').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
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
    $( function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 37,
      min: 1,
      max: 700,
      slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
    } );
  </script>
  
  <script>
    $( function() {
    $( "#datepicker" ).datepicker();
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
    $('.file-upload').file_upload();
</script>

<script>
  $( document ).ready(function() 
  {
    $('#general').css('display','block');
  })
</script>

<script>
$(document).ready(function(){
 
  $("#acount").click(function(){
   $("#payment").hide();
   $("#paidby").hide();
   $("#account").show();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
</script>

<script>
$(document).ready(function(){
 
  $("#catgry").click(function(){
   $("#payment").hide();
   $("#paidby").hide();
   $("#account").hide();
   $("#category").show();
   $('#exampleModal').modal('show');
  });
});
</script>

<script>
$(document).ready(function(){
 
  $("#paid").click(function(){
     $("#payment").hide();
   $("#paidby").show();
   $("#account").hide();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
</script>
 <script>
        $(document).ready(function() {
      
        $("#cust_grp").select2(); 
        $("#accounts").select2();
        $(".language").select2();
        $(".currency").select2(); 
        $("#country").select2();
      
       });
    </script>
<script>
$(document).ready(function(){
 
  $("#paymnt").click(function(){
     $("#payment").show();
   $("#paidby").hide();
   $("#account").hide();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>