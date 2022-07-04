<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="icon"
          href="https://img.lovepik.com/free-png/20210922/lovepik-chinese-feng-shui-ink-circle-png-image_401061673_wh1200.png">
    @yield('title')
</head>
<style>
    a {
        text-decoration: none;
    }

    ul li {
        list-style: none;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand mx-auto fs-4" href="/">
            <img width="40" height="40" class="d-inline-block align-top rounded-circle" alt
                 src="{{\Illuminate\Support\Facades\URL::asset('/img/laravel.png')}}"/>
            Lập trình vì đam mê
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto flex-column flex-sm-row justify-content-sm-center">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/bai-viet-hay">Bài viết hay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/ban-khoa-hoc-dey">Bán khóa học đêy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/video">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/gioi-thieu">Tác giả</a>
                </li>
            </ul>
            <ul class="navbar-nav mx-auto flex-column flex-sm-row justify-content-sm-center">
                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                             viewBox="0 0 24 24" style=" fill:#000000;">
                            <path
                                d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h7.621v-6.961h-2.343v-2.725h2.343V9.309 c0-2.324,1.421-3.591,3.495-3.591c0.699-0.002,1.397,0.034,2.092,0.105v2.43h-1.428c-1.13,0-1.35,0.534-1.35,1.322v1.735h2.7 l-0.351,2.725h-2.365V21H19c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z"></path>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                             viewBox="0 0 24 24" style=" fill:#000000;">
                            <path
                                d="M21.582,6.186c-0.23-0.86-0.908-1.538-1.768-1.768C18.254,4,12,4,12,4S5.746,4,4.186,4.418 c-0.86,0.23-1.538,0.908-1.768,1.768C2,7.746,2,12,2,12s0,4.254,0.418,5.814c0.23,0.86,0.908,1.538,1.768,1.768 C5.746,20,12,20,12,20s6.254,0,7.814-0.418c0.861-0.23,1.538-0.908,1.768-1.768C22,16.254,22,12,22,12S22,7.746,21.582,6.186z M10,15.464V8.536L16,12L10,15.464z"></path>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                             viewBox="0 0 24 24" style=" fill:#000000;">
                            <path
                                d="M 6 3 C 4.3550302 3 3 4.3550302 3 6 L 3 18 C 3 19.64497 4.3550302 21 6 21 L 18 21 C 19.64497 21 21 19.64497 21 18 L 21 6 C 21 4.3550302 19.64497 3 18 3 L 6 3 z M 12 7 L 14 7 C 14 8.005 15.471 9 16 9 L 16 11 C 15.395 11 14.668 10.734156 14 10.285156 L 14 14 C 14 15.654 12.654 17 11 17 C 9.346 17 8 15.654 8 14 C 8 12.346 9.346 11 11 11 L 11 13 C 10.448 13 10 13.449 10 14 C 10 14.551 10.448 15 11 15 C 11.552 15 12 14.551 12 14 L 12 7 z"></path>
                        </svg>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


@yield('detail')

<footer class="bg-light border-top py-4">
    <div class="container mx-auto">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <p class="h5">Theo dõi blog</p>
                <ul class="px-0">
                    <li><a href="/" class="text-secondary">Trang chủ</a></li>
                    <li><a href="#" class="text-secondary">Chúng tôi trên facebook</a></li>
                    <li><a href="#" class="text-secondary">Chúng tôi trên youtube</a></li>
                    <li><a href="#" class="text-secondary">Yêu cầu viết bài</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <p class="h5">Link hữu ích</p>
                <ul class="px-0">
                    <li><a href="#" class="text-secondary">Giới thiệu blog</a></li>
                    <li><a href="#" class="text-secondary">Bài viết hay</a></li>
                    <li><a href="#" class="text-secondary">Điều khoản</a></li>
                    <li><a href="#" class="text-secondary">Website Tác giả</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <p class="h5">Blog bạn bè</p>
                <ul class="px-0">
                    <li><a href="#" class="text-secondary">User 1</a></li>
                    <li><a href="#" class="text-secondary">User 2</a></li>
                    <li><a href="#" class="text-secondary">User 3</a></li>
                    <li><a href="#" class="text-secondary">User 4</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <p class="h5">Kết nối</p>
                <ul class="px-0">
                    <li><a href="#" class="text-secondary">Website tác giả</a></li>
                    <li><a href="#" class="text-secondary">Tôi trên Facebook</a></li>
                    <li><a href="#" class="text-secondary">Tôi trên Instagram</a></li>
                    <li><a href="#" class="text-secondary">Tôi trên Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
