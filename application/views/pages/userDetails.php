<style>
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
  






<!-- <script>
    $('.file-upload').file_upload();
</script> -->


