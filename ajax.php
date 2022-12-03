<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
  
<div class="container">
        <h1 class="text-primary text-uppercase text-center"> Ajax crud operation </h1>

<div class="d-flex justify-content-end ">
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">show </button>
</div><br>
<h2 class="text-danger">ALL MODEL</h2>
<div id="records_contant">
</div>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Ajax crud operation </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

          <div class="form-group">
          <label>First name :</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control" placeholder= "please enter your first name ">
        </div>

        <div class="form-group">
          <label>Last name :</label>
            <input type="text" name="LastName" id="LastName" class="form-control" placeholder= "please enter your Last name ">
        </div>

        <div class="form-group">
          <label>Email id:</label>
            <input type="email" name="" id="Email" class="form-control" placeholder= "please enter your email id  ">
        </div>

        <div class="form-group">
          <label>Mobile :</label>
            <input type="number" name="" id="Mobile" class="form-control" placeholder= "please enter your mobile no ">
        </div>
        </div>

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal"onclick="addRecord()">save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
    function addRecord(){
      var firstname = $('#FirstName').val();
      var lastname = $('#LastName').val();
      var email = $('#Email').val();
      var mobile = $('#Mobile').val();

      $.ajax({
        url:"backend.php",
        type:'post',
        data:{ Firstname :firstname,
               Lastname : lastname,
               Email :    email,
               Mobile :   mobile
        },

        success:function(data,status){
            readRecords();
        }

      }); 

}
</script>
</body>
</html>
