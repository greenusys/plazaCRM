
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Attendance Report</strong></span> 
                   </div>
                    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div>
<<<<<<< HEAD
                </div> -->
              <div class="p-2">
                <form  method="post ">
                  <div class="form-group pt-2">
                    <div class="row">
                      <div class="offset-1 col-sm-2 text-right">
                        <label for="exampleInputEmail1" class="pt-2">Department<sup class="text-danger">*</sup></label>
                      </div>
                      <div class="col-sm-7">
                          <div class="input-group">
                                <select name="client_id" class="form-control" id="emply">
                                    <option selected="" disabled="" value="0">Select Employee</option>
                                    <?php
                                      foreach($Employee as $e mpD){
                                        // /print_r($empD);
                                        ?>
                                           <option value="<?=$empD->user_id?>"><?=$empD->fullname?> (<?=$empD->designations ?>) </option>   
                                        <?php
                                      }
                                    ?>
                               
                                </select> 
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group pt-2">
=======
                </div>
                <div class="p-2">
                  <form  method="post " action="<?=base_url('Attendance/getattendanceReport')?>">
                    <div class="form-group pt-2">
>>>>>>> a78173a05358d22d15d2aec3a55b202fe7f45f3e
                      <div class="row">
                        <div class="offset-1 col-sm-2 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Department<sup class="text-danger">*</sup></label>
                        </div>
                        <?php
                            // print_r($all_dept_info);
                        ?>
                        <div class="col-sm-7">
                            <div class="input-group">
                                  <select name="departments_id" class="form-control" id="emply">
                                      <option selected="" disabled="" value="0">Select Department</option>
                                      <?php
                                      
                                        foreach($all_dept_info as $dept){
                                          // /print_r($dept);
                                          ?>
                                            <option value="<?=$dept->departments_id?>"><?=$dept->deptname?></option>   
                                          <?php
                                        }
                                      ?>
                                
                                  </select> 
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group pt-2">
                        <div class="row">
                          <div class="offset-1 col-sm-2 text-right">
                            <label for="exampleInputEmail1" class="pt-2">Month<sup class="text-danger">*</sup></label>
                          </div>
                          <div class="col-sm-7">
                            <div class='input-group date datetimepicker1' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span ><i class="fa fa-calendar"></i></span>
                                </span>
                            </div>
                          </div>
                        </div>
                    </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-success" >Search</button>
                      </div>
                  </form>
                </div>
              </div>



            </div>
          </div>
    
        </section>
        <section id="tabs" class="project-tab p-3">
            
                <div class="row">
                   

                        <div class="tab-content" id="nav-tabContent">
                          
                                    <div class="tab-pane  active" id="nav-2020" role="tabpanel" aria-labelledby="nav-home-tab">
                                      <div class="p-2">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card mt-2 ">
                                              <div class="card-header" data-toggle="collapse" data-target="#collapse05" aria-expanded="true">     
                                                  <span class="title pl-3">Week : 05</span>
                                                  <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                              </div>

                                                      <div id="collapse05" clock_id="" class="collapse " data-parent="#accordionExample">
                                                          <div class="card-body">
                                                              <table class=" table table-stripped table-bordered">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Clock In Time</th>
                                                                          <th>Clock Out Time</th>
                                                                          <th>IP Address</th>
                                                                          <th>Hours</th>
                                                                          <th>Action</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                    <tr>                                                                    <tr>
                                                                      <td colspan="5" style="background: gainsboro;">01.27.2020</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>13:31:13</td>
                                                                    <td>
                                                                      13:31:22                                                                              </td>
                                                                    <td>::1</td>
                                                                    <td>0 : h 0 m                                                                                </td>
                                                                    <td>
                                                                            <div class="">
                                                                                <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                                                                <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                                                                <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                                                </div>
                                                                    </td>
                                                                    </tr>

                                                                    <tr>
                                                                    <td colspan="5" style="background: gainsboro;">01.27.2020</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>13:31:54</td>
                                                                    <td>
                                                                      13:38:50                                                                              </td>
                                                                    <td>::1</td>
                                                                    <td>0 : h 6 m                                                                                </td>
                                                                    <td>
                                                                            <div class="">
                                                                                <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                                                                <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                                                                <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                                                </div>
                                                                    </td>
                                                                    </tr>

                                                                                                                                              <tr>
                                                                    <td colspan="5" style="background: gainsboro;">01.27.2020</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>14:43:52</td>
                                                                    <td>
                                                                      14:44:20                                                                              </td>
                                                                    <td>::1</td>
                                                                    <td>0 : h 0 m                                                                                </td>
                                                                    <td>
                                                                            <div class="">
                                                                                <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                                                                <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                                                                <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                                                </div>
                                                                    </td>
                                                                    </tr>

                                                                                                                                                        <tr>
                                                                              <td colspan="5" style="background: gainsboro;">01.27.2020</td>
                                                                              </tr>
                                                                              <tr>
                                                                              <td>14:44:30</td>
                                                                              <td>
                                                                                17:28:00                                                                              </td>
                                                                              <td>::1</td>
                                                                              <td>2 : h 43 m                                                                                </td>
                                                                              <td>
                                                                                      <div class="">
                                                                                          <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                                                                          <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                                                                          <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                                                          </div>
                                                                              </td>
                                                                              </tr>

                                                                                                                                            </tbody>
                                                              </table>
                                                          </div>
                                                      </div>
                                                  
                                                      
                                                    </div>
                                                                                                      <div class="card mt-2 ">
                                                      <div class="card-header" data-toggle="collapse" data-target="#collapse06" aria-expanded="true">     
                                                          <span class="title pl-3">Week : 06</span>
                                                          <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                      </div>

                                                      <div id="collapse06" clock_id="" class="collapse show" data-parent="#accordionExample">
                                                          <div class="card-body">
                                                              <table class=" table table-stripped table-bordered">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Clock In Time</th>
                                                                          <th>Clock Out Time</th>
                                                                          <th>IP Address</th>
                                                                          <th>Hours</th>
                                                                          <th>Action</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                                                                                                <tr>
                                                                              <td colspan="5" style="background: gainsboro;">Day In : 02.03.2020, Day Out: 01.01.1970</td>
                                                                              </tr>
                                                                              <tr>
                                                                              <td>12:00:35</td>
                                                                              <td>
                                                                                <span class="text-danger"><span>                                                                              </td>
                                                                              <td>::1</td>
                                                                              <td>                                                                                </td>
                                                                              <td>
                                                                                      <div class="">
                                                                                          <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                                                                          <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                                                                          <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                                                          </div>
                                                                              </td>
                                                                              </tr>

                                                                                                                                            </tbody>
                                                              </table>
                                                          </div>
                                                      </div>
                                                  
                                                      
                                                    </div>
                                                                                                    
                                               
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
        $("#emply").select2();
      });
  </script>
  <script type="text/javascript">
   $(function () {
      $('.datetimepicker1').datetimepicker();
   });
 </script>