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

<div class="row mt-4">
  <div class="col-md-12">
    <div class="card p-2">
      <div class="card-header row border-bottom py-1">
        <div class="col-md-6">
          <span><strong>Attendance Report</strong></span>
        </div>
      </div>
      <div class="p-2">
        <form method="post " action="<?=base_url('Attendance/getattendanceReport')?>">
          <div class="form-group pt-2">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                <label for="exampleInputEmail1" class="pt-2">Department<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                  <select name="departments_id" class="form-control" id="emply">
                    <option selected="" disabled="" value="0">Select Department</option>
                    <?php
                    foreach($all_dept_info as $dept){
                    // /print_r($dept);
                    ?>
                    <option value="<?=$dept->departments_id?>">
                        <?=$dept->deptname?>
                    </option>
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
                <div class='input-group date form-group' id='datetimepicker10'>
                  <input type='text' class="form-control" />
                    <span class="input-group-addon">
                      <span ><i class="fa fa-calendar"></i></span>
                  </span>
               </div>
              </div>
            </div>
          </div>
          <div class="text-center">
              <button type="submit" class="btn btn-success">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<div class="row mt-4">
  <div class="col-md-12">
  <div class="card p-2">
    <div class="card-header row border-bottom py-1">
      <div class="col-md-6">
        <span><strong>Works Hours Details of May-2020</strong></span> 
       </div>
     <!--    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
    </div>

     <section id="tabs" class="project-tab p-3">

    <div class="row">
        <div class="col-md-12">
                <div class="p-2">
                  <div class="accordion" id="accordionExample">
                    <div class="card mt-2 dd">
                      <div class="card-header" data-toggle="collapse" data-target="#collapse5" aria-expanded="true">     
                          <span class="title pl-3">Week : 5</span>
                          <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                      </div>
                      <div id="collapse5" clock_id="" class="collapse" data-parent="#accordionExample">
                          <div class="card-body">
                              <table class=" table table-stripped table-bordered">
                                <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                  </tr>
                                </thead>
                                <tbody>         
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                            Total Working Hour :  0 : 0 m
                          </tbody>
                        </table>
                      </div>  
                    </div>
                  <div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2">
                  <div class="accordion" id="accordionExample">
                    <div class="card mt-2 dd">
                      <div class="card-header" data-toggle="collapse" data-target="#collapse5" aria-expanded="true">     
                          <span class="title pl-3">Week : 5</span>
                          <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                      </div>
                      <div id="collapse5" clock_id="" class="collapse" data-parent="#accordionExample">
                          <div class="card-body">
                              <table class=" table table-stripped table-bordered">
                                <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                  </tr>
                                </thead>
                                <tbody>         
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jonathan Tornil Grasa
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                  <td>  0 : 0 m
                                  </td>
                                </tr>
                            Total Working Hour :  0 : 0 m
                          </tbody>
                        </table>
                      </div>  
                    </div>
                  <div>
                </div>
              </div>
            </div>
          </div>
</section>          
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
      $('#datetimepicker10').datetimepicker({
          viewMode: 'years',
          format: 'MM/YYYY'
      });
  });
</script>

<script type="text/javascript">
    function printEmp_report(printableArea) 
    {
        $('div.wrapper').find('.collapse').css('display', 'block');
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>