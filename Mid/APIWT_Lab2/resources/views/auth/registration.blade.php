@extends('layouts.app')

@section('content')
@extends('inc.nav')

<div class="row mt-5">
<div class="col-4"></div>
    <div class="card p-4 col-4">
        <h4> Register now </h4>
        <form action="{{ route("register.submit") }}" method="post">
          @csrf
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
              @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>

            <div class="mb-3">
              <label for="exampleInputSID" class="form-label">Student ID</label>
              <input type="text" class="form-control" id="exampleInputSID" name="sid" placeholder="e.g., 20-43400-1" value="{{ old('sid') }}" required>
              @if ($errors->has('sid'))
                <span class="text-danger">{{ $errors->first('sid') }}</span>
              @endif
            </div>

            <div class="mb-3">
            <label for="dob">Birthday:</label>
            <input type="date" id="dob" name="dob" value="{{ old('dob') }}" required>
            </div>

            <div class="mb-3">
              <label for="exampleInputPhone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="exampleInputPhone" name="phone" placeholder="e.g., 01XXXXXXXXX" maxlength="11" value="{{ old('phone') }}" required>
              @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
              @endif
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" value="{{ old('email') }}">
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>

            <div class="mb-3">
              <label for="exampleInputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="exampleInputAddress" name="address" placeholder="Enter your address" value="{{ old('address') }}">
              @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
              @endif
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
              @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>

            <div class="mb-3">
                <label for="exampleInputCPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputCPassword1" name="password_confirmation" placeholder="Confirm Password" required>
                @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

          </form>
          <div class="text-center">
            <p>Already have an account?<a href="{{ route('login') }}">Back to login</a></p>
          </div>
    </div>
</div>
@endsection