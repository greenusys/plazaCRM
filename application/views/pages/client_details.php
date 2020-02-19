<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


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
    /*line-height: 1.42857143;*/
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
.upper_col i{
font-size: 35px;
}
.rigt_col span{
 /* font-size: 12px;*/
  color: gray;
}
</style>
 <div class="row mt-4 m-0">   
          <div class="col-md-3 ">
            <div class="card">
              <div class="row">
                <div class="col-md-5 p-0 upper_col">
                  <div class="bg-primary text-white text-center p-4">
                    <span><i class="far fa-money-bill-alt"></i></span>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="text-center p-2 rigt_col">
                          <h6 class="m-0">00.00</h6>
                          <span>Paid Amount</span><br>  
                          <a href="" >More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="card">
              <div class="row">
                <div class="col-md-5 p-0 upper_col">
                  <div class="bg-dark text-white text-center p-4">
                    <span><i class="fas fa-dollar-sign"></i></span>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="text-center p-2 rigt_col">
                          <h6 class="m-0">00.00</h6>
                          <span>Due Amount</span><br>  
                          <a href="" >More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="card">
              <div class="row">
                <div class="col-md-5 p-0 upper_col">
                  <div class="bg-success text-white text-center p-4">
                    <span><i class="fas fa-dollar-sign"></i></span>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="text-center p-2 rigt_col">
                          <h6 class="m-0">00.00</h6>
                          <span>Invoice Amount</span><br>  
                          <a href="" >More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="card">
              <div class="row">
                <div class="col-md-5 p-0 upper_col">
                  <div class="bg-danger text-white text-center p-4">
                    <span><i class="fas fa-dollar-sign"></i></span>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="text-center p-2 rigt_col">
                          <h6 class="m-0">00%</h6>
                          <span>Paid Percentage</span><br>  
                          <a href="" >More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
       </div>
    <div class="mb-5">
    <div class="row mt-4">
        <div class="col-sm-3">
           <div class="card shadow"  id="myDIV">
              <ul style="list-style:none" class="nav nav-tabs tabs-left sideways bg-white">
                <li class="w-100 side_br active">
                    <a href="#details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#contacts" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Contacts</a>
                </li>
           
                <li class="w-100 side_br">
                    <a href="#notes" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Notes</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#invoices" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Invoices</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#payments" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Payments</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#estimates" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Estimates</a>
                </li>

                <li class="w-100 side_br">
                    <a href="#proposals" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Proposals</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#transaction" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Transactions</a>
                </li>
                 <li class="w-100 side_br">
                    <a href="#projects" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Projects</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#tickets" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Tickets</a>
                </li>
                 <li class="w-100 side_br">
                    <a href="#bugs" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Bugs</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#reminder" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Reminder</a>
                </li>
                 <li class="w-100 side_br">
                    <a href="#file_manager" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> File Manager</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#maps" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Map</a>
                </li>
              </ul>
           </div>
        </div>

        <div class="col-md-9">
            <div class="tab-content">
                <!----------basic Details------->
                <div class="tab-pane active" id="details">
                    <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">User Name</h6></div>
                            <div class="col-md-2 text-right"> 
                                <a href="" class="text-primary font-weight-bold " id="update"><i class="far fa-edit"></i> Edit</a>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="row">
                          <div class="col-sm-6">
                             <div class="">
                                 <h4 class="text-gray ml-3">Contact Details</h4>
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">Name</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span>dsf;dfslf;sdf;</span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">Contact Person</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span>dsf;dfslf;sdf;</span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">Email</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span>dsf;dfslf;sdf;</span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">City</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span>dsf;dfslf;sdf;</span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">Zip code</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span>dsf;dfslf;sdf;</span>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-4 text-right">
                                  <label class="">Address</label>
                                </div>
                                <div class="col-md-8 ">
                                  <span>dsf;dfslf;sdf;</span>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 text-right">
                                <label class="">Phone</label>
                              </div>
                              <div class="col-md-8 ">
                                <span>dsf;dfslf;sdf;</span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 text-right">
                                <label class="">Fax</label>
                              </div>
                              <div class="col-md-8 ">
                                <span>dsf;dfslf;sdf;</span>
                              </div>
                            </div>
                            <div class="text-center">
                                <h4 class="text-gray">Received Amount</h4>
                                <h3 class="text-danger ">$00</h3> 
                            </div> 
                          </div>
                      </div>
                      <div class="text-center">
                         <div class="circular mx-auto" data-value='50'>
                              <span class="circular-left">
                                  <span class="circular-bar border-primary"></span>
                              </span>
                              <span class="circular-right">
                                   <span class="circular-bar border-primary"></span>
                              </span>
                              <div class="circular-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">50<span class="small">%</span></div>
                              </div>
                            </div>
                      </div>

                      <div class="row m-0 mt-4 bg-gray p-2 ">
                        <div class="col-md-4">Invoice Amount : <span class="bg-primary text-white rounded p-1">$ 00.00</span></div>
                        <div class="col-md-8 text-right text-danger">Invoice Amount : <span class="bg-danger text-white rounded p-1">$ 00.00</span></div>
                      </div>
                    </div>
                </div>

<script type="text/javascript">
  $(function() {
   $(".circular").each(function() {
    var value = $(this).attr('data-value');
    var left = $(this).find('.circular-left .circular-bar');
    var right = $(this).find('.circular-right .circular-bar');

    if (value > 0) {
      if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
      } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
      }
    }
  })      

  function percentageToDegrees(percentage) {
    return percentage / 100 * 360
  }

});
</script>
                <!----------basic Details End------->

                <!----------Bank Details------->
                <div class="tab-pane " id="contacts">
                  <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Contacts</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold new_contact" id="update"><i class="far fa-edit"></i> New Contact</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="">
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Full Name</th>
                                       <th scope="col" class="fs1">Email</th>
                                       <th scope="col" class="fs1">Phone</th>
                                       <th scope="col" class="fs1">Mobile</th>
                                       <th scope="col" class="fs1">Skype ID</th>
                                       <th scope="col" class="fs1">Last login</th>
                                       <th scope="col" class="fs1">Action</th>
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
                <div class="tab-pane " id="notes">
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
                <div class="tab-pane " id="invoices">
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
                <div class="tab-pane " id="payments">
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

                 <!----------Leave Details ------>
                    <div class="tab-pane " id="estimates">
                        <div class="card shadow p-3">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold">Leave Details Of Adminko</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                        <div class="row p-2">
                            <table class="table table-striped  ">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <h6 class="label-style">Sick</h6>
                                        </th>
                                        <td scope="row">
                                            0/2 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <h6 class="label-style">Marriage</h6>
                                        </th>
                                        <td scope="row">
                                            0/3
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <h6 class="label-style">:</h6>
                                        </th>
                                        <td scope="row">
                                            0/0
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <h6 class="label-style">emergency</h6>
                                        </th>
                                        <td scope="row">
                                            0/0
                                        </td>
                                    </tr>
                                    <tr class="bg-dark text-white">
                                        <th scope="row">
                                            <h6 class=" text-white">Total</h6>
                                        </th>
                                        <td scope="row">
                                            0/5
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div> 
                         <div class="card shadow p-3 mt-4 h-50">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold">Leave Report</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                        </div> 
                    </div>
                  <!----------Leave Details End ------>

                  <!----------Provident fund ------>
                    <div class="tab-pane  " id="proposals">
                        <div class="card shadow mb-4">
                            <div class="row p-2">
                                <div class="col-sm-10">
                                   <h6 class="font-weight-bold mt-2"><i class="fa fa-calendar"></i> Provident Fund 2020</h6>
                                </div>
                                <div class="col-sm-2">
                                    <div class="bg-primary w-50 p-2 m-auto text-center"data-toggle="tooltip" data-placement="top" title="Download PDF">
                                        <i class="fa fa-file-pdf-o" style="color:white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="offset-2 col-sm-1">
                                                <label for="exampleInputEmail1" class="label-style">Year  <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" id="datepicker" placeholder="2020" class="form-control">
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
                                            </div>
                                            <div class=" col-sm-1">
                                                <a href="provident.php"><button type="button" class="btn btn-primary butn text-white font-weight-bold">Go</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fs1">Overtime Date</th>
                                                <th scope="col" class="fs1">Overtime Hour</th>
                                                <th scope="col" class="fs1">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"></td>
                                                <td scope="row">Total Overtime Hour :   0 : 0 m</td>
                                                <td scope="row"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div>
                  <!----------Provident fund End ------>

                  <!----------overtime Details ------>
                    <div class="tab-pane " id="transaction">
                        <div class="card shadow mb-4">
                            <div class="row p-2">
                                <div class="col-sm-10">
                                   <h6 class="font-weight-bold mt-2"><i class="fa fa-calendar"></i> Provident Fund 2020</h6>
                                </div>
                                <div class="col-sm-2">
                                    <div class="bg-primary w-50 p-2 m-auto text-center"data-toggle="tooltip" data-placement="top" title="Download PDF">
                                        <i class="fa fa-file-pdf-o" style="color:white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="offset-2 col-sm-1">
                                                <label for="exampleInputEmail1" class="label-style">Year  <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" id="datepicker" placeholder="2020" class="form-control">
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
                                            </div>
                                            <div class=" col-sm-1">
                                                <a href="provident.php"><button type="button" class="btn btn-primary butn text-white font-weight-bold">Go</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fs1">Payment Month</th>
                                                <th scope="col" class="fs1">Payment Date</th>
                                                <th scope="col" class="fs1">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"></td>
                                                <td scope="row"></td>
                                                <td scope="row">
                                                    Total Provident Fund :  â‚¬ 0,00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!----------overtime Details End ------>

                  <!----------tasks ------>
                    <div class="tab-pane " id="projects">
                        <div class="card shadow p-3">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold">Total Task Time Spent</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-5 m-auto">
                                <div class="col-md-12  text-center">
                                    <h1 class="timer">0:0:9</h1>
                                </div>
                                <div class="col-md-12  text-center">
                                   <h6 class="label-style">Hours &nbsp; Minutes &nbsp; Seconds</h6> 
                                </div>                     
                            </div>
                        </div> 
                    
                        <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Task Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>      
                    </div>
                  <!----------tasks End ------>

                  <!----------Projects ------>
                    <div class="tab-pane " id="tickets">
                        <div class="card shadow p-3">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold">Total Projects Time Spent</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-5 m-auto">
                                <div class="col-md-12  text-center">
                                    <h1 class="timer">0:0:9</h1>
                                </div>
                                <div class="col-md-12  text-center">
                                   <h6 class="label-style">Hours &nbsp; Minutes &nbsp; Seconds</h6> 
                                </div>                     
                            </div>
                        </div> 
                
                        <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Projects Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                                <div id="projectchartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                  <!----------Projects End ------>

                  <!----------Bugs ------>
                    <div class="tab-pane " id="bugs">
                         <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Bugs Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                                <div id="bugschartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                  <!----------Bugs End ------>

                  <!----------Reminder ------>
                    <div class="tab-pane " id="reminder">
                         <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Bugs Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                                <div id="bugschartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                  <!----------Reminder End ------>

                   <!----------File Manager ------>
                    <div class="tab-pane " id="file_manager">
                         <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Bugs Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                                <div id="bugschartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                  <!----------File Manager End ------>

                  <!----------Maps ------>
                    <div class="tab-pane  " id="maps">
                        <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">All Activities</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                               <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fs1">Date</th>
                                                <th scope="col" class="fs1">Module</th>
                                                <th scope="col" class="fs1">Activity</th>
                                                <th scope="col" class="fs1"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">02.12.2020 19:26</td>
                                                <td scope="row">Adminko</td>
                                                <td scope="row">Performance</td>
                                                <td scope="row">Performance Appraisal Saved ravish beg ForMar 2020</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">02.12.2020 19:26</td>
                                                <td scope="row">Adminko</td>
                                                <td scope="row">Performance</td>
                                                <td scope="row">Performance Appraisal Saved ravish beg ForMar 2020</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">02.12.2020 19:26</td>
                                                <td scope="row">Adminko</td>
                                                <td scope="row">Performance</td>
                                                <td scope="row">Performance Appraisal Saved ravish beg ForMar 2020</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">02.12.2020 19:26</td>
                                                <td scope="row">Adminko</td>
                                                <td scope="row">Performance</td>
                                                <td scope="row">Performance Appraisal Saved ravish beg ForMar 2020</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">02.12.2020 19:26</td>
                                                <td scope="row">Adminko</td>
                                                <td scope="row">Performance</td>
                                                <td scope="row">Performance Appraisal Saved ravish beg ForMar 2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>      
                    </div>
                  <!----------Maps End ------>
            </div>
        </div>
    </div>    
</div>    
       

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("bugschartContainer", {
    theme: "light2",
    animationEnabled: true,
    
    data: [{
        type: "pie",
        indexLabelFontSize: 18,
        radius: 80,
        indexLabel: "{label} - {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [
            { y: 54.1,  },
            { y: 21, },
            { y: 24.5,  },
            
        ]
    }]
});
chart.render();

function explodePie(e) {
    for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        if(i !== e.dataPointIndex)
            e.dataSeries.dataPoints[i].exploded = false;
    }
}
 
}
</script>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("projectchartContainer", {
    animationEnabled: true,
    
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "##0.00\"%\"",
        indexLabel: "{label} {y}",
        dataPoints: [
            {y: 100,},
            
        ]
    }]
});
chart.render();

}
</script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2",
    animationEnabled: true,
    
    data: [{
        type: "pie",
        indexLabelFontSize: 18,
        radius: 80,
        indexLabel: "{label} - {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [
            { y: 42,  },
            { y: 21, },
            { y: 24.5,  },
            { y: 9, },
            { y: 3.1,  }
        ]
    }]
});
chart.render();

function explodePie(e) {
    for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        if(i !== e.dataPointIndex)
            e.dataSeries.dataPoints[i].exploded = false;
    }
}
 
}
</script>     
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>   

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
