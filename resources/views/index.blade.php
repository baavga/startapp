<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First app</title> 
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href={{asset('css/app.css')}} >
     
</head>
<body>
    <div class="" id="app">
            <navbar></navbar>
            <router-view></router-view>
    </div>    
</body>
<footer>    
     
    <script src={{asset("js/app.js")}}></script> 
  <script> 
        $(".button-collapse").sideNav();  
</script>
</footer>
</html>