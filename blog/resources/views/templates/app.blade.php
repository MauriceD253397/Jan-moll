<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
    <style>
        /* #GENERAL PAGE                  */
        body{
            background-color: lightgrey;
        }
        /* #NAV BAR                       */

        /* #PRODUCTS PAGE                 */
        .item{

        }
        .ol{
            padding-left: 0px;
        }
        .item li{
            list-style: none;
        }
        .item :hover{
            opacity: 0.3;
        }
        .form-control{
            margin-bottom:10px;
        }
    </style>
 </head>
<body>
    @include('templates.nav')

    <div class="container">
        @yield('content')
    </div>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
