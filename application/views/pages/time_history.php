
        
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Time History Details</strong></span> 
                   </div>
                 <!--    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                </div>
              <div class="p-2">
                <form  method="post ">
                  <div class="form-group pt-2">
                    <div class="row">
                      <div class="offset-1 col-sm-2 text-right">
                        <label for="exampleInputEmail1" class="pt-2">Employee<sup class="text-danger">*</sup></label>
                      </div>
                      <div class="col-sm-5">
                      
                          <div class="input-group">
                                <select name="client_id" class="form-control" id="emply">
                                    <option selected="" disabled="">Select Employee</option>
                                    <?php
                                      foreach($Employee as $empD){
                                        // /print_r($empD);
                                        ?>
                                           <option value="<?=$empD->user_id?>"><?=$empD->full_name?> (<?=$empD->designations ?>) </option>   
                                        <?php
                                      }
                                    ?>
                        
                                </select>
                          </div>
                      </div>
                        <div class="col-md-2"><button class="btn btn-success">GO</button></div>
                    </div>
                  
                  </div>
                </form>
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