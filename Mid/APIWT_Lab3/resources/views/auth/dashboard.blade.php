@extends('layouts.app')
@extends('inc.nav')


@section('content')

<div class="container">
  <div class="row justify-content-center my-5">
      <div class="col-md-10">
          <div class="card">
              <div class="card-header">
                  {{ __('Med\'s Info') }}
                  <a href="{{ route('med.view') }}" class="btn btn-primary btn-sm" style="float: right">View</a>
              </div>

              @if (session()->has('view'))
              <div class="card-body">
                  <br><br>
                  {{-- {{ dd(session()->get('medArr')) }} --}}
                  @foreach(session()->get('medArr') as $key => $value)
                  <ul>SL: {{ ++$key }}
                      <li>Med Name: {{ $value->name }} </li>
                      <li>Descriptions: {{ $value->details }} </li>
                      <li>For: {{ $value->days }} days</li>
                  </ul>
                  @endforeach
              </div>
              @endif
          </div>
      </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- <script type="text/javascript" src="/todo.js"></script> --}}

<script>
    document.title = "Dashboard";
</script>
@endsection