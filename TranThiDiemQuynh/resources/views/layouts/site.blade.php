<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiệm Len Nhà Chise</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>

    @yield('header')
</head>

<body>
    <header class="section_header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="col-md-3">
                <a href="index.html">
                    <img src="{{ asset('images/Chise len (1).png') }}" alt="">
                </a>
            </div>
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-3 py-3">
                <ul class="nav justify-content-end">
                    <li class="nav-item px2">
                        <i class="far fa-user"></i>
                    </li>
                    <li class="nav-item px2">
                        <i class="fas fa-shopping-cart"></i>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container py-4">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg p-0 m-0 ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active " aria-current="page" href="#">Trang chủ</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Workshop
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item " href="#">Workshop trang trí băng đô</a></li>
                                        <li><a class="dropdown-item " href="#">Workshop móc len hoa</a></li>
                                        <li><a class="dropdown-item " href="#">Workshop móc len thú</a></li>
                                        <li><a class="dropdown-item " href="#">Workshop móc len khăn quàng cổ</a>
                                        </li>
                                        <li><a class="dropdown-item " href="#">Workshop móc len túi</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Kiến thức thủ công
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item " href="#">Các mũi móc len cơ bản</a></li>
                                        <li><a class="dropdown-item " href="#">Hướng dẫn đọc các kí hiệu char</a>
                                        </li>
                                        <li><a class="dropdown-item " href="#">Hướng dẫn ráp thú</a></li>
                                        <li><a class="dropdown-item " href="#">Cách phân biệt mặt trái, mặt
                                                phải</a></li>
                                        <li><a class="dropdown-item " href="#">Các lỗi thường gặp</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  active" href="#">Blog - Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  active" href="#">Tuyển dụng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  active" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12 banner">
                    <img src="{{ asset('images/upgrade yourself.jpg') }}" />
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="section_footer bg-black">
        <div class="row text-white pt-2">
            <div class="col-md-4 ms-2">
                <h4>VỀ CHÚNG TÔI</h4>
                <p>
                    Trang chủ <br>
                    Workshop <br>
                    Kiến thức thủ công <br>
                    Blog - Tin tức <br>
                    Tuyển dụng <br>
                    Liên hệ <br>
                </p>
            </div>
            <div class="col">
                <h4>HỖ TRỢ KHÁCH HÀNG</h4>
                <p>
                    Tìm kiếm <br>
                    Đăng nhập <br>
                    Đăng ký <br>
                    Giỏ hàng <br>
                </p>
            </div>
            <div class="col">
                <h4>CHÍNH SÁCH MUA HÀNG </h4>
                <p>
                    Chính sách bảo mật <br>
                    Chính sách vận chuyển <br>
                    Chính sách đổi trả <br>
                    Quy định sử dụng <br>
                </p>
            </div>
            <div class="col-md-3">
                <h4>LIÊN HỆ VỚI CHÚNG TÔI</h4>
                <p>
                    Địa chỉ: 123, số 10, ngõ 12, Phước Long B, TP Thủ Đức, TP.HCM <br>
                    Điện thoại: 0123456789 <br>
                    Mail: tiemlennhachise@gmail.com <br>
                </p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/layoutsite.js') }}"></script>

    @yield('footer')
</body>

</html>
