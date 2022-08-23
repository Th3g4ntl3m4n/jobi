@extends('template-dashboard')

@section('content')

<div>

@foreach($showallusers as $users)

<div class="list-group ">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">{{$users['name']}}</div>
      {{$users['created_at']}}
      <h6>{{$users['companyname']}}</h6>
    </div>
    <a href="#" class="btn badge bg-primary rounded-pill">editar</a>
    <a href="#" class="btn badge bg-danger rounded-pill">Eliminar</a>
  </li>
  
</div>
@endforeach

</div>

@endsection