<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('public/layout/frontend') }}/">
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ asset('/') }}">LOGO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown txtMenu bd-bottom-product">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Sản Phẩm <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach ($danhmuc as $dm)
                                {{-- expr --}}
                                <li><a href="{{ asset('danhmuc/'.$dm->id_danhmuc.'/'.$dm->slug_danhmuc.'.html') }}">
                                        <span class="glyphicon glyphicon-triangle-right "></span> {{ $dm->ten_danhmuc }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ asset('/') }}">Giới Thiệu</a></li>
                    <li><a href="{{ asset('/') }}">Liên hệ</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" method="get" action="{{ asset('search/') }}" role="search"
                          style="margin-right: 200px">
                        <div class="form-group">
                            <input type="text" class="form-control" name="result" placeholder="Search">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </form>
                    <li class="gio-hang"><a href="{{ asset('giohang/show') }}">
                            <span class="glyphicon glyphicon-shopping-cart"></span><b> Giỏ Hàng({{ Cart::count() }})</b>
                        </a></li>
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ asset('logout') }}">
                                        Đăng Xuất</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ asset('login')}}"><strong>Đăng nhập</strong></a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="{{ asset('danhmuc/7/oppo.html') }}">
                                <img src="images/hih/banner1.png" alt="..." width="100%"></a>
                        </div>
                        <div class="item">
                            <a href="{{ asset('detail/8/samsung-galaxy-a9.html') }}">
                                <img src="images/hih/banner2.png" alt="..." width="100%"></a>
                        </div>
                        <div class="item">
                            <a href="{{ asset('detail/1/huawei-p30.html') }}">
                                <img src="images/hih/banner3.png" alt="..." width="100%"></a>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button"
                       data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button"
                       data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: -15px">
                <a href="{{ asset('detail/29/samsung-galaxy-note-8.html') }}">
                    <img alt="" src="images/ban1.png" width="289px"></a>
                <a href={{ asset("detail/3/iphone-xs-max-64g.html") }}>
                    <img alt="" src="images/ban2.png" width="289px">
                </a>
                <a href="{{ asset('detail/29/samsung-galaxy-note-8.html') }}">
                    <img alt="" src="images/ban1.png" width="289px"></a>
                <a href={{ asset("detail/3/iphone-xs-max-64g.html") }}>
                    <img alt="" src="images/ban2.png" width="289px">
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="images/free-shipping.png" alt="" width="100%">
            </div>
            <div class="col-md-4">
                <img src="images/guaranteed.png" alt="" width="100%">
            </div>
            <div class="col-md-4">
                <img src="images/deal.png" alt="" width="100%" s>
            </div>
        </div>
    </div>
</header>

<section class="content container">
    <div class="row">
        <div class="col-xs-12 col-md-3 ">
            <ul class="nav nav-pills nav-stacked ">
                <h3>
                    <li class="list-group-item list-group-item-info center-block ">Danh Mục Sản Phẩm</li>
                </h3>

                @foreach ($danhmuc as $dm)
                    {{-- expr --}}
                    <li><a href="{{ asset('danhmuc/'.$dm->id_danhmuc.'/'.$dm->slug_danhmuc.'.html') }}">
                            <span class="glyphicon glyphicon-triangle-right "></span>{{ $dm->ten_danhmuc }}
                        </a></li>
                @endforeach
            </ul>

            <div class="panel">
                <div class="panel-heading list-group-item list-group-item-info ">
                    <h3>Hỗ Trợ Trực tuyến</h3>
                </div>
                <div class="panel-body">
                    <b>Mr - Tuan</b><br><br>
                    0962 001 774
                </div>
            </div>
        </div>

        @yield('main')
    </div> <!-- /.row -->
    <hr>

</section> <!-- /.main -->

<footer style="margin-top: 30px; background-color: #1C1C1C; color: white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-ms-6 col-md-4">
                <h3><b>Hỗ trợ khách hàng</b></h3><br>
                <p>
                    Hướng dẫn đặt hàng trực tuyến <br><br>
                    FAQ - Câu hỏi thường gặp <br><br>
                    Chính sách bảo hành
                </p>
            </div>
            <div class="col-xs-12 col-ms-6 col-md-4">
                <h3><b>Địa Chỉ Liên Hệ</b></h3><br>
                <p>
                    Hòa Quý, Ngũ Hành Sơn, Đà Nẵng <br><br>
                    Làm việc kể cả Thứ 7 - Chủ Nhật <br> <br>
                    Hotline: 0962 001 774
                </p>
            </div>

            <div class="col-xs-12 col-ms-6 col-md-4 pad-img">
                <h3><b>Liên Hệ</b></h3><br>
                <div class="col-xs-6 col-md-4">
                    <a href="https://www.facebook.com/tuand4" target="_blank"><img src="images/f.jpg"></a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="https://www.facebook.com/tuand4" target="_blank"><img src="images/i.jpg"></a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="https://www.facebook.com/tuand4" target="_blank"><img src="images/r.jpg"></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px; font-size: 30px;">
            <div class="center-block text-center">
                <p><span class="text-danger"><b>Copyright © 2019</b></span></p>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
