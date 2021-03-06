<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/94f2406347.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link rel="stylesheet" href="css/styles.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>{{config('app.name', 'Restaurant')}}
        </title>

    </head>
     <body style="padding-top: 70px;">
        @include('inc.navbar')

        <div class="container">
             @include('inc.messages')
             @yield('content')
        </div>
        
     </body>
</html>
