@extends('layouts.app')

@section('content')

@extends('inc.nav')
<h1>Welcome, {{ Auth::user()->student_id }}</h1> <br>
<h3>This is dashboard</h3>
    
@endsection