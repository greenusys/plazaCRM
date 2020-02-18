<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <style>
   .line
   {
     border: 1px solid #6777ef;
   }
   .label-style
   {

     font-size:14px;
     font-weight:bold;
     color: #3c3e40!important;
   
   }
   .bg-color
   {
      background-color: #6777ef;
      color:white;
   }
 </style>
</head>
<body class="bg-light">
  <div class="container bg-white shadow mt-5 p-3">
    <h6 class="font-weight-bold">Monthly And Weekly Report</h6>
    <div class="line mt-3"></div>
      <div class="row mt-4">
        <div class="col-md-12">
          <form>
            <div class="form-group">
              <div class="row">
                <div class="offset-2 col-sm-2">
                  <label for="exampleInputEmail1" class="label-style">Choose File <span class="text-danger">* </span></label>
                </div>
                <div class="col-sm-8">
                  <input type="file" id="myfile" name="myfile">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-2 col-sm-2">
                  <label for="exampleInputEmail1" class="label-style">Task Status <span class="text-danger">* </span></label>
                </div>
                <div class="col-sm-3">
                  <select class=" form-control" name="department">
                    <option value="daily">Daily Report</option>
                    <option value="monthly">Monthly Report</option>
                    <option value="weekly">Weekly Report</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-2 col-sm-2">
                  <label for="exampleInputEmail1" class="label-style">Select To <span class="text-danger">* </span></label>
                </div>
                <div class="col-sm-3">
                  <select class=" form-control" name="department">
                    <option value="name1">Rahul Kumar</option>
                    <option value="name2">Deepak nauliya</option>
                    <option value="name3">shivam Saini</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="offset-4 col-sm-4">
                <button type="submit" class="btn bg-color m-auto text-center w-50">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  
</body>
</html>