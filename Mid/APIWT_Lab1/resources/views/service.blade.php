@extends('layouts.app')

@section('content')
   <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white">
     <h1 class="mb-3 h2">SM_Pavel</h1>

     <div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Services</th>
              <th scope="col">Catagory</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach($services as $key => $value)
            <tr>
              <th scope="row">{{ $value['SL'] }}</th>
              <td>{{ $value['Name'] }}</td>
              <td>{{ $value['Catagory'] }}</td>
              <td>{{ $value['Price'] }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>       
     </div>
   </div>
@endsection

<script type="text/javascript">
    document.title='Services'
</script>