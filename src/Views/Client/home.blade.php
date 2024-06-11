<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <hr>
        <nav class="navbar navbar-expand-lg body-tertiary   ">
            <div class="container">
                <a class="navbar-brand " href=""> <img src="img/logo.webp" alt="" width="140"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"
                                style=" font-family: Georgia, 'Times New Roman', Times, serif; font-size: large;">Trang
                                chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                style=" font-family: Georgia, 'Times New Roman', Times, serif; font-size: large;">Giới
                                thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                style=" font-family: Georgia, 'Times New Roman', Times, serif; font-size: large;">
                                Tin tức</a>
                        </li>
                    </ul>
                    <!-- dang nhap dang ký -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            @if (!is_logged())
                                <a class="btn btn-primary" href="{{ url('auth/login') }}">Login</a>
                            @endif

                            @if (is_logged())
                                <a class="btn btn-danger" href="{{ url('auth/logout') }}">Logout</a>
                            @endif
                        </li>

                        <div class="navbar-nav m-md-2 ">
                            <a href="#!bangdieukhien">
                                <li class="navbar-item ">
                                    <i class="fa-solid fa-right-to-bracket " style="color:  #313135;"></i>
                                </li>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
        <div class="row">
            @foreach ($products as $product)
                <div class=" mb-3 col-md-6">
                    <div class="row">
                        <h5 class="card-title "><a class="text-dark"
                                href="{{ url('/products/' . $product['id']) }}">{{ $product['name'] }}</a>
                        </h5>
                        <div class="col-12 col-md-3 mt-3">
                            <img class="card-img-top img-fluid" src="{{ asset($product['img_thumbnail']) }}"
                                alt="{{ $product['title'] }}">
                        </div>
                        <div class="  col-12 col-md-8 mt-2">
                            @if (array_key_exists('overview', $product))
                                <p>{!! $product['overview'] !!}</p>
                            @else
                                <span>Không có mô tả sản phẩm</span>
                            @endif
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
        <footer class="bg-white border-top p-3 mt-4">
            <div class="container d-flex  justify-content-center ">
                <span>Copyright 2024 by phatdph32717</span>
            </div>
        </footer>
    </div>

</body>

</html>
