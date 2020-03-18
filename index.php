<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Age checker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

    <script>
     
    </script>
</head>

<body>

<div class="col-md-12 container-fluid">

    <div class=" d-flex justify-content-center">
    
        <div class="content vertical-center" style="max-width: 700px">
            <div class="card-body ">

            <form action="./submit.php">
               
                <span class="md-form">
                    <span class=' text-muted'>Full name</span>
                    <input type="text" name="fullname" class="form-control" required>
                </span>

                <div class='md-form'>
                    <span class='text-muted'>Date of birth</span>
                    <span class="mt-3 md-form form-control" id='aap'>
                        <input type="date" id="aap" name="date"  required>
                    </span>
                </div>
                <div class=" d-flex justify-content-center">
                    <button type="submit" class="btn btn-secondary ">
                        Submit
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
   
            </form> 
            </div>

        </div>

       
    </div>

</div>

</body>

<style>
 .form-control {
    border-width:6px;
    border:none;
 }
 .content {
    border: 1px solid lightgrey;
    border-radius: 5px;
 }
 .container-fluid {
    height: 100vh;
    position: relative;
}

.vertical-center {
    margin: 0;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}
</style>
</html>