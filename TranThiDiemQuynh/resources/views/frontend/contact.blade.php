@extends('layouts.site')
@section('content')
    <div class="row text-center">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.770375588827!2d106.77228277480566!3d10.828876789323074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752788581e2435%3A0xb32369f5f61ddd82!2s9%20View%20Apartment!5e0!3m2!1svi!2s!4v1715260220435!5m2!1svi!2s"
            width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h5>Liên hệ</h5>
            <ul style="list-style: none;">
                <li>Địa chỉ: 123, số 10, ngõ 12, Phước Long B, TP Thủ Đức, TP.HCM </li>
                <li>Sđt: 0123456789</li>
                <li>Email: tiemlennhachise@gmail.com</li>
            </ul>
        </div>
        <div class="col-md-8">
            <h5>Gửi tin nhắn cho chúng tôi</h5>
            <form action="">
                <input class="mb-2 rounded" type="text" placeholder="Họ tên"> <input class="mb-2 rounded" type="text"
                    placeholder="Email">
                <br>
                <input class="mb-2 rounded" type="text" placeholder="Điện thoại">
                <br>
                <textarea class="rounded" name="" id="" placeholder="Nhập nội dung" cols="49"></textarea>
                <br>
                <button class="btn btn-primary" type="submit">Gửi thông tin</button>
            </form>
        </div>
    </div>
@endsection
