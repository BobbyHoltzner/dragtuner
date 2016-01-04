@extends('auth.layout')

@section('title', 'Please login to your account.')

@section('content')
  <form class="" action="/auth/login" method="post">
    @if (count($errors) > 0)
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   @endif
    {!!csrf_field()!!}
    <div class="form-group">
      <label for="email"></label>
      <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Your Email">
    </div>
    <div class="form-group">
      <label for="password"></label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Your Password">
    </div>
    <div class="form-group">
      <label for="submit"></label>
      <input type="submit" class="form-control btn btn-danger" id="login-button" value="Login">
    </div>
  </form>
@endsection
