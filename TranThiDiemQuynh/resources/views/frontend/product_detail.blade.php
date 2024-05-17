@extends('layouts.site')
@section('content')
    <div class="row text-center pb-2">
        <h1>Len Sussan's Family 5</h1>
        <ul style="list-style: none; display: inline-block;"class="d-flex">
            <li class="ps-1 ">Trang chủ ></li>
            <li class="ps-1 ">Sản phẩm mới nhất ></li>
            <li class="ps-1">Len Sussan's Family 5</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-5 img-detail border mb-2">
            <img src="{{ asset('images/ss5_1.jpg') }}" alt="#" class="w-100">
        </div>
        <div class="col-md-7">
            <h3 class="font-weight-semi-bold">
                Len Sussan's Family 5
                <br>(Màu trắng, 100g)
            </h3>
            <div class="d-flex mb-3">
                <div class="text-warning mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>

                </div>
                <small class="pt-1" style="padding-left:10px;">Reviews</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">40.000</h3>
            <p class="mb-4">Mô tả</p>

            <div class="d-flex align-items-center mb-4 pt-2">
                <div class="input-group quantity mr-3" style="width:130px;">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-minus" style="font-weight: bold;  font-size: 100%;">
                            -
                        </button>
                    </div>
                    <input type="text" class="form-control text-center" value="1">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-plus" style="font-weight: bold;  font-size: 100%;">
                            +
                        </button>
                    </div>
                </div>
                <a href="#">
                    <div class="input-group-btn" style="margin:3px;">
                        <button class="btn btn-primary">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Thêm vào giỏ hàng
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <h3>Mô tả</h3>
        <div class="border border-2">
            <p>Len Susan 5 là một dòng của Susan's family, chất len tương tự susan 4
                nhưng khác nhau về bảng màu và cỡ sợi.
                Susan 5 cỡ sợi 2mm, cuộn 100gram to hơn hẳn so với susan 4<br>
                Len Móc Thú Bông Mềm Mịn Đa Dạng Màu Không Nhão Bai Xù<br>
                * Size kim <br>
                -Kim đan: ~3.75mm <br>
                -Kim móc: ~3.0mm<br>
            </p>
        </div>
    </div>
@endsection
