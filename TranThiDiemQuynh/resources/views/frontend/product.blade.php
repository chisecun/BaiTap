@extends('layouts.site')
@section('content')
    <div class="container">
        <div class="content" style="display: block;">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="container d-flex">
                        <div id="filter" class="col-md-2">
                            <div class="cap">Các loại len</div>
                            <div class="ct">
                                <label><input type="checkbox" class="thuonghieu" value="Nike">Len sợi dệt</label>
                                <label><input type="checkbox" class="thuonghieu" value="Adidas">Len Sussan's Family
                                    5</label>
                                <label><input type="checkbox" class="thuonghieu" value="Puma">Len Sussan's Family 4
                                    loang</label>
                                <label><input type="checkbox" class="thuonghieu" value="Underamour">Len Sussan's Family
                                    4</label>
                                <label><input type="checkbox" class="thuonghieu" value="Jordan">Len sợi Cotton gai</label>
                            </div>
                            <div class="cap">Giá bán</div>
                            <div class="ct">
                                <label><input type="checkbox" class="giaban" value="1">Dưới 30.000đ</label>
                                <label><input type="checkbox" class="giaban" value="2">Từ 40.000 đến 60.000</label>
                                <label><input type="checkbox" class="giaban" value="3">Từ 100.000 đến 200.000</label>
                            </div>
                            <div class="cap">Size</div>
                            <div class="ct">
                                <label><input type="checkbox" class="manhinh" value="1">50g</label>
                                <label><input type="checkbox" class="manhinh" value="1">100g</label>
                                <label><input type="checkbox" class="manhinh" value="1">140g</label>
                            </div>
                        </div>
                        <div class="ms-1 col-md-10">
                            <div class="row py-2">
                                <div class="col-md-3">
                                    <div class="card ms-1">
                                        <img src="{{ asset('images/ss5_12.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Len Sussan's Family 5
                                                <br>(màu xanh dương đậm, 100g)
                                            </h5>
                                            <p>40.000đ</p>
                                            <div class="text-warning">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 w-10">
                                    <div class="card ms-1">
                                        <img src="{{ asset('images/ss5_11.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Len Sussan's Family 5
                                                <br>(màu xanh dương nhạt, 100g)
                                            </h5>
                                            <p>40.000đ</p>
                                            <div class="text-warning">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 w-10">
                                    <div class="card ms-1">
                                        <img src="{{ asset('images/ss5_10.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Len Sussan's Family 5
                                                <br>(màu xanh lá đậm , 100g)
                                            </h5>
                                            <p>40.000đ</p>
                                            <div class="text-warning">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 w-10">
                                    <div class="card ms-1">
                                        <img src="{{ asset('images/ss5_9.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Len Sussan's Family 5
                                                <br>(màu xanh lá nhạt, 100g)
                                            </h5>
                                            <p>40.000đ</p>
                                            <div class="text-warning">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-3">
                                    <div class="card ms-1">
                                        <img src="{{ asset('images/ctg_1.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Len sợi Cotton gai
                                                <br>(màu xanh mạ, 100g)
                                            </h5>
                                            <p>25.000đ</p>
                                            <div class="text-warning">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 w-10">
                                    <div class="card ms-1">
                                        <img src="{{ asset('images/ctg_2.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Len sợi Cotton gai
                                                <br>(màu xanh lá, 100g)
                                            </h5>
                                            <p>25.000đ</p>
                                            <div class="text-warning">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 w-10">
                                    <div class="card ms-1">
                                        <img src="{{ asset('images/ctg_3.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Len sợi Cotton gai
                                                <br>(màu vàng đậm, 100g)
                                            </h5>
                                            <p>25.000đ</p>
                                            <div class="text-warning">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 w-10">
                                    <div class="card ms-1">
                                        <img src="{{ asset('images/ctg_4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Len sợi Cotton gai
                                                <br>(màu vàng nhạt, 100g)
                                            </h5>
                                            <p>25.000đ</p>
                                            <div class="text-warning">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
