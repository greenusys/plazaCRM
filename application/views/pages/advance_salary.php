 
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
              </div>
              -->
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
        </style>
          <div class="row mt-4">
         
              <!-- <div class="card"></div> -->
              <div class="col-md-3">
                <div class="">
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
              <div class="col-md-9"><div class="card">dsadasd</div></div>
            
          </div>
    
        </section>
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