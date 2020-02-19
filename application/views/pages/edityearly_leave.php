<style>
  .w_20{
    width: 20px;
  }
 </style>
          
            <div class="col-md-12">
                <div class="p-2">
        <form  id="yearlyleave">
          <?php
          foreach($fetch_leave_yearly as $flydata)
          {
          ?>
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                <label for="exampleInputEmail1" class="pt-2">Department<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                  <select name="dept_id" class="form-control" id="emply">
                    <option selected="" disabled="" value="0">Select Department</option>
                    <?php
                                                
                                foreach($fetch_Department_data as $deptData)
                                  {
                                      if($flydata->department_id==$deptData->departments_id)
                                      {
                                         echo '<option value="'.$deptData->departments_id.'" selected>'.$deptData->deptname.'</option>';
                                      }
                                      else
                                      {
                                           echo '<option value="'.$deptData->departments_id.'">'.$deptData->deptname.'</option>';
                                      }
                                  }
                                        ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  <label for="exampleInputEmail1" class="pt-2">Total Yearly Leave<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class='input-group  form-group' id=''>
                  <input type="hidden" name="year_leaveid"value="<?=$flydata->year_leaveid?>">
                 <input type="number" class="form-control " value="<?=$flydata->total_Yearlyleave?>" name="totalleave">
                   
               </div>
              </div>
            </div>
          </div>
          <?php
        }?>
             
                <div class="text-center">
                  <button type="submit" class="btn btn-success">Update</button>
              </div>


        </form>
      </div>
        </section>
         <style type="text/css">
       .show{
        display: block !important;
       }
       .card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.38);
  }
  .tab_year{    
    background: #8080807d;
    font-weight: 700;
  }
  .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    border-top: 3px solid #6777ef;
}
.card .card-header{
      padding: 4px 3px;
}
/*.accordion .card-header:after {
    font-family: "Font Awesome 5 Brands","Font Awesome 5 Free";
    content: "\f146";
    float: right; 
    color: #7d7d7d;
}*/
/*.accordion .card-header.collapsed:after {  
    font-family: "Font Awesome 5 Brands","Font Awesome 5 Free";
    content: "\f0fe";
    color: #7d7d7d;
}*/
.card-header .title {
    font-size: 17px;
    color: #6777ef;
    font-weight: 600;
}
.card-header .accicon {
    float: right;
    font-size: 20px;
    width: 1.2em;
    right: 0px;
    position: absolute;
}
.card-header{
  cursor: pointer;
  border-bottom: none;
}
.card{
  border: 1px solid #ddd;
}
.card-body{
  border-top: 1px solid #ddd;
}
.card-header:not(.collapsed) .rotate-icon {
  transform: rotate(180deg);
}
.table:not(.table-sm):not(.table-md):not(.dataTable) td, .table:not(.table-sm):not(.table-md):not(.dataTable) th {
    padding: 0 16px;
    height: 40px;
    vertical-align: middle;
}
     </style>   


  <script>
     $(document).ready(function() {
        $("#emply").select2();
      });
  </script>
 <script type="text/javascript">
  $(function () {
      $('#datetimepicker10').datetimepicker({
          viewMode: 'years',
          format: 'MM/YYYY'
      });
  });
</script>
  
        <script> 

       $(document).ready(function(){
            $("#yearlyleave").submit(function(e){
                e.preventDefault();
                var formData= new FormData($(this)[0]); 
                $.ajax({
                    url:"<?=base_url('Leavemanagement/updateYearlyleave')?>",
                     type:"post",
                     data:formData,
                     // enctype:"multipart/form-data",
                     contentType:false,
                     processData:false,
                     cache:false,
                    success:function(response)
                    {
                     var obj=JSON.parse(response);
                     console.log(obj.status);
                     if(obj.status==0)
                     {
                        swal("Policy", "Error", "error")
                     }
                     if(obj.status==1)
                     {
                      swal("Policy", "Updated", "success")
                     }
                     if(obj.status==2)
                     {
                     swal("Policy", "Try Again", "error")
                     }
                     window.location.href='<?=base_url("Leavemanagement/LeaveYearySection")?>';
                    }
                });
            });

        });

    </script>
  
