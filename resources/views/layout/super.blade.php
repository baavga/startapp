<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First app</title>
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href={{asset( 'css/app.css')}}>

</head>

<body>
    @include('inc.navbar')
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
                @include('inc.leftmenu')
            </div>
            <div class="col l9 s12">
                   @yield('content')
                </div>
        </div>

    </div>
</body>
<footer>
    <script src={{asset( "js/app.js")}}></script>
    <script>
        $(".button-collapse").sideNav();
    </script>
</footer>

</html>