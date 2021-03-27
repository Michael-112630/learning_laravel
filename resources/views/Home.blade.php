<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url("/image/bg.jpg");
                background-repeat:no-repeat;
                background-size: 100% 80%;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: absolute;
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
            .About1{
    color:black;
    margin-left:135px;
    margin-right:700px;
    padding:7px 7px 7px 7px;
    text-indent:20px;}
    .About2{
    color:black;
    margin-left:135px;
    margin-right:700px;
    padding:34px 7px 7px 7px;
    text-indent:20px;}
    .img{
        margin-left:100px;
        padding-top:120px;
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
                  Welcome to this page!
            </div></div>
            <div class="img"></div>
<div class="About1">
<?php echo"Hello welcome to my site! so what you about to witness in this site are my Educational achivements and activities in class. I'm Michael John Bernardino. Currently I'm studying 
BS Information and Technology at Pangasinan State University 
Urdaneta campus. I'm good at playing game in computer,moblie 
and sports,watching anime,movies amd series, I also like to read 
manga and light novels and I love to draw though im not that good 
enough."?><br></div>
<div class="About2">
<?php echo"The only things that you can view are here Educational,Home and activities. Im not good at design but i think i can learn it so sorry for my design in this page. So once again welcome to my website and thank for visiting it."?><br></div>
    
</div>
<div class="img">
     <img src="/image/img1.jpg" width="1140px" height="520px"> 
     </div>
    </body>
</html>
