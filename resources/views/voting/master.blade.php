<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/csslanding.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('judul')</title>
</head>
<body class="container">
    <!-- Nav -->
   <nav>
       <h1>E-Voting</h1>
       <hr>
   </nav>
   <!-- End Nav -->
@yield('konten')
    <footer>
        <hr style="margin-bottom:5px;">
        <h6 class="text-center" style="color:white">Copyright &copy; 2022 OSIS Sekbid IT.</h6>
    </footer>
<script src="/js/app.js"></script>
@yield('js')
</body>
</html>