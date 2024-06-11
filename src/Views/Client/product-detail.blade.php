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

    <div class="container-fluid">
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
            <div class="col-md-8">
                <article>
                    <h1>{{ $product['name'] }}</h1>
                    <div class="row d-flex justify-content-around">
                        <div class="col-md-6">
                            <p class="text-muted">{{ $product['created_at'] }} | {{ $product['updated_at'] }}</p>
                        </div>

                        <div class="col-md-6 d-flex justify-content-end">
                           
                        </div>
                    </div>
                    <img src="{{ asset($product['img_thumbnail']) }}" class="img-fluid mb-4"
                        alt="{{ $product['title'] }}">

                    <div>
                        <b>{!! $product['overview'] !!}</b>
                    </div>
                    <div>
                        {!! $product['content'] !!}
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Tin tức liên quan
                    </div>
                    <ul class="list-group list-group-flush">
                        @if (!empty($products) && is_array($products))
                            @foreach ($products as $product)
                                <li class="list-group-item">
                                    <a href="{{ url('product/' . $product['name']) }}">{{ $product['title'] }}</a>
                                </li>
                            @endforeach
                        @else
                            <li class="list-group-item">Không có tin tức liên quan</li>
                        @endif
                    </ul>
                </div>
            </div>

            <footer class="bg-white border-top p-3 mt-4">
                <div class="container d-flex  justify-content-center ">
                    <span>Copyright 2024 by phatdph32717</span>
                </div>
            </footer>
        </div>
</body>

</html>
