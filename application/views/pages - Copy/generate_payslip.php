 
      <!-- Main Content -->
<!--       <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Make Payment</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="p-2">date
                <button class="btn btn-danger d-none check_btn"><i class="fas fa-sign-out-alt"></i> Checkout</button>
                     <button class="btn btn-success check_btn "><i class="fas fa-sign-in-alt"></i> Checkin</button>
                   </div>
                  </div>
              </div> -->
             
        
          <div class="row mt-4">
           <div class="col-lg-12">
              <div class="card">
          
     <!--            <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">Manage Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Account</a>
                  </li>
                  
  
                </ul> -->
             <!--    <div class="tab-content card pt-5" id="myTabContentJust"> -->

              <style type="text/css">
                .chkbox_ht{
                  height: 23px;
                  width: 23px;
                }
                .select2-container .select2-selection--multiple, .select2-container .select2-selection--single{
                      min-height: 35px;
                }
                .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    min-height: 35px;
    line-height: 35px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
  min-height: 35px
}
              </style>
                  <div class=" p-4" >
                    <form method="">
                      <div class="row">
                        <div class="col-md-4 text-right pt-1">
                          <label class="form-group">Generate Payslip<sup class="text-danger">*</sup></label>
                          <br>
                          <br>
                          <label>Select Month<sup class="text-danger">*</sup></label>

                        </div>
                        <div class="col-md-4">
                          <div class="form-group"> 
                            <select  name="imptask_status" class="form-control " id="imptask_status" style="width: 100%" required="">
                              <option value="" selected="">Select Department</option>
                              <option value="">IT / Collaborative</option>
                              <option value="">HR</option>
                              <option value="">IT</option>
                            </select> 
                          </div>
                          <div class='input-group date form-group' id='datetimepicker10'>
                              <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                           </div>
                           <div class=""><button class="btn btn-info w-100 ">Go</button></div>
                        </div>
                       
                      </div>
                  
                    </form>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker10').datetimepicker({
                                  viewMode: 'years',
                                  format: 'MM/YYYY'
                              });
                          });
                      </script>
                    <div class="mt-5">
                        <div class="card-header row border-bottom py-1">
                          <div class="col-md-6">
                            <span><strong>Generate Payslip for month year</strong></span> 
                           </div>
                            <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                        </div>
                      <div class="pt-3">
                         <table id="example" class="display nowrap " style="width:100%">
                              <thead>
                                  <tr>
                                      <th>EMP ID</th>
                                      <th>Name</th>
                                      <th>Salary Type </th>
                                      <th>Basic Salary</th>
                                      <th>Net Salary</th>
                                      <th>Details</th>
                                      <th>  Status </th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                            
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>2011/04/25</td>
                                      <td>Edinburgh</td>
                                      <td>Edinburgh</td>
                                      <td>Tiger Nixon</td>
                                      <td>2011/04/25</td>
                                      <td>Edinburgh</td>
                                      <td>Edinburgh</td>
                                  </tr>
                                     <tr>
                                      <td>Tiger Nixon</td>
                                      <td>2011/04/25</td>
                                      <td>Edinburgh</td>
                                      <td>Edinburgh</td>
                                      <td>Tiger Nixon</td>
                                      <td>2011/04/25</td>
                                      <td>Edinburgh</td>
                                      <td>Edinburgh</td>
                                  </tr>
                                     <tr>
                                      <td>Tiger Nixon</td>
                                      <td>2011/04/25</td>
                                      <td>Edinburgh</td>
                                      <td>Edinburgh</td>
                                      <td>Tiger Nixon</td>
                                      <td>2011/04/25</td>
                                      <td>Edinburgh</td>
                                      <td>Edinburgh</td>
                                  </tr>
                              </tbody>
                              <tfoot>
                                  <tr>
                                      <th>EMP ID</th>
                                      <th>Name</th>
                                      <th>Salary Type </th>
                                      <th>Basic Salary</th>
                                      <th>Net Salary</th>
                                      <th>Details</th>
                                      <th>  Status </th>
                                      <th>Action</th>

                                  </tr>
                              </tfoot>
                          </table>
                        </div>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
    
        </section>
      </div>
<script>
     $(document).ready(function() {
          $(".hourly_status").select2();
          $("#imptask_status").select2();
          $(".monthly_status").select2();
      });
  </script>