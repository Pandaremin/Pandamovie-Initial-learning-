<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pandamovie</title>
    <script src="https://kit.fontawesome.com/784194f36f.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/adminstyle.css')}}">
</head>
<body>
  
<div style="margin:0 5%" class="d-flex flex-column min-vh-100">
    @yield('content')
</div>
<footer class="text-center mt-4 mb-4  text-muted" >
    <img src="https://i.pinimg.com/originals/b2/ce/98/b2ce98392df5c686796e9233d77175fc.gif" width="40px" height="30px" alt=""> &copy; 2021 Copyright: Pandamovie</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>