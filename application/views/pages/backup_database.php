
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
@media only screen and (min-width: 576px){
  .modal-dialog {
      max-width: 623px;
      margin: 1.75rem auto;
  }
}
.tabs-left {
  border-bottom: none;
  border-right: 1px solid #ddd;
}

.tabs-left>li {
  float: none;
 margin:0px;
 border-bottom:1px solid gray;

  
}
.tabs-left li a{
/*line-height: 1.42857143;*/
    border-bottom-color: #ddd;
    border-right-color: transparent;
   font-weight: 600;
    border: none;
    color: #000000db;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left li a:hover{
    border-bottom-color: #ddd;
    border-right-color: transparent;
    /*line-height: 1.42857143;*/
    color: white;
    background: #f90;
    border: none;
    text-decoration: none;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left>li.active>a,
.tabs-left>li.active>a:focus {
    border-bottom-color: #ddd;
    border-right-color: transparent;
   line-height: 1.42857143;
 color: white;
    background: #f90;
    border: none;
    border-radius: 0px;
    text-decoration: none;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav-tabs>li>a:hover {
    /* margin-right: 2px; */
    line-height: 1.42857143;
    border: 1px solid transparent;
    /* border-radius: 4px 4px 0 0; */
}
.tabs-left>li.active>a::after{content: "";
    position: absolute;
    top: 10px;
    right: -10px;
    border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  
  border-left: 10px solid #f90;
    display: block;
    width: 0;}
</style>

<!-- Main Content -->


        <div class="row mt-4">
            <div class="col-md-12">
    
        <div class="row">
        <div class="col-md-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways bg-white">
            <li class="w-100 active"><a href="#home-v" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Company Details</a></li>
            <li class="w-100"> <a href="#profile-v" data-toggle="tab"><i class="fas fa-desktop" aria-hidden="true"></i> System Settings</a></li>
            <li class="w-100"><a href="#email_set" data-toggle="tab"><i class="fas fa-envelope" aria-hidden="true"></i> Email Settings</a></li>
            <li class="w-100"><a href="#sms_set" data-toggle="tab"><i class="fas fa-envelope" aria-hidden="true"></i> SMS Settings</a></li>
            <li class="w-100"><a href="#email_temp" data-toggle="tab"><i class="fas fa-pen-square"></i> Email Templates</a></li>
            <li class="w-100"><a href="#email_inte" data-toggle="tab"><i class="far fa-envelope"></i> Email Integration</a></li>
            <li class="w-100"><a href="#payment_set" data-toggle="tab"><i class="fas fa-dollar-sign"></i> Payment Settings</a></li>
            <li class="w-100"><a href="#invoice_set" data-toggle="tab"><i class="far fa-money-bill-alt"></i> Invoice Settings</a></li>
            <li class="w-100"><a href="#estimate_set" data-toggle="tab"><i class="fas fa-sticky-note"></i> Estimate Settings</a></li>
            <li class="w-100"><a href="#proposal_set" data-toggle="tab"><i class="fa fa-leaf" aria-hidden="true"></i> Proposal Settings</a></li>
            <li class="w-100"><a href="#purchase" data-toggle="tab"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Purchase Purchase</a></li>
            <li class="w-100"><a href="#tick_leads" data-toggle="tab"><i class="fas fa-ticket-alt"></i> Ticket & Leads Settings </a></li>
            <li class="w-100"><a href="#theme_set" data-toggle="tab"><i class="fa fa-code" aria-hidden="true"></i> Theme Settings</a></li>
            <li class="w-100"><a href="#dashboard" data-toggle="tab"><i class="fas fa-tachometer-alt"></i> Dashboard Settings</a></li>
            <li class="w-100"><a href="#work_days" data-toggle="tab"><i class="fa fa-calendar" aria-hidden="true"></i> Working Days</a></li>
            <li class="w-100"><a href="#leave_category" data-toggle="tab"><i class="fab fa-pagelines"></i> Leave Category</a></li>
            <li class="w-100"><a href="#income_cat" data-toggle="tab"><i class="fa fa-certificate" aria-hidden="true"></i> Income Category</a></li>
            <li class="w-100"><a href="#expense_cat" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i> Expense Category</a></li>
            <li class="w-100"><a href="#customer_grp" data-toggle="tab"><i class="fa fa-users" aria-hidden="true"></i> Customer Group</a></li>
            <li class="w-100"><a href="#allowed_ip" data-toggle="tab"><i class="fa fa-server" aria-hidden="true"></i> Allowed IP</a></li>
            <li class="w-100"><a href="#lead_status" data-toggle="tab"><i class="fa fa-list" aria-hidden="true"></i> Leads Status</a></li>
            <li class="w-100"><a href="#lead_source" data-toggle="tab"><i class="fa fa-arrow-down" aria-hidden="true"></i> Lead Source </a></li>
            <li class="w-100"><a href="#opportunities_st" data-toggle="tab"><i class="far fa-dot-circle"></i> Opportunities State Reason</a></li>
            <li class="w-100"><a href="#custom_fld" data-toggle="tab"><i class="far fa-star"></i> Custom Field</a></li>
            <li class="w-100"><a href="#payment_met" data-toggle="tab"><i class="far fa-money-bill-alt"></i> Payment Method</a></li>
            <li class="w-100"><a href="#cronjob" data-toggle="tab"><i class="fab fa-contao"></i> Cronjob</a></li>
            <li class="w-100"><a href="#menu_all" data-toggle="tab"><i class="fa fa-compass" aria-hidden="true"></i> Menu Allocation</a></li>
            <li class="w-100"><a href="#notify" data-toggle="tab"><i class="far fa-bell"></i> Notifications</a></li>
            <li class="w-100"><a href="#email_notify" data-toggle="tab"><i class="far fa-bell"></i> Email Notification</a></li>
            <li class="w-100 active"><a href="#backup_data" data-toggle="tab"><i class="fa fa-database" aria-hidden="true"></i> Backup Database</a></li>
            <li class="w-100"><a href="#translation" data-toggle="tab"><i class="fa fa-language" aria-hidden="true"></i> Translations</a></li>
            <li class="w-100"><a href="#sys_update" data-toggle="tab"><i class="fas fa-edit"></i> System Update</a></li>
          
          </ul>
        </div>

        <div class="col-md-9">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane bg-white active" id="home-v">
               <div class="container bg-white card ">
                    <h6 class="mt">Company Details</h6>
                  <div class="line mt-2"></div>
                  <div class="row pd-4 mt-4">
                      <div class="offset-1 col-sm-9">
                          <form>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company Name <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tester">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Legal Name  <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tester">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Contact Person  </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tester">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class=" col-sm-3">
                              <label for="exampleInputEmail1">Company Address <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="short_note"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Country</label>
                            </div>
                            <div class="col-sm-9">
                              <div class="input-group">
                                                  <select name="client_id" class="form-control" id="customer_group">
                                                      <option value="0">Selected Country</option>
                                                      <option value="5" >France </option>
                                                      <option value="4" >Other Countries</option>
                                                      <option value="3" >Afganistan</option>
                                                      <option value="2" >Aringland Islands</option>
                                                      <option value="1" >Albania</option>
                                                  </select>
                                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">City </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dehradun">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Zip Code </label>
                            </div>
                            <div class="col-sm-4">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="28">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company Phone</label>
                            </div>
                            <div class="col-sm-4">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company Email</label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="info@greenusys.com">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company Website </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company VAT</label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                          </div>
                        </div>
                          </form>
                    </div>
                  </div>
                  <div class="row mt-3">
                      <div class="offset-3 col-md-3">
                       <button type="button" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="tab-pane" id="profile-v">
              <div class="container bg-white card " id="sys_set">
                  <h6 class="mt">System Settings</h6>
                <div class="line mt-2"></div>
                <div class="row pd-4 mt-4">
                    <div class="offset-1 col-sm-9">
                        <form>
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Default Language</label>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option lang="ar" value="arabic">English</option>
                                                    <option lang="ar" value="arabic">Arabic</option>
                                <option lang="zh" value="chinese">Chinese</option>
                                <option lang="cs" value="czech">Czech</option>
                                <option lang="da" value="danish">Danish</option>
                                <option lang="nl" value="dutch">Dutch</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Locale</label>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option lang="ar" value="arabic">French(France)</option>
                                                    <option lang="ar" value="arabic">French(Congo)</option>
                                <option lang="zh" value="chinese">French(Equatorial Guinea)</option>
                                <option lang="cs" value="czech">French(Gabon)</option>
                                <option lang="da" value="danish">French(Guodeloupe)</option>
                                <option lang="nl" value="dutch">French(Guinea)</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Time Zone <span class="text-danger">*</span> </label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="Pacific/Midway">(UTC -11:00) Pacific/Midway</option>
                                                    <option value="Pacific/Niue" selected="selected">(UTC -11:00) Pacific/Niue</option>
                                                    <option value="Pacific/Pago_Pago">(UTC -11:00) Pacific/Pago_Pago</option>
                                                    <option value="America/Adak">(UTC -10:00) America/Adak</option>
                                                    <option value="Pacific/Honolulu">(UTC -10:00) Pacific/Honolulu</option>
                                                    <option value="Pacific/Johnston">(UTC -10:00) Pacific/Johnston</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Default Currency  </label>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">Euro</option>
                                <option value="GBP">British Pound</option>
                                <option value="CAD">Canadian Dollar</option>
                                <option value="CLP">Chilean Peso</option>
                                <option value="CNY">Chinese Yuan</option>
                                <option value="CZK">Czech Koruna</option>
                                                </select>
                                          </div>
                          </div>
                          <div class="col-sm-1">
                              <button type="button" id="curency" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Add New Currency"><i class="fa fa-plus"></i></button>
                          </div>
                          <div class="col-sm-1">
                              <a href="allcurrency.php"><button type="button" id="crncy_page" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View All Currency To Action"><i class="fa fa-calendar"></i></button></a>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Default Account</label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                                    <option value="">None</option>
                                                </select>
                                          </div>
                          </div>
                          <div class="col-sm-1">
                              <button type="button" id="acount" class="btn btn-light butn" data-toggle="tooltip" data-placement="top" title="New Account"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Attendance Report  </label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">Attendance Report 1</option>
                                <option value="GBP">Attendance Report 2</option>
                                <option value="CAD">Attendance Report 3</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Project Details View </label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">Project Details View 1</option>
                                <option value="GBP">Project Details View 2</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Task details view </label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">Task details view 1</option>
                                <option value="GBP">Task details view 2</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Currency Position</label>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option lang="ar" value="arabic">$ 100</option>
                                                    <option lang="ar" value="arabic">100 $</option>
                                
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Default Tax</label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">No Task</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Tables Pagination Limit </label>
                          </div>
                          <div class="col-sm-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="50">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Date Format</label>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="%d-%m-%Y">29-12-2019</option>
                                <option value="%m-%d-%Y">12-29-2019</option>
                                <option value="%Y-%m-%d">2019-12-29</option>
                                <option value="%d-%m-%y">29-12-19</option>
                                <option value="%m-%d-%y">12-29-19</option>
                                <option value="%m.%d.%Y" selected="selected">12.29.2019</option>
                                <option value="%d.%m.%Y">29.12.2019</option>
                                <option value="%Y.%m.%d">2019.12.29</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Time Format</label>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="g:i a">7:38 pm</option>
                                <option value="g:i A">7:38 PM</option>
                                <option value="H:i" selected="selected">19:38</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Money Format</label>
                          </div>
                          <div class="col-sm-3">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="1">1,234.00</option>
                                <option value="2" selected="selected">1.234,00</option>
                                <option value="3">1234.00</option>
                                <option value="4">1234,00</option>
                                <option value="5">1'234.00</option>
                                <option value="6">1 234.00</option>
                                <option value="7">1 234,00</option>
                                <option value="8">1 234'00</option>
                                                </select>
                                          </div>
                          </div>
                          <div class="col-sm-2">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Allowed Files</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="gif|png|jpeg|jpg|pdf|doc|txt|docx|xls|zip|rar|xls|mp4|ico|xlsx|pptx">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Max File size (MB)</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="5000" >
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Google API KEY</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="AIzaSyDH0Cn1U4RGzExl3IySE9X_ZlXKpyxj2Z4">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Recaptcha site key</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            <h6>Go to <span><a href="#">https://www.google.com/recaptcha/admin</a></span> to setup Recaptcha</h6>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Recaptcha secret key</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Auto close ticket</label>
                          </div>
                          <div class="col-sm-4">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="72">  
                          </div>
                          <div class="col-sm-4">
                            <h6>Hours <span class="text-danger">Requires CRON</span></h6>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Enable Languages</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Allow Sub Tasks</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="exampleInputEmail1">Only Allowed IP can Clock IN/OUT</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class=" col-sm-4">
                            <label for="exampleInputEmail1">Allow Client Registration</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label> 
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="exampleInputEmail1">Allow Apply job from Login</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label>  
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="exampleInputEmail1">Client Default Menu <span class="text-danger">*</span></label>
                          </div>
                          <div class="col-sm-8">
                             <select class="js-example-basic-multiple w-100" name="friends[]" multiple="multiple">
                              <option value="Deepak">Deepak Nouliya</option>
                              <option value="Rahul">Rahul</option>
                              <option value="Ravish">Ravish</option>
                              <option value="Shivam">Shivam</option>
                              <option value="Shubham">Shubham</option>
                              <option value="Kaif">Kaif</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="exampleInputEmail1">Client Can Create Project</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label> 
                          </div>
                        </div>
                      </div>
                      </form>
                  </div>
                </div>
                <div class="row mt-3">
                    <div class="offset-4 col-md-3">
                     <button type="button" class="btn btn-primary">Save Changes</button>
                  </div>
                </div>
              </div>
<!----------currency-------->
          <div class="container bg-white card " id="cuurency_all" style="display:none">
      <div class="row">
        <div class="col-sm-10">
              <h6 class="mt">All Currency</h6>
      </div>
      <div class="col-sm-2">
               <button type="button"  id="back_frm" class="btn btn-success mt1 fs" data-toggle="tooltip" data-placement="top" title="Back"><i class="fas fa-arrow-left"></i>Back</button>
              <button type="button" id="curency" class="btn btn-success mt1 fs" data-toggle="tooltip" data-placement="top" title="Add New Currency"><i class="fa fa-plus"></i></button>
      </div>
    </div>
    <div class="line mt-butn"></div>
    <div class="row mt-4">
        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Code Name</th>
            <th scope="col">Symbol</th>
            <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">AUD</th>
              <td>Australian Dollar</td>
              <td>$</td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          <tr>
              <th scope="row">BAN</th>
              <td>Bangladesh</td>
              <td>BDT</td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          <tr>
              <th scope="row">BRL</th>
              <td>Brazilian Real</td>
              <td>R$</td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          </tbody>
            </table>
    </div>
  </div>
  <!----------currency-end ------->
            </div>
            <div class="tab-pane" id="messages-v">Messages Tab.</div>
            <div class="tab-pane" id="settings-v">Settings Tab.</div>
          </div>
        </div>

        <div class="clearfix"></div>

      </div>

            </div>
        </div>

    </section>
</div>
<!-- Modal -->
  <div class="modal fade" id="systemSetting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
              
      <div class="modal-content style" id="currency" style="display:none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">From Items</h5>
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
                  <label for="exampleInputEmail1">Code</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Name</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Symbol</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
      
      <div class="modal-content style" id="account" style="display: none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">New Account</h5>
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
                  <label for="exampleInputEmail1">Account Name <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Description  </label>
                </div>
                <div class="col-sm-6">
                  <textarea class="form-control" name="short_note"></textarea>
                </div>
              </div>
              </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Initial Balance <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
        
    </div>
  </div>
  
<!--currency modal----->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
              
      <div class="modal-content style" id="currency" style="display:none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">From Items</h5>
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
                  <label for="exampleInputEmail1">Code</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Name</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Symbol</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
      
      <div class="modal-content style" id="account" style="display: none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">New Account</h5>
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
                  <label for="exampleInputEmail1">Account Name <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Description  </label>
                </div>
                <div class="col-sm-6">
                  <textarea class="form-control" name="short_note"></textarea>
                </div>
              </div>
              </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Initial Balance <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
        
    </div>
  </div>


<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

  $(document).on("click","#back_frm",function(){
      $("#cuurency_all").hide();
       $("#sys_set").show();
  })
    $(document).on("click","#crncy_page",function(){
      $("#cuurency_all").show();
       $("#sys_set").hide();
  })
  $(document).ready(function(){
   
    $("#curency").click(function(){
     $("#currency").show();
     $("#account").hide();
     $('#systemSetting').modal('show');
    });
  });
</script>

<script>
  $(document).ready(function(){
   
    $("#acount").click(function(){
     $("#currency").hide();
     $("#account").show();
     $('#systemSetting').modal('show');
    });
  });
</script>


<script>
    CKEDITOR.replace('editor1');
</script>
<script type="text/javascript">
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
});
</script>