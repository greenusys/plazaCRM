<!-- <style>
.round{
    
    width: 128px;
    height: 128px;
    border: 2px solid white;
}
.bg-dark-too{
    font-size: 18px;
    color:white;
    text-align:center;
    background:#3a3f51;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="card">
          
          <div class="row p-2" style="background:#013356">
            <div class="col-md-2">
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">1</p>
                        <span class="text-white">Open Projects</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">0</p>
                        <span class="text-white">Completed Projects</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">1</p>
                        <span class="text-white">Open Task</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">0</p>
                        <span class="text-white">Completed Tasks</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div></div>
            <div class="col-md-4 p-2 text-white" align="center">
                <img src="http://plazacrm.com/uploads/file2019-11-07-00-59-36.jpg" class="round rounded-circle">
                <p><h4><strong>Rahul Kumar</strong></h4></p>
                <p>EMP ID:123456</p>
                <p>IT/Collaborative <i class="fal fa-long-arrow-alt-right"></i> Cordinator</p>
            </div>
            <div class="col-md-2">
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">1</p>
                        <span class="text-white">Monthly Attendance</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">0</p>
                        <span class="text-white">Monthly Leave</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">1</p>
                        <span class="text-white">Monthly Absent</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">0</p>
                        <span class="text-white">Total Award</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
          </div>
          <div class="row bg-dark-too py-2">
            <div class="col">
                <p>0:0:0</p>
                <p>Projects Hours</p>
               
            </div>
            <div class="col">
                <p>0:0:0</p>
                <p>Tasks Hours</p>
        
            </div>
            <div class="col">
                <p>0:0:0</p>
                <p>This month Working Hours</p>
                
            </div>
            <div class="col">
                <p>0:0:0</p>
                <p>Working Hours</p>
           
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3 p-1">
        <div class="card">
            <ul>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
            </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
            <ul>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
            </ul>
        </div>
      </div>
    </div>
</div>


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
    $('.file-upload').file_upload();
</script> -->

<style type="text/css">

.tab 
{
   overflow: hidden;
    background-color:white;
}

.tab button 
{
    background-color: #f5f3f3;
    float: left;
    border: 1px solid;
    outline: none;
    cursor: pointer;
    padding: 7px 20px;
    transition: 0.3s;
    font-size:12px;
}

.tab button:hover 
{
   background-color: #ddd;
}

.tab button.active 
{
   background-color: #ccc;
}

.tabcontent 
{
   width:100%;
   display: none;
   padding: 6px 12px;
   border:0px solid;
}
.inputDnD .form-control-file {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 6em;
  outline: none;
  visibility: hidden;
  cursor: pointer;
  background-color: gray;
  /*box-shadow: 0 0 5px solid gray;*/
}
.inputDnD .form-control-file:before {
  content: attr(data-title);
  position: absolute;
  top: 0.5em;
  left: 0;
  width: 100%;
  min-height: 5em;
  line-height: 2em;
  padding-top: 1.5em;
  opacity: 1;
  visibility: visible;
  text-align: center;
  border: 1px dashed  gray;
  padding: 35px;
  /*transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);*/
  overflow: hidden;
}
.inputDnD .form-control-file:hover:before {
  border-style: dashed;
 /* box-shadow: inset 0px 0px 0px 0.25em  gray;*/
}
@media only screen and (min-width: 576px){
  .modal-dialog {
      max-width: 623px;
      margin: 1.75rem auto;
  }
}
.tabs-left {
  border-bottom: none;
  border-right: 1px solid #ddd;
}

.tabs-left>li {
  float: none;
 margin:0px;
 border-bottom:1px solid gray;

  
}
.tabs-left li a{
/*line-height: 1.42857143;*/
    border-bottom-color: #ddd;
    border-right-color: transparent;
   font-weight: 600;
    border: none;
    color: #000000db;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left li a:hover{
    border-bottom-color: #ddd;
    border-right-color: transparent;
    /*line-height: 1.42857143;*/
    color: white;
    background: #f90;
    border: none;
    text-decoration: none;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left>li.active>a,
.tabs-left>li.active>a:focus {
    border-bottom-color: #ddd;
    border-right-color: transparent;
   line-height: 1.42857143;
 color: white;
    background: #f90;
    border: none;
    border-radius: 0px;
    text-decoration: none;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav-tabs>li>a:hover {
    /* margin-right: 2px; */
    line-height: 1.42857143;
    border: 1px solid transparent;
    /* border-radius: 4px 4px 0 0; */
}
.tabs-left>li.active>a::after{content: "";
    position: absolute;
    top: 10px;
    right: -10px;
    border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  
  border-left: 10px solid #f90;
    display: block;
    width: 0;}
</style>

<style type="text/css">
.bg-gray-dark 
{
    background-color: #3a3f51;
    color: #ffffff !important;
}
.img-style
{
    height: 126px;
    border: 4px solid white;
}
.back
{
    background-color:white;
}
/*.active, .back:hover
{
    background-color: #23b7e5 !important;
    color:white;
}*/
</style>
<body class="bg-light">
    <div class="  mb-5">
        <div>
            <div class="row p-3 mt-5 " style="background-color:#1B344E">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-6">
                           <h6 class="text-white">1</h6>
                           <ul class="text-white p-0" style="list-style:none;font-size:13px">
                              <li class="text-light">Open Projects</li>
                              <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                           </ul>
                        </div>
                        <div class="col-sm-6">
                           <h6 class="text-white">2</h6>
                           <ul class="text-white p-0" style="list-style:none;font-size:13px">
                              <li class="text-light">Open Tasks</li>
                              <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                           </ul>
                        </div>
                        <div class="col-sm-6">
                           <h6 class="text-white">0</h6>
                           <ul class="text-white p-0" style="list-style:none;font-size:13px">
                              <li class="text-light">Complete Projects</li>
                              <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                           </ul>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-white">1</h6>
                            <ul class="text-white p-0" style="list-style:none;font-size:13px">
                              <li class="text-light">Complete Tasks</li>
                              <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                           </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 m-auto text-center">
                    <img src="image/img2.jpg" alt="..." class="rounded-circle img-fluid w-50 img-style">
                    <h4 class="text-white">Adminko</h4>
                    <h6 class="text-white">EMP ID:</h6>
                </div>
                <div class="offset-1 col-sm-4">
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-6">
                               <h6 class="text-white">1</h6>
                               <ul class="text-white p-0" style="list-style:none;font-size:13px">
                                  <li class="text-light">Open Projects</li>
                                  <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                               </ul>
                            </div>
                            <div class="col-sm-6">
                               <h6 class="text-white">2</h6>
                               <ul class="text-white p-0" style="list-style:none;font-size:13px">
                                  <li class="text-light">Open Tasks</li>
                                  <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                               </ul>
                            </div>
                            <div class="col-sm-6">
                               <h6 class="text-white">0</h6>
                               <ul class="text-white p-0" style="list-style:none;font-size:13px">
                                  <li class="text-light">Complete Projects</li>
                                  <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                               </ul>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-white">1</h6>
                                <ul class="text-white p-0" style="list-style:none;font-size:13px">
                                  <li class="text-light">Complete Tasks</li>
                                  <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center m-auto">
                    <p class="text-white m-auto text-center">Undefined Department & Designation</p>
                </div>
            </div>
            <div class="row text-center bg-gray-dark p-3">
                <div class="col-md-3">
                    <h4 class="text-white">0:0:9</h4>
                    <h6 class="text-white">Projects Hours</h6>
                </div>      
                <div class="col-md-3">
                    <h4 class="text-white">0:0:9</h4>
                    <h6 class="text-white">Tasks Hours</h6>
                </div>  
                <div class="col-md-3">
                    <h4 class="text-white">0 : 42 m</h4>
                    <h6 class="text-white">This month Working Hours</h6>
                </div>  
                <div class="col-md-3">
                    <h4 class="text-white">21 : 54 m</h4>
                    <h6 class="text-white">Working Hours</h6>
                </div>                  
            </div>
        </div>
        
    <div class="row mt-4">
        <div class="col-sm-3">
           <div class="card shadow"  id="myDIV">
              <ul style="list-style:none" class="nav nav-tabs tabs-left sideways bg-white">
                <li class="w-100 side_br active">
                    <a href="#base_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Basic Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#bank_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Bank Details</a>
                </li>
           
                <li class="w-100 side_br">
                    <a href="#docu_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Document Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#salary_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Salary Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#timecard_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Timecard Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#leave_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Leave Details</a>
                </li>

                <li class="w-100 side_br">
                    <a href="#prov_fund" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Provident Fund</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#overtime_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Overtime Details</a>
                </li>
                 <li class="w-100 side_br">
                    <a href="#tasks" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Tasks</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#projects" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Projects</a>
                </li>
                 <li class="w-100 side_br">
                    <a href="#bugs" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Bugs</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#activites" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Activities</a>
                </li>

              </ul>
           </div>
        </div>

        <div class="col-md-9">
            <div class="tab-content">
                <!----------basic Details------->
                <div class="tab-pane bg-white active" id="base_details">
                    <div class="container bg-white card ">
                        <div class="row">
                            <div class="col-md-10"><h6 class="mt">User Name</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#updateUser" id="update">Update</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class=" offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold  label-style">EMP ID :</label>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class=" offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold  label-style">Username :</label>
                                </div>
                                <div class="col-sm-6">
                                   <label for="exampleInputEmail1">adminko</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Joining Date:</label>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Date Of Birth:</label>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Fathers Name:</label>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class=" offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Email :</label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">admin@admin.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class=" offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Mobile :</label>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Present Address :</label>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Full Name :</label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">adminko</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Password :</label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1" class="text-primary" data-toggle="modal" data-target="#exampleModal" id="reset">Reset Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Gender:</label>
                                </div>
                                <div class="col-sm-6">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-1 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Maratial Status:</label>
                                </div>
                                <div class="col-sm-6">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-1 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Mothers Name:</label>
                                </div>
                                <div class="col-sm-6">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Phone :</label>
                                </div>
                                <div class="col-sm-6">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Skype id :</label>
                                </div>
                                <div class="col-sm-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>

                <!----------basic Details End------->

                <!----------Bank Details------->
                <div class="tab-pane bg-white " id="bank_details">
                    <div class="container bg-white card ">
                        <div class="row">
                            <div class="col-md-10"><h6 class="mt">Bank Details</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#bankModal" id="update">Update</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="">
                            <table class="table table-striped border">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Bank</th>
                                       <th scope="col" class="fs1">Name of Account</th>
                                       <th scope="col" class="fs1">Routing Number</th>
                                       <th scope="col" class="fs1"> Account Number</th>
                                       <th scope="col" class="fs1"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                      </div>
                    </div>
                </div>
                <!----------Bank Details-End ------>

                <!----------Document Details------->
                <div class="tab-pane bg-white " id="docu_details">
                    <div class="container bg-white card ">
                        <div class="row">
                            <div class="col-md-10"><h6 class="mt">User Document</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#documentModal" id="update">Update</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="">
                           <!--  <table class="table table-striped border">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Bank</th>
                                       <th scope="col" class="fs1">Name of Account</th>
                                       <th scope="col" class="fs1">Routing Number</th>
                                       <th scope="col" class="fs1"> Account Number</th>
                                       <th scope="col" class="fs1"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table> -->
                      </div>
                    </div>
                </div>
                <!----------Document Details-End ------>

               <!----------Salary Details------->
                <div class="tab-pane bg-white " id="salary_details">
                    <div class="container bg-white card ">
                        <div class="row">
                            <div class="col-md-10"><h6 class="mt">Bank Details</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#bankModal" id="update">Update</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="">
                       <!--      <table class="table table-striped border">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Bank</th>
                                       <th scope="col" class="fs1">Name of Account</th>
                                       <th scope="col" class="fs1">Routing Number</th>
                                       <th scope="col" class="fs1"> Account Number</th>
                                       <th scope="col" class="fs1"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table> -->
                            <p>There is no data to display!</p>
                      </div>
                    </div>
                </div>
                <!----------Salary Details-End ------>

                <!----------Timecard Details------->
                <div class="tab-pane bg-white " id="timecard_details">
                    <div class="container bg-white card ">
                        <div class="row">
                            <div class="col-md-10"><h6 class="mt">Bank Details</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#bankModal" id="update">Update</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Month <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" id="datepicker" placeholder="2020-2" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
                                </div>
                                <div class="offset-1 col-sm-1">
                                    <a href="timedetails.php"><button type="button" class="btn btn-primary butn  font-weight-bold">Go</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-3 mt-4">
                    <div class="row">
                        <div class="col-sm-12">
                           <h6 class="font-weight-bold">Works Hours Details of February-2020</h6>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="">
                        <div class="row mt-2">
                           <div class="col-md-12">
                              <h6 class="font-weight-bold text-color">Week : 05</h6>
                           </div>
                           <div class="col-md-12 line1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fs1">02.01.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                0 : 0 m
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row p-2">
                            <h6><strong>Total Working Hour :</strong> 0 : 40 m</h6>
                        </div>
                    </div>
                    
                    <div class="">
                        <div class="row mt-2">
                           <div class="col-md-12">
                              <h6 class="font-weight-bold text-color">Week : 06</h6>
                           </div>
                           <div class="col-md-12 line1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fs1">02.01.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                            <th scope="col" class="fs1">02.01.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                            <th scope="col" class="fs1">02.01.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                0 : 0 m
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                            <td scope="row">
                                                0 : 0 m
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                            <td scope="row">
                                                0 : 0 m
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row p-2">
                            <h6><strong>Total Working Hour :</strong> 0 : 2 m</h6>
                        </div>
                    </div>
                    
                    <div class="">
                        <div class="row mt-2">
                           <div class="col-md-12">
                              <h6 class="font-weight-bold text-color">Week : 07</h6>
                           </div>
                           <div class="col-md-12 line1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fs1">02.01.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                            <th scope="col" class="fs1">02.01.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                            <th scope="col" class="fs1">02.01.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                            <th scope="col" class="fs1">02.02.2020</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                <h6  class="bg-danger text-white text-center p-1">Active</h6>
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                            <td scope="row">
                                                0 : 0 m
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                            <td scope="row">
                                                0 : 0 m
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                            <td scope="row">
                                                0 : 40 m  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row p-2">
                            <h6><strong>Total Working Hour :</strong> 0 : 0 m</h6>
                        </div>
                    </div>
                    
                </div>
                    </div>
                </div>
                <!----------Timecard Details-End ------>
            </div>
        </div>
    </div>    
</div>    


   <script type="text/javascript">
  $(document).on("click",".side_br",function(){
    $(".side_br").removeClass("active");
    $(this).addClass("active");
  })
</script> 
<script>
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("back");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
</script>

<div class="modal fade" id="updateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                            
            <div class="modal-content style" id="currency" style="display:none">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Yor Current Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Password For Adminko">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Confirm Password For Adminko">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top-0 modal-butn">
                    <button type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
            
            <div class="modal-content style" id="account" style="display: none">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">EMP ID <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Emploment ID">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Joining Date <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id="datepicker" placeholder="Enter Joining Date" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" id="acount" class="btn btn-light butn" data-toggle="tooltip" data-placement="top" title="New Account"><i class="fa fa-calendar"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Gender <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <select name="client_id" class="form-control" id="customer_group">
                                            <option lang="ar" value="arabic">Male</option>
                                            <option lang="ar" value="arabic">Female</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Date Of Birth <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id="datepicker1" placeholder="Enter Joining Date" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" id="acount" class="btn btn-light butn" data-toggle="tooltip" data-placement="top" title="New Account"><i class="fa fa-calendar"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Maratial Status<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <select name="client_id" class="form-control" id="customer_group">
                                            <option lang="ar" value="arabic">Married</option>
                                            <option lang="ar" value="arabic">Un-Married</option>
                                            <option lang="ar" value="arabic">Widowed</option>
                                            <option lang="ar" value="arabic">Divorced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Fathers Name<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fathers Name">
                                </div>
                            </div>
                        </div>                      
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Mothers Name<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mothers Name">
                                </div>
                            </div>
                        </div>      
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Phone</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Mobile</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g user_placeholder_mobile">
                                </div>
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Skype id</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g user_placeholder_skype">
                                </div>
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Passport</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>  
                        
                                                
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Present Address</label>
                                </div>
                                <div class="col-sm-5">
                                    <textarea rows="2" cols="33"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
                <div class="modal-footer border-top-0 modal-butn">
                    <button type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
                
        </div>
    </div>
    
<script>
    $(document).ready(function(){
         
          $("#reset").click(function(){
             $("#currency").show();
             $("#account").hide();
             $('#exampleModal').modal('show');
          });
        });
</script>

<script>
    $(document).ready(function(){
     
      $("#update").click(function(){
         $("#currency").hide();
         $("#account").show();
         $('#exampleModal').modal('show');
      });
    });
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

<div class="modal fade" id="bankModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                            
            <div class="modal-content style" id="currency" style="display:none">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">New Bank</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1" class="label-style">Bank Name<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1" class="label-style">Routing Number<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1" class="label-style">Name of Account<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1" class="label-style">Account Number<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class=" col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Type of Account</label>
                                </div>
                                <div class="col-sm-2">
                                    <label class="switch">
                                    <input type="checkbox"> Checking
                                    <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <label class="switch">
                                    <input type="checkbox"> Savings
                                    <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer border-top-0 modal-butn">
                    <button type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
            
                
        </div>
    </div>

<script>
    $(document).ready(function(){
      $("#update").click(function(){
         $("#currency").show();
         $('#exampleModal').modal('show');
      });
    });
</script>

<div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                            
            <div class="modal-content style" id="currency" style="display:none">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">User Documents</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Resume</label>
                                </div>
                                <div class="col-sm-5">
                                     <input type="file" id="myfile" name="myfile">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Offer Letter</label>
                                </div>
                                <div class="col-sm-5">
                                     <input type="file" id="myfile" name="myfile">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Joining Letter</label>
                                </div>
                                <div class="col-sm-5">
                                     <input type="file" id="myfile" name="myfile">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Contract Paper</label>
                                </div>
                                <div class="col-sm-5">
                                     <input type="file" id="myfile" name="myfile">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">ID Prof</label>
                                </div>
                                <div class="col-sm-5">
                                     <input type="file" id="myfile" name="myfile">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Other Document</label>
                                </div>
                                <div class="col-sm-5">
                                     <input type="file" id="myfile" name="myfile">
                                </div>
                                <div class="col-sm-3">
                                    <a href="#"><h6 class="text-primary"><i class="fa fa-plus"></i> Add More</h6></a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
                <div class="modal-footer border-top-0 modal-butn">
                    <button type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
            
                
        </div>
    </div>

<script>
    $(document).ready(function(){
      $("#update").click(function(){
         $("#currency").show();
         $('#exampleModal').modal('show');
      });
    });
</script>
