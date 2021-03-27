<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>School Activities</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                margin-top:0px;
                margin-left:40px;
            }

            .title {
                font-size: 60px;
                
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
        </style>
    </head>
    <body>
        <div class= "position-ref full-height">

         <div class="top-right links">        
            <a href="/Home">Home</a>
            <a href="/Educational">Educational</a>
            <a href="/Act">Activities</a>
            </div>
            
            <div class="content">
                <div class="title m-b-md">
                   Activity Page
                
            </div>
            </div>
        </div>
    </body>
</html>
