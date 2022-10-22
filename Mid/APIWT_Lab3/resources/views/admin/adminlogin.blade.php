@extends('layouts.app')

@guest
@section('content')

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
              @if (session('message'))
              <div class="alert alert-success" role="alert">
                  {{ session('message') }}
              </div>
              @endif
              @if ($errors->has('NotLogged'))
              <div class="alert alert-danger mb-3"> {{ $errors->first('NotLogged') }} </div>
              @endif
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Admin: Signin</h2>
              <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3" class="form-control" required autofocus />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password"  name="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                @if ($errors->has('InvalidLoginInfo'))
                <span class="small text-danger">{{ $errors->first('InvalidLoginInfo') }}</span>
                @endif
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign in
                </button>

              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="https://img.freepik.com/free-vector/follow-me-social-business-theme-design_24877-50426.jpg?w=740&t=st=1665946374~exp=1665946974~hmac=d95c8c1ceacaee51d580e2015d5b317ffdd4557f77f6d7644c3cffb156757bf7" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
  <script>
    document.title = "Admin: Signin";
  </script>
@endsection
@endguest