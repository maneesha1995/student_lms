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
  <li class="breadcrumb-item"><a href="#">Activity Basic Commands</a></li>
  <li class="breadcrumb-item active">FeedBack</li>
</ol>
  <h6 class="display-4">Sorry !! Your answer is wrong</h6><hr>
<h5> Drag and Drop the Correct Answers</h5>
<br>
    
    <p style="font-size: 22px ;"><input type="text" value="ng" style="color:#45B662"> <input type="text" value="generate" style="color:#E6040B"> testapp. <img src="wrong.png" width="50px" height="50px"> </p>
    <br>
    <br>

 
<div class="card border-light mb-3" style="max-width: 30rem;">
  
  <div class="card-body">
    <h4 class="card-title">Options : </h4>
    <table>
      <tr>
        <td ></td>
        <td width="100px"> node</td>
        <td width="100px" width="100px">new</td>
        <td width="100px">CLI</td>
        <td width="100px">ng</td>
        <td width="100px">generate</td>
      </tr>
    </table>
  </div>
  
</div>
 <div align="right">
<button type="button" class="btn btn-success" style="align-content: right">Try Again</button>
</div>   
</div> 

</div>

 

     
   
<!-- </div> -->
<!-- </div> -->
<?php
include 'includes/footer.php'
?>