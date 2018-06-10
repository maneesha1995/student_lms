<html>
<head>
    <title>
        Web Development
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Web Developement</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#"></a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <!-- <li><a href="">Rent Out Items</a></li>
                <li><a href="">Phone Book</a></li> -->
                <li class="dropdown">
                  
                </li>
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" role="button" aria-haspopup="true" aria-expanded="false">Add New <span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">-->
<!--                        <li><a >Category</a></li>-->
<!--                        <li><a>Item Type</a></li>-->
<!---->
<!--                    </ul>-->
<!--                </li>-->
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.google.com/gmail/about/#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  email</a></li>
<!--                <li><a href="--><?php //echo base_url('index.php/Welcome/login')?><!--">Login</a></li>-->
                <li><a href="">User Register</a></li>
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <ul class="dropdown-menu">
                        <li><a href=""><span class="glyphicon glyphicon-off" aria-hidden="true"> </span>   Logout</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span>   Profile</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php
include 'footer.php'
?>