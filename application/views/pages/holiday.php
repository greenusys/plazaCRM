<style type="text/css">
.back
{
  background-color:white;
}
.active, .back:hover
{
  background-color: #23b7e5 !important;
  color:white;
}
</style>
         <style>
          .input_year {
                font-size: 14px;
                padding: 0px 5px !important;
                height: 34px !important;
                
          }
          .input-group{
            margin: 0 auto;
          }
          .mnth_c{
                color: #444;
                display: block;
                padding: 11px 20px;
                /*border-bottom: 1px solid;*/
          }
          .mnth_c:hover{
            background: #6777ef;
            color: white;
            text-decoration: none;
          }
          .card .card-header .btn {
    margin-top: 1px;
    padding: 0px 12px;
}
     
          .brand-pills .active a{
                background: #6777ef;
               color: white;

          }
          .form-control{
            border-radius: 3px !important;
          }
          .input-group-addon {
    padding: 0px 14px !important;
    background: #edf1f2 !important;
}
.btn-purple:hover {
    color: #ffffff;
    background-color: #7266bad6 !important;
    border-color: rgba(0, 0, 0, 0);
}
.btn-purple {
    color: #ffffff;
    background-color: #7266ba;
    border-color: transparent;
}
</style>
          <div class="row mt-4">
            <div class="col-lg-12">
              <div class="">
                <div class="first_div" id="advn_div">
        <div class="row mt-5">
          <div class="col-md-3">
                 <div class="yetr__">
                    <ul class="list-unstyled d-flex">
                      <li ><strong>Year :</strong></li>
                      <li>
                          <div class='input-group date datetimepicker10 w-75' id='datetimepicker10'>
                              <input type='text' class="input_year form-control" />
                                <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                      </li>
                      <li><button class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button></li>
                    </ul>
                </div>
              </div>
              <div class="col-md-7">
                <div class="mt-3">
                  <a href="#" class="text-danger" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" ><i class="fas fa-plus"></i> New Holiday</a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="text-right">
                  <button class="btn btn-info" id="advn_salry"><i class="fas fa-undo-alt"></i> Switch</button>
                  <!-- <button class="btn btn-purple" style="display:none" id="advn_salry_reprt"><i class="fas fa-undo-alt"></i> Switch</button> -->
                </div>
              </div>
            </div>
          <div class="row " >
         
              <!-- <div class="card"></div> -->
              <div class="col-md-3">
       

              <div class="card">
                <ul class="list-unstyled">
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> January</strong> </a>
                  </li>
                   <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> February</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> March </strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> April </strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> May</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> June</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> July</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> August</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> September</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> October</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> November </strong> </a> 
                  </li>
                   <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> December</strong> </a>
                  </li>
                </ul>
              </div>
              </div>
              <div class="col-md-9">
                  <div class="card">
                      <div class="card-header row border-bottom py-1">
                        <div class="col-md-6">
                          <span><i class="fas fa-calendar-alt"></i> <strong> Month Name</strong></span> 
                         </div>
                          <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                      </div>
                      <div class="p-2 pt-3 ">
                       <table id="example" class="display nowrap " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Start Date</th>
                                    <th>End Date </th>
                                    <th>Color</th>
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
        </section>
      </div>
 
    <script type="text/javascript">
      $(document).on("click","#advn_salry",function(){
          $(this).hide();
          $("#advn_div").hide();
             $(".yetr__").hide();
          $("#advn_salry_reprt").show();
          $("#advn_sar_reprt_div").show();
      })
       $(document).on("click","#advn_salry_reprt",function(){
          $(this).hide();
             $(".yetr__").show();
             $("#advn_div").show();
           $("#advn_sar_reprt_div").hide();
           $("#advn_salry").show();
      })
    </script>
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Holiday</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form>
            
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Event Name <sup class="text-danger">*</sup> </label>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id=""  placeholder="Enter Your Event Name" required="">
                </div>
              </div>
            </div>
      <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Description <sup class="text-danger">*</sup> </label>
                </div>
                <div class="col-sm-6">
                    <textarea rows="3" cols="42"> Enter Your Description</textarea>
                </div>
              </div>
            </div>
            
            
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Start Date <sup class="text-danger">*</sup>  </label>
                </div>
                <div class="col-sm-6">
                    <div class='input-group date form-group datetimepicker10' id='datetimepicker10'>
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
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">End Date <sup class="text-danger">*</sup>  </label>
                </div>
                <div class="col-sm-6">
                    <div class='input-group date form-group datetimepicker10' id='datetimepicker10'>
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
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Location </label>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id=""  placeholder="Enter Your Location" required="">
                </div>
              </div>
            </div>
      <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  
                </div>
                <div class="col-sm-6">
                    <ul class="d-flex " style="list-style:none">
              <li class="p-2"><div class="p-2 bg-primary"></div></li>
            <li class="p-2"><div class="p-2 bg-danger"></div></li>
            <li class="p-2"><div class="p-2 bg-light"></div></li>
            <li class="p-2"><div class="p-2 bg-secondary"></div></li>
            <li class="p-2"><div class="p-2 bg-success"></div></li>
            <li class="p-2"><div class="p-2 bg-warning"></div></li>
            <li class="p-2"><div class="p-2 bg-info"></div></li>
            <li class="p-2"><div class="p-2 bg-dark"></div></li>
            
          </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn text-left">
          <button type="button" class="btn btn-primary text-left">Save</button>
         
          </div>
      </div>
    </div>
  </div>


<script type="text/javascript">
    $(function () {
        $('.datetimepicker10').datetimepicker({
            viewMode: 'years',
            format: 'MM/YYYY'
        });
    });
</script>
<script>
     $(document).ready(function() {
          $(".hourly_status").select2();
          $("#imptask_status").select2();
          $(".monthly_status").select2();
      });
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#award_list').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
