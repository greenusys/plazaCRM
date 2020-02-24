<style>
.modal-style
{ 
    width: 1025px;
    /*height: 370px;*/
    margin-left: -85px;
}
@media only screen and (max-width: 600px) 
{
    .modal-style
    { 
        width:100%;
        height:auto
        margin-left:0px;
   }
}
</style>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <!--  <div class="card-header">
                  <h4>Budget vs Sales</h4>
                </div> -->
                    <!--    <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div> -->
                    <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-8" id="myTabJust" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true">Pending Approval</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just" aria-selected="false">My Leave</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" id="all_leave_tab" data-toggle="tab" href="#all_leave" role="tab" aria-controls="all_leave" aria-selected="false">All Leave </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" id="leave_report_tab" data-toggle="tab" href="#leave_report" role="tab" aria-controls="leave_report" aria-selected="false">Leave Report</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" id="apply_leave_tab" data-toggle="tab" href="#apply_leave" role="tab" aria-controls="apply_leave" aria-selected="false">Apply Leave</a>
                        </li>
                    </ul>
                    <div class="tab-content card pt-5 refreshlocation"  id="myTabContentJust ">
                        <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Leave Category</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($fetch_leave_data as $leaseAllData)
                                    {
                                         // print_r($leaseAllData);
                                        $date1=date_create($leaseAllData->leave_start_date);
                                        $date2=date_create($leaseAllData->leave_end_date);
                                        $diff=date_diff($date1,$date2);
                                    ?>
                                        <tr>
                
           <td><a href="<?=base_url('Leavemanagement/Leave_Modal_Detailss/').$leaseAllData->leave_application_id?>"  LeaveApp_id="<?=$leaseAllData->leave_application_id?>" class="Applicationdata" fetchdesignationid="<?=$leaseAllData->designation_id?>"data-toggle="modal" data-target="#leaveapplicationsection"><?=$leaseAllData->fullname?></a></td>
                                            <td><?=ucwords($leaseAllData->leave_category)?></td>
                                            <td><?=date('d-m-Y',strtotime($leaseAllData->leave_start_date))?></td>
                                            <td><?=date('d-m-Y',strtotime($leaseAllData->leave_end_date))?></td>
                                            <td><?php print_r($diff->d)?></td>
                                            <?php
                                            if($leaseAllData->application_status==1)
                                            {?>
                                              <td><span class="btn-warning" style="width:1%;height:100%;">Pending</span></td>
                                              <?php
                                            }
                                            elseif($leaseAllData->application_status==2)
                                            {?>
                                            <td><span class="btn-success" style="width:1%;height:100%;">Accepted</span></td>
                                            <?php 
                                            }
                                            else
                                            {?>
                                                <td><span class="btn-danger" style="width:1%;height:100%;">Rejected</span></td>
                                                <?php
                                            }?>
                                          
                                            <td>
                                                <div class="">
                                                    <!--<a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>-->
                                                    <a href="javascript:void(0)" leave_app_id="<?=$leaseAllData->leave_application_id?>" class="deletetPendingApplication"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                                    <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                </div>
    
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                  
                                </tbody>
                                <!--<tfoot>-->
                                <!--    <tr>-->
                                <!--        <th>Name</th>-->
                                <!--        <th>Leave Category</th>-->
                                <!--        <th>Date</th>-->
                                <!--        <th>Duration</th>-->
                                <!--        <th>Status</th>-->
                                <!--        <th>Action</th>-->
                                <!--    </tr>-->
                                <!--</tfoot>-->
                            </table>
                        </div>
                         
                        <!--MY LEAVE STARTING-->
                        <div class="tab-pane fade px-4 refreshmyleave" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                            <table id="example2" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Leave Category</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    foreach($fetch_Myleave_data as $MyleaveAllData)
                                    {
                                        // print_r($leaseAllData);
                                    ?>
                                        <tr>
                                            <td><a href="<?=base_url('Leavemanagement/Leave_Modal_Detailss/').$MyleaveAllData->leave_application_id?>"  LeaveApp_id="<?=$MyleaveAllData->leave_application_id?>" class="Applicationdata "data-toggle="modal" data-target="#leaveapplicationsection"><?=$MyleaveAllData->fullname?></a></td>
                                            <td><?=ucwords($leaseAllData->leave_category)?></td>
                                            <td><?=date('d-m-Y',strtotime($leaseAllData->leave_start_date))?></td>
                                            <td><?=date('d-m-Y',strtotime($leaseAllData->leave_end_date))?></td>
                                            <td><?php print_r($diff->d)?></td>
                                            <?php
                                            if($MyleaveAllData->application_status==1)
                                            {?>
                                              <td><span class="btn-warning" style="width:1%;height:100%;">Pending</span></td>
                                              <?php
                                            }
                                            elseif($MyleaveAllData->application_status==2)
                                            {?>
                                            <td><span class="btn-success" style="width:1%;height:100%;">Accepted</span></td>
                                            <?php 
                                            }
                                            else
                                            {?>
                                                <td><span class="btn-danger" style="width:1%;height:100%;">Rejected</span></td>
                                                <?php
                                            }?>
                                          
                                            <td>
                                                <div class="">
                                                    <!--<a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>-->
                                                     <a href="javascript:void(0)" myleave_id="<?=$MyleaveAllData->leave_application_id?>" class="deletetMyleave"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                                    <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                </div>
    
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                           

                                </tbody>
                                <!--<tfoot>-->
                                <!--    <tr>-->
                                <!--        <th>Name</th>-->
                                <!--        <th>Leave Category</th>-->
                                <!--        <th>Date</th>-->
                                <!--        <th>Duration</th>-->
                                <!--        <th>Status</th>-->
                                <!--        <th>Action</th>-->
                                <!--    </tr>-->
                                <!--</tfoot>-->
                            </table>
                        </div>
                        <div class="tab-pane fade show px-4" id="all_leave" role="tabpanel" aria-labelledby="all_leave">
                            <table id="allLeave" class="display nowrap" style="width:100%">
                                <thead>
                                     <tr>
                                        <th>Name</th>
                                        <th>Leave Category</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($fetch_leave_data as $leaseAllData)
                                    {
                                        // print_r($leaseAllData);
                                    ?>
                                        <tr>
                                            <td><a href="<?=base_url('Leavemanagement/Leave_Modal_Detailss/').$leaseAllData->leave_application_id?>"  LeaveApp_id="<?=$leaseAllData->leave_application_id?>" class="Applicationdata "data-toggle="modal" data-target="#leaveapplicationsection"><?=$leaseAllData->fullname?></a></td>
                                           <td><?=ucwords($leaseAllData->leave_category)?></td>
                                            <td><?=date('d-m-Y',strtotime($leaseAllData->leave_start_date))?></td>
                                            <td><?=date('d-m-Y',strtotime($leaseAllData->leave_end_date))?></td>
                                            <td><?php print_r($diff->d)?></td>
                                            <?php
                                            if($leaseAllData->application_status==1)
                                            {?>
                                              <td><span class="btn-warning" style="width:1%;height:100%;">Pending</span></td>
                                              <?php
                                            }
                                            elseif($leaseAllData->application_status==2)
                                            {?>
                                            <td><span class="btn-success" style="width:1%;height:100%;">Accepted</span></td>
                                            <?php 
                                            }
                                            else
                                            {?>
                                                <td><span class="btn-danger" style="width:1%;height:100%;">Rejected</span></td>
                                                <?php
                                            }?>
                                          
                                            <td>
                                                <div class="">
                                                    <!--<a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>-->
                                                   <a href="javascript:void(0)" leave_app_id="<?=$leaseAllData->leave_application_id?>" class="deletetAllLeaveApplication"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                                    <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                </div>
    
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <!--<tfoot>-->
                                <!--    <tr>-->
                                <!--        <th>Name</th>-->
                                <!--        <th>Leave Category</th>-->
                                <!--        <th>Date</th>-->
                                <!--        <th>Duration</th>-->
                                <!--        <th>Status</th>-->
                                <!--        <th>Action</th>-->
                                <!--    </tr>-->
                                <!--</tfoot>-->
                            </table>
                        </div>
                        <div class="tab-pane fade show px-4" id="leave_report" role="tabpanel" aria-labelledby="leave_report">

                        </div>
                        <!-------apply leave----->
                        <div class="tab-pane fade show px-4" id="apply_leave" role="tabpanel" aria-labelledby="apply_leave">
                            <div class="row">
                                <div class="offset-1 col-sm-7 cl-md-7 col-lg-7">
                                    <form action="<?=base_url('Leavemanagement/addleaveapplication')?>" method="post" enctype="multipart/form-data">

                                       <!--  <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="exampleInputEmail1">Select Client <span class="text-danger">*</span> </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <select name="user_id" class="form-control" id="e1" style="width: 100%">
                                                            
                                                            <option value="0">Select Client</option>
                                                            <?php
                                                            foreach($fetch_users_data as $usersdata)
                                                            {
                                                            ?>
                                                        <option  value="<?=$usersdata->user_id?>"><?=$usersdata->full_name?></option>';
                                                        <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="e2">Leave Category </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group refreshCatdiv">
                                                        <select name="leave_category_id" class="form-control" style="width: 100%" id="e2">
                                                            <option value="0">Leave Category</option>
                                                           <?php
                                                           foreach($fetch_leave_category_data as $leaveCat)
                                                           {
                                                           ?>
                                                            <option value="<?=$leaveCat->leave_category_id?>"><?=$leaveCat->leave_category?></option>';
                                                        
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-1">
                                                    <button type="button" class="btn btn-light butn" data-toggle="modal" data-target="#myModal" title="New Client"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="exampleInputEmail1"> Duration <span class="text-danger">*</span> </label>
                                                </div>
                                                <div class="col-sm-9 d-flex">
                                                    <!-- <ul></ul> -->
                                                    <div class="radio">
                                                        <input id="radio1" value="1"name="duration" type="radio" checked>
                                                        <label for="radio1" class="radio-label">Single day</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="radio2" value="2"name="duration" type="radio">
                                                        <label for="radio2" class="radio-label">Multiple days</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="radio3" value="3"name="duration" type="radio">
                                                        <label for="radio3" class="radio-label">Hours</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="exampleInputEmail1">Start Date <span class="text-danger">*</span> </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control " name="leave_start_date"id="">
                                                </div>
                                                <div class="col-sm-1">
                                                    <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group " id="hour_sh">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="exampleInputEmail1">Hours <span class="text-danger">*</span> </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="hours">
                                                        <option selected="" value="0"></option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="5">05</option>
                                                        <option value="6">06</option>
                                                        <option value="7">07</option>
                                                        <option value="8">08</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group " id="end_date">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="exampleInputEmail1">End Date <span class="text-danger">*</span> </label>
                                                </div>
                                                <div class="col-sm-8">
                                                     <input type="date" class="form-control " name="leave_end_date" id="">
                                                </div>
                                                <div class="col-sm-1">
                                                    <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class=" col-md-3">
                                                    <label for="exampleInputEmail1">Reason </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea name="editor1"></textarea>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class=" col-md-3">
                                                    <label for="exampleInputEmail1">Attachment <span class="text-danger">*</span></label>
                                                </div>

                                                <div class="col-md-9">
                                                     <div class="form-group ">
        <label class="sr-only" for="inputFile">File Upload</label>
        <input type="file" name="files[]" class="form-control" multiple>
      </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>

                                    </form>
                                </div>
                                <div class="offset-1 col-sm-3 col-md-3 col-lg-3">
                                    <div class="card">
                                        <div class="card-header row border-bottom py-1">
                                            <div class="col-md-12">
                                                <span><strong>My Leave Details</strong></span>
                                            </div>

                                        </div>
                                        <div class="">
                                            <table class="table ">
                                                <tbody>
                                                    <tr class="border-bottom">
                                                        <td><strong>Slick:</strong></td>
                                                        <td>0/2</td>
                                                    </tr>
                                                    <tr class="border-bottom">
                                                        <td><strong>Marriage:</strong></td>
                                                        <td>0/3</td>
                                                    </tr>
                                                    <tr class="bg-dark text-white">
                                                        <td><strong>Total:</strong></td>
                                                        <td>0/5</td>
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


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="exampleModalLabel">Client list</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="line"></div>
            <div class="modal-body">
                <form id="leave_newcategory" >
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="exampleInputEmail1"> Leave Category </label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" value="" class="form-control" name="leave_category">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="exampleInputEmail1"> Leave Quota </label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" value="" class="form-control" name="leave_quota">
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="exampleInputEmail1"> Departments </label>
                        </div>
                        <div class="col-sm-9">
                             <select name="desig_id" class="form-control" id="emply">
                    <option selected="" disabled="" value="0">Select Designation</option>
                    <?php
                                        foreach($fetch_Designation_data as $desigdata)
                                        {
                                        ?>
              <option  value="<?=$desigdata->designations_id?>"><?=$desigdata->designations?></option>;
                                    <?php
                                        }
                                        ?>
                  </select>
                        </div>
                    </div>
                </div>
                  <div class="modal-footer">
                 <button type="submit"  class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>

            </div>
          
        </div>

    </div>
</div>
<!--start detail modal-->
<div class="modal leaveappss_div" id="leaveapplicationsection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-style">
            <div class="container-fluid">
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-11 col-10">

                               <h5><span id="fullname"> </span></h5>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <div class="line"></div>
                            <form>
                                <div class="container">
                                    <div class="row mt-3">
                                        <div class="col-sm-8">
                                            <div class=" col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="offset-1 col-sm-4 col-4" >
                                                            <label for="exampleInputEmail1"><strong>Category :</strong></label>
                                                        </div>
                                                        <div class="col-sm-7 col-7">
                                                            <label for="exampleInputEmail1"><strong><span class="text-capitalize" id="leave_category"></span></strong></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="offset-1 col-sm-3 col-3">
                                                            <label f><strong>Date :</strong></label>
                                                        </div>
                                                        <div class="col-sm-7 col-7 text-danger">
                                                            <label for="exampleInputEmail1"><strong ><span id="dateleavestartdate"></span><b>  to   </b><span id="dateleaveenddate"></span></strong></label>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="offset-1 col-sm-4 col-4">
                                                            <label for="exampleInputEmail1"><strong>Duration :</strong></label>
                                                        </div>
                                                        <div class="col-sm-7 col-7">
                                                            <label for="exampleInputEmail1"><strong><span id="Duration"></span></strong></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="offset-1 col-sm-4 col-4">
                                                            <label for="exampleInputEmail1"><strong>Applied On :</strong></label>
                                                        </div>
                                                        <div class="col-sm-7 col-7">
                                                            <label for="exampleInputEmail1"><strong><span id="Applieddate"></span></strong></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                                        
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="offset-1 col-sm-4 col-4">
                                                            <label for="exampleInputEmail1"><strong>Reason :</strong></label>
                                                        </div>
                                                        <div class="col-sm-6 border col-6">
                                                            <label for="exampleInputEmail1"><strong><span id="reason"></span></strong></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                            <div class="row">
                                                <div class="offset-1 col-sm-4 col-4">
                                                    <label for="exampleInputEmail1"><strong>Attachment :</strong></label>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    
                                                <img style="width:6em;height:6em;" id="leave_image" src="" alt="" />
                                                
                                                </div>
                                            </div>
                                        </div>
                                        
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="offset-1 col-sm-4">
                                                            <label for="exampleInputEmail1"><strong>Change Status:</strong></label>
                                                        </div>
                                                        <!-- jjf -->
     
                                                         <!-- jjj -->
                                                        <div class="col-sm-7">
                                                            <div class="row">
        <div class="col-sm-7 col-7">
            <a href="javascript:void(0)" class="btn btn-success acceptleave" d-aplId=""><i class="fa fa-thumbs-up"></i>Approved</a>
        </div>
         <div class="col-sm-5 col-5">
              <a href="javascript:void(0)" class="btn btn-danger rejectleave" d-aplId=""><i class="fa fa-thumbs-up"></i>Reject</a>
        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-sm-4 card shadow mb-5">
                                            <div class="row" >
                                                <div class="col-md-12" >
                                            <h6 id="categorynameofrleave">Detail Of </h6>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="line mt-2"></div>
                                                <form>

                                                    <div class="offset-1 col-sm-11">
                                                        <div class="form-group">
                                                            <div class="row">
                                                    <?php 
                                                    foreach($fetch_leave_category_data as $fetch_cat_name)
                                                    {
                                         
                                                    ?>
                                                        <div class="offset-1 col-sm-4 col-4 ">

                                                            <label for="exampleInputEmail1"><strong><?=ucwords($fetch_cat_name->leave_category)?></strong></label>
                                                            <input type="hidden" class="fetchdesig_id" desig_id="<?=$fetch_cat_name->leave_cat_desig_id?>">
                                                        </div>

                                                        <div class="col-sm-7 col-7
                                                        pl-5">
                                                    <span>0/</span><span><?=$fetch_cat_name->leave_quota?></span>                                                                   <!--  <label for="exampleInputEmail1">0/2</label> -->
                                                                </div>
                                                                <?php
                                                            }
                                                            ?>
                                                            </div>
                                                        </div>
                                                        
                                                       <!--  <div class="form-group">
                                                            <div class="row">
                                                                <div class=" col-sm-6 col-6">
                                                                    <label for="exampleInputEmail1">Marriage :</label>
                                                                </div>
                                                                <div class="col-sm-6 col-6">
                                                                    <label for="exampleInputEmail1">0/3</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         -->
                                                        <!-- <div class="form-group">
                                                            <div class="row">
                                                                <div class="offset-1 col-sm-5 col-5">
                                                                    <label for="exampleInputEmail1">:</label>
                                                                </div>
                                                                <div class="col-sm-6 col-6">
                                                                    <label for="exampleInputEmail1">0/0</label>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <!-- 
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class=" col-sm-6 col-6">
                                                                    <label for="exampleInputEmail1">Emergency:</label>
                                                                </div>
                                                                <div class="col-sm-6 col-6">
                                                                    <label for="exampleInputEmail1">0/0</label>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="form-group bg-dark p-1 text-white">
                                                            <div class="row">
                                                                <div class=" col-sm-6 col-6">
                                                                    <label for="exampleInputEmail1">Total:</label>
                                                                </div>
                                                                <div class="col-sm-6 col-6">
                                     <span id="availableleave"></span>/<span id="totalleave"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>                                  
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
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->
<!--end detail modal-->
<script>
          $('.Applicationdata').on('click',function(){
             // var leaveapp_id=$(this).attr("LeaveApp_id");
            var desig_id=$(this).attr('fetchdesignationid');
                // alert(desig_id);
            $.ajax({
              url:"<?=base_url('Leavemanagement/Fetchtotalleave')?>",
              type:"post",
              data:{desig_id:desig_id},
              success:function(response)
              {
                //   console.log(response.data);
                  var response=JSON.parse(response);
                   // console.log('fetchtotalleave',response.data);
                    
                   if(response.code==1)
                   {
                          $("#totalleave").empty();
                        var totalleave=response.data[0].total_Yearlyleave;
                        console.log('Total desigation Leave',totalleave);
                         $('#totalleave').append(totalleave); 
                        $.ajax({
                        url:"<?=base_url('Leavemanagement/checkAvailableDesigleave')?>",
                        type:"post",
                        data:{desig_id:desig_id},
                        success:function(response)
                        {
                            $('#availableleave').empty();
                          //console.log(response.data);
                          response=JSON.parse(response);
                          console.log('check difference',response.data);
                          console.log('check data',response.data[0].checkdata)
                        var takenleave=response.data[0].checkdata;

                          // $('#checkdiffleave').append(response.data);
                          //  $("#availableleave").empty();
                          // var takenleave=response.data; 
                           // var availableleave=totalleave-takenleave;
                           console.log('available',takenleave);
                           $('#availableleave').append(takenleave);
                          // console.log('available leave',availableleave);
                          // if(availableleave>0)
                          // {
                          //   $('#availableleave').val(availableleave);
                          //   // alert('empty');
                          // }
                          // else
                          // {
                          //    $('#availableleave').val('No More Leave Available');
                          //    $("#addpolicybutton").attr("disabled", true);
                          //    $("#addpolicybutton").prop('disabled', false);
                          //    $(".addpolicybutton").prop('disabled', false);
                          // }
                        }    
                        });
                       
                   }
                   else
                   {
                    // console.log('no data',totalleave)
                    $('#availableleave').val('no data found');
                   }

           
              }    
              });
            });
   
       
      </script>



<script> 
       $(document).on('submit','#leave_newcategory',function(e)
       {
            // $().submit(function(e){
                e.preventDefault();
                var formData= new FormData($(this)[0]);
                // console.log(formData);
                $.ajax({
                    url:'<?=base_url('Leavemanagement/addleavecategory')?>',
                     type:"POST",
                     data:formData,
                     contentType:false,
                     processData:false,
                     cache:false,

                    success:function(response)
                    {
                     var response=JSON.parse(response)
                     console.log(response);
                     
                    if(response.status==1)
                    {
                        swal("Category", "Added", "success")
                        $(".refreshCatdiv").load(location.href + " .refreshCatdiv");
                    
                    }
                    else
                    {
                       swal("Category", "Error", "error")
                    }
                }
            

        });
       });
    </script>
<script type="text/javascript">
     $(document).ready(function(){
          $('.acceptleave').on('click',function(){ 
               var leave_id=$(this).attr("d-aplId");
              $.ajax({
                url:'<?=base_url('Leavemanagement/changeLeaveStatus')?>',
                type:"post",
                data:{leave_id:leave_id},
                 success:function(response)
                    {
                        response=JSON.parse(response);
                        // console.log(response.data);
                        if(response.data==1)
                        {
                        
                    swal("Application", "Approve", "success");

                         }
                            $(".refreshlocation").load(location.href + " .refreshlocation");

                    }
              });
           });
      });
    </script>

    <script type="text/javascript">
     $(document).ready(function(){
          $('.rejectleave').on('click',function(){ 
               var leave_id=$(this).attr("d-aplId");
               // alert(leave_id);
              $.ajax({
                url:'<?=base_url('Leavemanagement/RejectLeaveStatus')?>',
                type:"post",
                data:{leave_id:leave_id},
                 success:function(response)
                    {
                        response=JSON.parse(response);
                        // console.log(response.data);
                        if(response.data==1)
                        {
                             
                        
                    swal("Application", "Rejected", "error");

                         }
                            $(".refreshlocation").load(location.href + " .refreshlocation");

                    }
              });
           });
      });
    </script>
 <script type="text/javascript">
  window.onload = function() {
  $(".leaveappss_div").hide();
};
        $(document).ready(function(){
          $('.Applicationdata').on('click',function(){ 
               var leaveapp_id=$(this).attr("LeaveApp_id");
            //   alert(leaveapp_id);
            //   $(".leaveappss_div").show();
            $.ajax({
            url:'<?=base_url('Leavemanagement/Leave_Modal_Detailss')?>',
            type:"post",
            data:{leaveapp_id:leaveapp_id},
          // dataType:'JSON',
         
            success:function(response)
            {
                      $(".leaveappss_div").show();
                
                     $("#fullname").html("");
                   
                     $("#leave_category").html("");
                     $("#Duration").html("");
                     $("#Applieddate").html(""); 
                     $("#reason").html("");
                     $("#leavestartdate").html("");
                     $("#leaveenddate").html("");
                     $("#leave_image").html("");
                     $("#dateleavestartdate").html("");
                     $("#dateleaveenddate").html("");
                      $("#categorynameofrleave").html("");

                  
    
                response=JSON.parse(response);
                 console.log(response);
                var fullname=response.data[0].fullname;
                // var leavedate=response.data[0].leave_start_date;
                var leavecategory=response.data[0].leave_category;
                 var duration=response.data[0].hours;
                var applieddate=response.data[0].created;
                var reason=response.data[0].reason;
                var leavestartdate=response.data[0].leave_start_date;
                var leaveendate=response.data[0].leave_end_date;
                var leave_image='<?=base_url("./uploads/leave/")?>'+response.data[0].attachment;
                var leave_application_id=response.data[0].leave_application_id;
                const date1 = new Date(leavestartdate);
                const date2 = new Date(leaveendate);
                const diffTime = Math.abs(date2 - date1);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
                console.log(diffDays);
                var mydateOne = new Date(leavestartdate);
               var strtDate = mydateOne.getUTCDate()+'-'+mydateOne.getMonth()+'-'+mydateOne.getFullYear();
               var mydateTwo = new Date(leaveendate);
               var endDate = mydateTwo.getUTCDate()+'-'+mydateTwo.getMonth()+'-'+mydateTwo.getFullYear();
               // window.alert(str);
                    $('.acceptleave').attr('d-aplId',leave_application_id);
                    $('.rejectleave').attr('d-aplId',leave_application_id);

  
                 $("#fullname").append(fullname);
                // $("#leavedate").append(leavedate);
                 $("#leave_category").append(leavecategory);
                 $("#categorynameofrleave").append(fullname);
                 $("#Duration").append(diffDays);
                 $("#Applieddate").append(applieddate);
                 $("#reason").append(reason);
                  $("#leavestartdate").append(strtDate);
                   $("#leaveenddate").append(endDate);
                    $("#dateleavestartdate").append(strtDate);
                   $("#dateleaveenddate").append(endDate);
                    $("#leave_application_id").val(leave_application_id);
                    // $('#leave_image').attr('src',leave_image  );
                     $('#leave_image').attr('src',   leave_image  );

            }              
        });
            
          });
        }); 
        
  </script>
<script type="text/javascript">
        $(document).ready(function(){
          $('.deletetPendingApplication').on('click',function(){ 
             var leave_app_id=$(this).attr("leave_app_id");
             // alert(owner_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Leavemanagement/DeletePendingLeaveData')?>",
                  type:"post",
                  data:{leave_app_id:leave_app_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                   alert('Record Delete successfully');
                    location.reload();
                    
                       }
                  }
                 })                           
             // userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          })
        })  
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.deletetMyleave').on('click',function(){ 
             var myleave_id=$(this).attr("myleave_id");
             // alert(owner_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Leavemanagement/DeleteMyLeaveData')?>",
                  type:"post",
                  data:{myleave_id:myleave_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                   alert('Record Delete successfully');
                    // $(".refreshmyleave").load(location.href + " .refreshmyleave");
                     location.reload();
                    
                       }
                  }
                 })                           
             // userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          })
        })  
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.deletetAllLeaveApplication').on('click',function(){ 
             var leave_app_id=$(this).attr("leave_app_id");
             // alert(owner_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Leavemanagement/DeleteAllLeaveData')?>",
                  type:"post",
                  data:{leave_app_id:leave_app_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                   alert('Record Delete successfully');
                    location.reload();
                    
                       }
                  }
                 })                           
             // userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          })
        })  
      </script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#allLeave').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker({
                    locale: 'ru'
                });
            });
        </script>
<script>
    CKEDITOR.replace('editor1');
</script>
<script>
    $(document).ready(function() {
        $("#e1").select2();

        $("#e2").select2();
    });
</script>

<script>
    $(document).ready(function() {
      function readUrl(input) {
  
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = (e) => {
      let imgData = e.target.result;
      let imgName = input.files[0].name;
      input.setAttribute("data-title", imgName);
      console.log(e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }

}



        $("#end_date").hide();
        $("#hour_sh").hide();
        $(document).on("click", "#radio2", function() {
            var radioValue = $(this).val();
            if (radioValue) {
                $("#end_date").show();
                $("#hour_sh").hide();
            }
        });
        $(document).on("click", "#radio3", function() {
            var radioValue = $(this).val();
            if (radioValue) {
                $("#end_date").hide();
                $("#hour_sh").show();
            }
        });
        $(document).on("click", "#radio1", function() {
            var radioValue = $(this).val();
            if (radioValue) {
                $("#end_date").hide();
                $("#hour_sh").hide();
            }
        });
    });
</script>
<style type="text/css">
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



    .radio {
        margin: 0.5rem;
    }
    
    .radio input[type="radio"] {
        position: absolute;
        opacity: 0;
    }
    
    .radio input[type="radio"] + .radio-label:before {
        content: '';
        background: #f4f4f4;
        border-radius: 100%;
        border: 1px solid #b4b4b4;
        display: inline-block;
        width: 1.4em;
        height: 1.4em;
        position: relative;
        top: .2em;
        margin-right: 1em;
        vertical-align: top;
        cursor: pointer;
        text-align: center;
        transition: all 250ms ease;
    }
    
    .radio input[type="radio"]:checked + .radio-label:before {
        background-color: #3197EE;
        box-shadow: inset 0 0 0 4px #f4f4f4;
    }
    
    .radio input[type="radio"]:focus + .radio-label:before {
        outline: none;
        border-color: #3197EE;
    }
    
    .radio input[type="radio"]:disabled + .radio-label:before {
        box-shadow: inset 0 0 0 4px #f4f4f4;
        border-color: #b4b4b4;
        background: #b4b4b4;
    }
    
    .radio input[type="radio"] + .radio-label:empty:before {
        margin-right: 0;
    }
</style>