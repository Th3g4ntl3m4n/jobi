@extends('dashboard')

@section('content')

<div>

@foreach($jobs as $job)

<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">{{$job['jobtitle']}}</div>
      Content for list item
    </div>
    <a href="#" class="btn badge bg-primary rounded-pill">editar</a>
    <a href="#" class="btn badge bg-danger rounded-pill">Eliminar</a>
  </li>

  @endforeach

  <!--
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <a class="btn bg-primary rounded-pill">Edit</a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
-->
</ol>

</div>

@endsection