<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title></title>
    <style>
        /* #GENERAL PAGE                  */
        body{
            background-color: grey;
        }
        /* #NAV BAR                       */

        /* #PRODUCTS PAGE                 */
        .item{
            background-color:white;
            width:100px;
            height:100px;
        }
        .item li{
            list-style: none;
        }
    </style>
 </head>
<body>
    @include('templates.nav')

    <div class="container">
        @yield('content')
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
