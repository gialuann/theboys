@extends('client.master')
@section('title' ,'login')
@section('content')
<div class="form-tt">
    <h2>Register</h2>
    <form action="{{route('client.sign-in.store')}}" method="post" name="Register">
        @csrf
    <input type="email" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />
    <input type="text" name="fullname" placeholder="Fullname"/>
    <div class="form-group">
        <label>Level</label>
        <select class="form-control" name="level">
            <option value="1" >Admin</option>
            <option value="2">Member</option>
        </select>
    </div>
    <input type="text" name="phone" placeholder="Phone"/>
    <input type="text" name="address" placeholder="Address"/>
    <input type="submit" name="submit" value="Register" />
    <div>
</div>
</form>
</div>
@endsection