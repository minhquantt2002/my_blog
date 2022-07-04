<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon"
          href="https://thumbs.dreamstime.com/b/three-persons-admin-icon-outline-style-vector-web-design-isolated-white-background-179719844.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand mx-auto fs-4" href="/admin">
            <img width="30" height="30" class="d-inline-block align-top rounded" alt
                 src="https://thumbs.dreamstime.com/b/three-persons-admin-icon-outline-style-vector-web-design-isolated-white-background-179719844.jpg"/>
            ADMIN
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto flex-column flex-sm-row justify-content-sm-center fs-6">
                <li class="nav-link active">Thống kê</li>
                <li class="nav-link active mx-5">Thống kê</li>
                <li class="nav-link active">Thống kê</li>
                <li class="nav-link active mx-5">Thống kê</li>
                <li class="nav-link active">Thống kê</li>
            </ul>
        </div>
        <div class="navbar-brand mx-auto fs-5">
            <img src="{{URL::asset('/img/laravel.png')}}" alt width="30" height="30" class="d-inline-block align-top rounded-circle">
            Logout
        </div>
    </div>
</nav>
</body>
</html>
