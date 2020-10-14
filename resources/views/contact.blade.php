@extends('layouts.app')
@section('content')
<?php
$role = explode(',', Auth::user()->role);
?>
<div class="container mt-5">
  <h2>Welcome</h2>
  <ul class="list-group">
    @if(Auth::user()->role=='admin' || in_array('e-EdPort Virtual Classroom Solution',$role))
    <li class="list-group-item"><a href="{{ route('products.virtual-classroom-solution') }}">e-EdPort Virtual Classroom Solution</a></li>
    @endif
     @if(Auth::user()->role=='admin' || in_array('e-EdPort Student Self Learning Solution',$role))
    <li class="list-group-item"><a href="{{ route('products.student-selflearning-solution') }}">e-EdPort Student Self Learning Solution</a></li>
    @endif
     @if(Auth::user()->role=='admin' || in_array('e-EdPort Parental Control App',$role))
    <li class="list-group-item"><a href="{{ route('products.parental-control-app') }}">e-EdPort Parental Control App</a></li>
    @endif
    @if(Auth::user()->role=='admin' || in_array('e-EdPort Smart Teacher Training',$role))
    <li class="list-group-item"><a href="{{ route('services.teacher-training-show') }}">e-EdPort Smart Teacher Training</a></li>
    @endif
    @if(Auth::user()->role=='admin' || in_array('e-EdPort Smart Teacher Certification',$role))
    <li class="list-group-item"><a href="{{ route('services.teacher-certificate-show') }}">e-EdPort Smart Teacher Certification</a></li>
    @endif
  </ul>
</div>
@endsection