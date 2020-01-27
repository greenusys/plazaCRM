<Style>
  .back_{
    background: #292525;
    color: white;
  }
</Style>
          <div class="row mt-4" >
            <div class="col-md-12">
              <div style="float:right">
                  <span class="bg-danger text-white p-1"><i class="far fa-envelope"></i></span>
                  <span class="bg-info text-white p-1" id="printMe"><i class="far fa-copy"></i></span>
              </div>
              <div id="outprint">
                <div style="padding:15px; border-bottom:1px solid gray">
                    <p style="margin: 0px">Tester</p>
                </div>
                <div class="">
                  <div class="" style="margin: 0 auto">
                      <h4 style="text-align: center;margin-bottom: 0px;margin-top:5px" >Payslip</h4>
                      <h4 style="text-align: center">Salary Month : January 2020</h4>
                  </div>  
                  <div class="">
                   <table class="table" style="width: 100%">
                      <tr>
                        <td><strong>Employment ID :</strong>1234</td>
                        <td><strong>Name :</strong>Ravish</td>
                        <td><strong>Payslip No :</strong>1234</td>
                      </tr>
                      <tr>
                        <td><strong>Mobile :</strong>1234</td>
                        <td><strong>Email :</strong>Ravish</td>
                        <td><strong>Address :</strong>1234</td>
                      </tr>
                      <tr>
                        <td><strong>Departments  :</strong>1234</td>
                        <td><strong>Designation  :</strong>Ravish</td>
                        <td><strong>Joining Date :</strong>1234</td>
                      </tr>
                   </table>
                </div>
              </div>

              <div class="d-flex" style="display: flex;">
                <div class="" style="width: 55%;">
                  <h4>Earnings</h4>
                  <table class="table er_table" border="1" cellspacing="0" cellpadding="6" style="width: 100%">
                        <tr style=" ">
                          <td><strong>Type of Pay</strong></td>
                          <td><strong>Amount</strong></td>
                        </tr>
                         <tr>
                          <td><strong>Salary Grades : </strong></td>
                          <td>grade B</td>
                        </tr>
                        <tr>
                        <td><strong>Basic Salary : </strong></td>
                          <td>grade B</td>
                        </tr>
                        <tr>
                        <td><strong>Overtime Salary ( Per Hour) : </strong></td>
                          <td>grade B</td>
                        </tr>
                        <tr>
                        <td><strong>Overtime Hour :  </strong></td>
                          <td>grade B</td>
                        </tr>
                        <tr>
                        <td><strong>Overtime Amount :  </strong></td>
                          <td>grade B</td>
                        </tr>
                        <tr>
                        <td><strong>House Rent Allowance :</strong></td>
                          <td>grade B</td>
                        </tr>
                        <tr>
                        <td><strong>Medical Allowance : </strong></td>
                          <td>grade B</td>
                        </tr>
                      </table>
                  </div>
                  <div class="" style="margin-left: 15px ; width: 42%">
                      <h4>Deductions</h4>
                  <table class="table er_table" border="1" cellspacing="0" cellpadding="6" style="width: 100%">
                        <tr style=" ">
                          <td><strong>Type of Pay</strong></td>
                          <td><strong>Amount</strong></td>
                        </tr>
                        <tr>
                          <td><strong>Provident Fund :</strong></td>
                          <td>10000</td>
                        </tr>
                       <tr>
                          <td><strong>Tax Deduction :</strong></td>
                          <td>10000</td>
                        </tr>
                        
                      </table>
                    
                            <h4>Total Details</h4>
                  <table class="table er_table"  cellspacing="0" cellpadding="4" style="width: 100%">
                        <tr >
                          <td><strong>Gross Salary : </strong></td>
                          <td>â‚¬ 25.200,00</td>
                        </tr>
                        <tr>
                          <td><strong>Total Deduction : </strong></td>
                          <td> â‚¬ 200,00</td>
                        </tr>
                       <tr>
                          <td><strong>Net Salary :</strong></td>
                          <td>  â‚¬ 25.000,00</td>
                        </tr>
                        <tr >
                          <td><strong>Paid Amount : </strong></td>
                          <td> <strong> â‚¬ 25.000,00</strong></td>
                        </tr>
                        
                      </table>
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
    $(document).ready(function(){

      function printData()
{
   var divToPrint=document.getElementById("outprint");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
      $(document).on("click","#printMe",function(){

      printData();
      })
    })
  </script>