@extends('layouts.app')
@extends('inc.nav')


@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-lg-6"> 
        
        @if(session()->has('success'))
            <div class="alert alert-success hide">
                {{ session()->get('success') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger hide">
                    {{$error}}
                </div>
            @endforeach
        @endif
    </div>
</div>




<div class="container py-5 h-10">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-12 col-xl-10">

        <div class="card">
          <div class="card-header p-3">
            <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Meds</h5>
          </div>
          
          <div class="card-body">    
            <form method="POST" action="{{route('med.add')}}">
                @csrf
                <input type="hidden" name="formtype" id="formtype" value="" >
                <input type="hidden" name="eid" id="eid" value="" >
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" id="task_sl">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Details</th>
                                <th scope="col" id="task_status">Days</th>
                                <th scope="col" id="task_deadline">To Mr.</th>
                            </tr>
                        </thead>
                        
                        <tbody id="modalTable">
                            <tr>
                                <th id="sl">#</th>
                                <td>
                                    <input type="text" id="task" class="form-control" name="medname" value="{{ old('medname') }}" required>
                                </td>
                                <td>
                                    <input type="text" id="meddescp" class="form-control" name="meddetails" value="{{ old('meddetails') }}" required>
                                </td>
                                <td>
                                    <input type="number" name="days" id="days" class="form-control" min="1" step="1">
                                </td>
                                <td>
                                    <select class="form-select" name="select" aria-label="Default select example">
                                        <option selected>--Select--</option>
                                        @foreach ($users as $keys )
                                            @if ($loop->first) @continue @endif
                                            <option value="{{ $keys->id }}">{{ $keys->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- <script type="text/javascript" src="/todo.js"></script> --}}

<script>
    document.title = "Admin: Dashboard";
</script>
@endsection