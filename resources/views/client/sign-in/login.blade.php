@extends('client.master')
@section('title' ,'login')
@section('content')
<div class="form-tt">
    <h2>Đăng nhập</h2>
    <form action="#" method="get" name="dang-ky">
        @csrf
    <input type="text" name="username" placeholder="Nhập tên đăng ký" />
    <input type="password" name="password" placeholder="Nhập mật khẩu" />
    <input type="checkbox" id="checkbox" name="checkbox"><label class="checkbox-text">Nhớ đăng nhập lần sau</label>
    <input type="submit" name="submit" value="Đăng nhập" />
    <div>
    <p class="psw-text"><a href="">Quên mật khẩu</a></p>
    <p class="psw-text"><a href="{{route('client.sign-in.register')}}">Tạo tài khoản</a></p>
</div>
    </form>
    </div>
@endsection