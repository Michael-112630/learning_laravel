<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Educational Background</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url("/image/img3.jpg");
                background-repeat:no-repeat;
                background-size: 110% 110%;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
                color: white;
            }

            .links > a {
                text-decoration:none;
            	text-align:center;
            	width:120px;
            	padding:5px;
            	font-size:20px;
            	color:black;
            }
            .links > a:hover {
                background-color:black;
            	font-size:20px;
            	color:white;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
    .elem{
        color:white;
        margin-left:135px;
    }
    .About1{
    color:white;
    margin-top:28px;
    margin-left:255px;
    padding:7px 7px 7px 7px;
    text-indent:20px;
    position:absolute;}
    .About2{
    color:white;
    margin-top:21px;
    margin-left:375px;
    padding:34px 7px 7px 7px;
    text-indent:20px;
}

        </style>
    </head>
    <body>
    
        <div class="position-ref full-height">

         <div class="top-right links">        
         <a href="/Home">Home</a>
         <a href="/Educational">Educational</a>
            <a href="/Act">Activities</a>
            </div>
            <div class="content">
                <div class="title m-b-md">
                   Educational Background
            </div>
            </div>
<div class="elem"><h2>Elementary:</h2></div>
<div class="About1"> 
<?php echo"2006-2012"?><br></div>
<div class="About2">
<?php echo"ST.Francis Urdaneta Inc."?><br></div>
<div class="elem"><h2>Junior Highschool:</h2></div>

<div class="About1"> 
<?php echo"2012-2016"?><br></div>
<div class="About2">
<?php echo"Divine Word College of Urdaneta"?><br></div>

<div class="elem"><h2>Senior Highschool:</h2></div>
<div class="About1"> 
<?php echo"2016-2018"?><br></div>
<div class="About2">
<?php echo"University of Pangasinan"?><br></div>

<div class="elem"><h2>Tertiary:</h2></div>
<div class="About1"> 
<?php echo"2018-Present"?><br></div>
<div class="About2">
<?php echo"Pangasinan State University"?><br></div>
     
<div class="elem"><h2>Experience:</h2></div>
<div class="About1"> 
<?php echo"On the Job Training"?><br></div>

    </body>
</html>
