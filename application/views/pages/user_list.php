    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="card">
          <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                aria-selected="true">All Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                aria-selected="false">New Users</a>
            </li>
          </ul>
          <div class="tab-content card pt-5" id="myTabContentJust">
            <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
              <table id="job_post" class="display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Designation</th>
                    <th class="text-center">Vacancy</th>
                    <th class="text-center">Last Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
              
                  <tr>
                    <td class="text-capitalize text-center">Full name</td>
                    <td class="text-capitalize text-center">designation</td>
                    <td class="text-capitalize text-center">vacancy_no</td>
                    <td class="text-capitalize text-center">last_date</td>
                    <td class="text-capitalize text-center">status</td>
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
                  <form id="job_posted" role="form" enctype="multipart/form-data" data-parsley-validate="">
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="full_name">Full Name<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="full_name" value="" class="form-control" required="1" placeholder="e.g Enter your  Full Name">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Employment_id">Employment ID<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="Employment_id" value="" class="form-control" required="1" placeholder="e.g 15351">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputusername">Username<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="Username" value="" class="form-control" required="1" placeholder="e.g Enter your  Username">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Password">Password<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="password" name="Password" value="" class="form-control" required="1" placeholder="Password">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="confirmPassword">Confirm Password<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="password" name="confirmPassword" value="" class="form-control" required="1" placeholder="Confirm Password">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="email">Email<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="email" name="email" value="" class="form-control" required="1" placeholder="Email">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Locale">Locale<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                        <select class="form-control w-100" name="locale" data-parsley-id="16" tabindex="-1" aria-hidden="true">
                           <option value="" disabled="" selected="">select Locale</option>
                              <?php foreach ($countries as $country) : ?>
                                  <option value="<?php echo $country->id; ?>"><?=$country->value?></option>
                              <?php endforeach; ?>
                                      
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Language">Language<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <select class="form-control w-100" name="language" data-parsley-id="16" tabindex="-1" aria-hidden="true">
                            <option lang="En" value="English">English</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Phone">Phone<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="Phone" value="" class="form-control" required="1" placeholder="e.g user_placeholder_phone">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Mobile">Mobile<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="Mobile" value="" class="form-control" required="1" placeholder="e.g user_placeholder_Mobile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Skype id ">Skype id <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="Skype id" value="" class="form-control" required="1" placeholder="e.g user_placeholder_skype">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Profilephoto">Profile Photo<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="file" name="Profilephoto" value="" class="form-control" required="1" placeholder="e.g user_placeholder_skype">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="User Type">User Type<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <select id="user_type" name="role_id" class="form-control" required="">
                                <option value="" disabled="" selected="">Select User Type</option>
                                <option value="1">Admin</option>
                                <option value="3">Staff</option>
                                <option value="2">Client</option>
                            </select>
                        </div>
                      </div>
                    </div>
                     <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="direction">Direction<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <select id="direction" name="direction" class="form-control" required="">
                                <option value="" disabled="" selected="">Select Direction</option>
                                <option value="LTR">LTR</option>
                                <option value="RTL">RTL</option>
                            </select>
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
                               <select name="designations_id" class="form-control select_box" style="width:100%"
                            required>
                              <option value="">select designation</option>
                              <?php if (!empty($all_department_info)): foreach ($all_department_info as $dept_name => $v_department_info) : ?>
                                  <?php if (!empty($v_department_info)):
                                      if (!empty($all_dept_info[$dept_name]->deptname)) {
                                          $deptname = $all_dept_info[$dept_name]->deptname;
                                      } else {
                                          $deptname ='undefined_department';
                                      }
                                      ?>
                                      <optgroup label="<?php echo $deptname; ?>">
                                          <?php foreach ($v_department_info as $designation) : ?>
                                              <option value="<?php echo $designation->designations_id; ?>"
                                                  <?php
                                                  if (!empty($job_posted->designations_id)) {
                                                      echo $designation->designations_id == $job_posted->designations_id ? 'selected' : '';
                                                  }
                                                  ?>><?php echo $designation->designations ?>
                                                    
                                                  </option>
                                          <?php endforeach; ?>
                                      </optgroup>
                                  <?php endif; ?>
                              <?php endforeach; ?>
                              <?php endif; ?>
                          </select>
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
                            <input type="radio" name="Permission" value="all" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                          </div>
                          <div class="checkbox c-radio needsclick">
                            <input type="radio" name="Permission" value="all" id="chkPassport" onclick="ShowHideDiv(this)" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="row mt-3">
                    <div class="offset-11 col-md-1">
                      <button type="submit" class="btn btn-primary save_btn">Save</button>
                    </div>
                  </div>
                </form> 
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
  






<!-- <script>
    $('.file-upload').file_upload();
</script> -->


<script type="text/javascript">
      $("#user_list").submit(function(e){
       e.preventDefault();
       var ar=[];
         var obj = {};
          var permission=JSON.stringify(obj);
          if(Object.keys(permission).length==2)
          {
            permission="all";
          }
          if($('#everyone').is(':checked')) 
          {
           permission="all"; 
          }
          var formData= new FormData($(this)[0]);
          formData.append('job_permissions',permission);
          formData.append('job_description', CKEDITOR.instances.myEditor.getData());
          $.ajax({
            url:"<?=base_url()?>Users/User_list",
            type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
               var response=JSON.parse(response);
              if(response.status==1)
              {
                swal("Users Successfully!", "Created", "success");
              }
              else if(response.status=="0")
              {
               swal(response.msg, "Already Exists", "error");
              }
            }
         });
    });
</script>
 
