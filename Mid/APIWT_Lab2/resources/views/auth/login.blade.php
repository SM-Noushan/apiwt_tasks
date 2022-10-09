@extends('layouts.app')

@section('content')
@extends('inc.nav')

<div class="row mt-5">
    <div class="col-4"></div>
        <div class="card p-4 col-4">
          @if (session('success'))
              <div class="alert alert-success" role="alert">
                  {{ session('success') }}
              </div>
          @endif
            <h4> Log into your account </h4>
            <form action="{{ route('login.attempt') }}" method="post">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputSID" class="form-label">Student ID</label>
                  <input type="text" class="form-control" id="exampleInputSID" name="student_id" value="{{ old('student_id') }}" placeholder="Student ID" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                </div>
                @if (session('invalid') || $errors->all())
                <div class="alert alert-danger" role="alert">
                  {{ __('Invalid Credentials') }}
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
              <div class="text-center">
                <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
              </div>
        </div>
    </div>
    
@endsection