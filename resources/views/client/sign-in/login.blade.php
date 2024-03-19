@extends('client.master')
@section('title' ,'login')
@section('content')
<div class="form-tt">
    <h2>Đăng nhập</h2>
    <form action="#" method="get" name="dang-ky">
        @csrf
    <input type="text" name="username" placeholder="Login" />
    <input type="password" name="password" placeholder="Password" />
    <input type="checkbox" id="checkbox" name="checkbox"><label class="checkbox-text">Remember Login</label>
    <input type="submit" name="submit" value="Login" />
    <div>
    <p class="psw-text"><a href="{{route('client.sign-in.register')}}">Register Now</a></p>
</div>
    </form>
    </div>
@endsection