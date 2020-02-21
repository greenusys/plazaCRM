<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<style>
  .image
  { 
      background: url("<?=base_url('assets/img/extra/image3.jpg')?>") no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
  }
  .top-margin
  {
      margin-top:200px;
  }
  .style
  {
    color:#5265f5;

  }
  .font-style
  {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 65px;
      color: #140f58;
  }
  .butn
  {
     background-color:#6777ef;
     color:white;
     font-size:20px;

  }
   .instal-butn
  {
     background-color: #6777ef;
    color: white;
    font-size: 25px;
    height: 65px;

  }
</style>
<body class="image">
    <div class="container">
      <div class="row top-margin">
        <div class="card shadow p-5 bg-white w-50 m-auto" id="card1">
            <div class="row">
              <h1 class="font-weight-bold shadow text-center p-2 font-style w-100">PLAZACRM</h1>
            </div>
            <div class="row mt-5">
              <button class="butn  m-auto font-weight-bold shadow" id="next1">NEXT &nbsp; <i class="fa fa-arrow-right"></i></button>
            </div>
        </div>

        <div class="card shadow p-5 bg-white w-50 m-auto" id="card2" style="display:none">
              <form>
                   <div class="row card shadow p-3">
                    <div class="col-md-12 straight">
                      <div class="form-group">
                        <div class="row ">
                          <div class=" col-sm-3">
                            <label for="exampleInputEmail1" class=" label-style ml-3">Time Zone</label>
                          </div>
                          <div class="col-sm-8">
                             <select class=" form-control" name="department">
                                <option value="minor">Indian/Antananarivo</option>
                                <option value="major">Indian/Chagos</option>
                                <option value="show"> America/Anchorage</option>
                                <option value="minor">America/Anguilla</option>
                                <option value="major">Asia/Amman</option>
                                <option value="show"> Asia/Ashgabat</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class=" col-sm-3">
                            <label for="exampleInputEmail1" class=" label-style ml-4">Currency</label>
                          </div>
                          <div class="col-sm-8">
                             <select class=" form-control" name="department">
                                <option value="minor">  Indian rupee</option>
                                <option value="major">  Euro</option>
                                <option value="show"> Pound</option>
                                <option value="minor">Euro</option>
                                <option value="major"> Yen</option>
                                <option value="show"> Franc</option>
                              </select>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
              </form>
            
            <div class="row mt-5">
              <button class="butn  m-auto font-weight-bold shadow" id="next2">NEXT &nbsp; <i class="fa fa-arrow-right"></i></button>
            </div>
        </div>

        <div class="card shadow p-5 bg-white w-50 m-auto" id="card3" style="display:none">
             <form>
                   <div class="row card shadow p-3">
                    <div class="col-md-12 straight">
                      <div class="form-group">
                        <div class="row ">
                          <div class=" col-sm-3">
                            <label for="exampleInputEmail1" class=" label-style ml-3">Logo</label>
                          </div>
                          <div class="col-sm-8">
                               <img id="blah" src="#" alt="your image" class="border">
                               <input type='file' onchange="readURL(this);" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class=" col-sm-3">
                            <label for="exampleInputEmail1" class=" label-style ml-4">Language</label>
                          </div>
                          <div class="col-sm-8">
                             <select class=" form-control" name="department">
                                <option value="major"> English</option>
                              </select>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
              </form>
            <div class="row mt-5">
              <button class="butn  m-auto font-weight-bold shadow" id="next3">NEXT &nbsp; <i class="fa fa-arrow-right"></i></button>
            </div>
        </div>

        <div class="card shadow p-5 bg-white w-50 m-auto" id="card4" style="display:none">
            <div class="row">
              <a class="instal-butn  m-auto font-weight-bold shadow w-50 border-0" href="<?=base_url('Login')?>">START &nbsp; <i class="fa fa-download"></i></a>
            </div>
        </div>
      </div>
    </div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    $(document).ready(function(){
      $("#next1").click(function(){
      $("#card2").show();
      $("#card1").hide();
      $("#card3").hide();
      $("#card4").hide();
    });
  });
</script>

<script>
    $(document).ready(function(){
      $("#next2").click(function(){
      $("#card2").hide();
      $("#card1").hide();
      $("#card3").show();
      $("#card4").hide();
    });
  });
</script>

<script>
    $(document).ready(function(){
      $("#next3").click(function(){
      $("#card2").hide();
      $("#card1").hide();
      $("#card3").hide();
      $("#card4").show();
    });
  });
</script>


</body>
</html>

