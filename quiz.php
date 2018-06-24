<html>
<head>
    <style>
        div.scroll{
            width: 1000px;
            height: 500px;
            overflow: scroll;

        }
        /*.breacrumb {
          margin-top: 100px;
        }*/
        table tr td {
          font-size: 22px ;
          font-style: bold;
          color: #5D6D7E  ;
        }

    </style>

     <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>
<body>
<?php
include 'includes/header.php'
?>

<?php
// include 'includes/sidebar.php'
?>
<!-- <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> -->
<div class="jumbotron" style="margin-left: 230px">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="#">AngularJS</a></li>
  <li class="breadcrumb-item"><a href="#">Basic Commands</a></li>
  <li class="breadcrumb-item"><a href="#">Basic Commands</a></li>
  <li class="breadcrumb-item active">Quiz</li>
</ol>
  <h6 class="display-4">Quiz</h6><hr>
<h5> 1) Select the correct command to create a component from the following options given below.</h5>
<br>    
<div class="radio" style="font-size: 22px">
<input type="radio" name="gender" value="male"> npm generate component commands<br>
  <input type="radio" name="gender" value="female"> ng new service commands<br>
  <input type="radio" name="gender" value="other"> ng generate component commands   
    <br>
    <input type="radio" name="gender" value="female"> ng new component commands<br>
    <br>
</div>
 

 <div align="right">
<button type="button" class="btn btn-success" style="align-content: right">Check Answer</button>
</div>   
</div> 

</div>

 

     
   
<!-- </div> -->
<!-- </div> -->
<?php
include 'includes/footer.php'
?>