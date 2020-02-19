
          <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
                <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                   <i class="fas fa-tasks"></i>
                  </div>
                </div>
                <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4><?=count($in_progress_project)?></h4>
                      </div>
                      <div class="card-body">
                       In Progress Projects<br>
                    <span><a href="">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
               
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
               <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                     <i class="far fa-folder-open"></i>
                  </div>
                 </div>
                 <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4><?=count($in_progress_task)?></h4>
                      </div>
                      <div class="card-body">
                       In Progress Task<br>
                    <span><a href="">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
                
             
              </div>
            </div>
          </div>
          <div class="row ">
           
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
                <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                      <i class="fas fa-bug"></i>
                  </div>
                 </div>
                 <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4>0</h4>
                      </div>
                      <div class="card-body">
                       Open Tickets<br>
                    <span><a href="">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
              
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
               <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-ticket-alt"></i>
                  </div>
                 </div>
                 <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4>0</h4>
                      </div>
                      <div class="card-body">
                       Open Tickets<br>
                    <span><a href="">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
                
             
              </div>
            </div>
          </div>
          
          <div class="row mt-4">
            <div class="col-lg-12">
              <div class="card">
               <!--  <div class="card-header">
                  <h4>Budget vs Sales</h4>
                </div> -->
             <!--    <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div> -->
                <ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">Overdue Projects(<?=count($over_due_project)?>)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">Overdue Tasks(<?=count($over_due_task)?>)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just" role="tab" aria-controls="contact-just"
                      aria-selected="false">Overdue Invoice</a>
                  </li>
                </ul>
                <div class="tab-content card pt-5" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Client</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Assigned To</th>
                                <th>Downloads</th>
                                <th>Action</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                   <table id="example12" class="table table-striped display nowrap" style="width:100%">
                        <thead class="border">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot class="border">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="contact-just" role="tabpanel" aria-labelledby="contact-tab-just">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro
                      fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                      skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings
                      gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork
                      biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl
                      craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-6">
              <div class="card card-height">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>TO DO List</strong></span> | <a href="<?=base_url('User/addTodoList')?>" >View All</a>
                   </div>
                    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0" data-toggle="modal" data-target="#addTodoModal" > Add New</button></div>
                </div>
                <div class="">
                  <table class="table table-striped display nowrap" id="table2">
                 
                      <thead class="">
                       <tr>
                          <th></th>
                         <th>What To Do</th>
                         <th>Status</th>
                         <th>End Date</th>
                       </tr>
                      </thead>
            
                    <tbody>
                      <?php
                      foreach ($to_do as $todo) {
                      ?>
                        <tr>
                            <td class="sorter"></td>
                            <td><?=$todo->title?></td>
                            <td><?php
                            if ($todo->status==1) {
                             echo "In Progress";
                            }
                            elseif ($todo->status==2) {
                              echo "On Hold";
                            }
                            else{
                              echo "Done";
                            }
                            ?></td>
                            <td><?=$todo->due_date?></td>
                        </tr>
                      <?php } ?>
<!--                         <tr>
                            <td class="sorter"></td>
                            <td>Row 2</td>
                            <td>Record 2</td>
                            <td>Record 2</td>
                        </tr>
                        <tr>
                            <td class="sorter"></td>
                            <td>Row 3</td>
                            <td>Record 3</td>
                            <td>Recrod 3</td>
                        </tr>
                        <tr>
                            <td class="sorter"></td>
                            <td>Row 4</td>
                            <td>Record 4</td>
                            <td>Record 4</td>
                        </tr>
                        <tr>
                            <td class="sorter"></td>
                            <td>Row 5</td>
                            <td>Record 5</td>
                            <td>Record 5</td>
                        </tr> -->
                    </tbody>
              <!--       <tfoot>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                    </tfoot> -->

                  </table>
                </div>
              </div>
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
          
              <form method="POST" action="<?=base_url()?>Test/add_todo">
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Users <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <select class="form-control" name="user_id" placeholder="">
                      <option selected="" disabled="">Select User</option>
                      <?php
                      foreach ($admin_employee as $emp) {
                      ?>
                      <option value="<?=$emp->user_id?>"><?=$emp->fullname?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>What To DO <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <textarea class="form-control" name="title" row="4"></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Status <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <select class="form-control" name="status" placeholder="">
                      <option selected="" value="1">In Process</option>
                      <option value="2">On Hold</option>
                      <option value="3">Done</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Due Date <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <div class='input-group date datetimepicker1' id='datetimepicker1'>
                        <input type='text' name="due_date" class="form-control" />
                        <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                    </div>
                  </div>
                </div>
                <button  type="submit" class="btn btn-primary">Submit</button>
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
            </div>
            <div class="col-lg-6">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>My Calender</strong></span> 
                   </div>
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0">Add New</button></div> -->
                </div>
              
                <div class="p-2">
                   <div id='calendar'></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-6">
              <div class="card card-height">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Announcements</strong></span> 
                   </div>
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0">Add New</button></div> -->
                </div>
              
                <div class="">
                  <ul class="list-unstyled p-4">
                    <li class="row">
                      <div class="col-md-2">
                        <div class="annouce_date_col">
                          <div class="month">June</div>
                          <div class="date">13</div>
                        </div>
                      </div>
                      <div class="col-md-10">
                         <a href=""><h6>Create an external account</h6></a>
                         <span>https://web-nostromo.com/</span>
                         <div class="text-right"><a href="">View Details</a></div>
                      </div>
                    </li>
                  </ul>  
             
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-height">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Recent Activities</strong></span> 
                   </div>
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0">Add New</button></div> -->
                </div>
              
                <div class="">
                  <ul class="list-unstyled p-4">
                    <li class="row">
                      <div class="rec_act">
                         <img src="../assets/img/avatar/avatar-1.png" alt="" class="rounded-circle img-fluid">
                      </div>
                      <div>
                          <span><strong>Create an external account</strong>&nbsp; Time</span><br>
                          <div>Updated Profile</div>
                      </div> 
                    
                    </li>
                  </ul>  
             
                </div>
              </div>
            </div>
          </div>
        
          
        </section>
      </div>
   
<script type="text/javascript">
     $(function () {
          $('.datetimepicker1').datetimepicker();
      });
  
</script>