@extends('client.master')
@section('title' ,'login')
@section('content')
<div class="form-tt">
    <h2>Register</h2>
    <form action="#" method="post" name="dang-ky">
        @csrf
    <input type="email" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="Nhập mật khẩu" />
    <input type="text" name="fullname" placeholder="Nhập tên đăng ký" />
    <input type="checkbox" id="checkbox" name="checkbox"><label class="checkbox-text">Nhớ đăng nhập lần sau</label>
    <input type="submit" name="submit" value="Đăng nhập" />
    <div>
    <p class="psw-text"><a href="">Quên mật khẩu</a></p>
    <p class="psw-text"><a href="{{route('client.sign-in.register')}}">Tạo tài khoản</a></p>
</div>
</form>
</div>
@endsection