@extends('layouts.app')
@guest
@section('content')
<section class="vh-100" style="background: hsla(0, 0%, 100%, 0.55);">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
  
                  <form class="mx-1 mx-md-4" action="{{ route('register.custom') }}" method="POST">
                  @csrf
  
                    <div class="d-flex flex-row align-items-center mb-0">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="name" id="form3Example1c" class="form-control" value="{{ old('name') }}" required autofocus />
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>
                    <div class=" flex-row ustify-content-between mb-4">
                        @if ($errors->has('name'))
                          <span class="text-danger ms-4 ps-3">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-0">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                          <input type="email" name="email" id="form3Example3c" class="form-control" value="{{ old('email') }}" autofocus/>
                          <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>
                    <div class=" flex-row ustify-content-between mb-4">
                        @if ($errors->has('email'))
                            <span class="text-danger ms-4 ps-3">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-0">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password" id="form3Example4c" class="form-control" required />
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>
                    <div class=" flex-row ustify-content-between mb-4">
                        @if ($errors->has('password'))
                            <span class="text-danger ms-4 ps-3">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-0">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password_confirmation" id="form3Example4cd" class="form-control" required/>
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>
                    <div class=" flex-row ustify-content-between mb-4">
                        @if ($errors->has('password'))
                            <span class="text-danger ms-4 ps-3">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <p class="mb-5 pb-lg-2 text-muted" style="color: #393f81;">Already have an account? <a href="{{ route('login') }}"
                        style="color: #393f81;">Sign-in now</a></p>
                    </div>
                  </form>


                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    document.title = "Signup";
  </script>
@endsection
@endguest