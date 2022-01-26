@extends('layouts.admin')
@section('body')

<div class="container">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<br>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"> საინფორმაციო ობიექტი </h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

  <ul class="list-group">
    <li class="list-group-item"> <b> ტიპი: </b> <span>  {{$io->type->name}} </span> </li>
    <li class="list-group-item"> <b> რეფერენსი: </b> <span> {{$io->reference}} </span> </li>
    <li class="list-group-item"> <b> სუფიქსი: </b> <span> {{$io->suffix}} </span> </li>
    <li class="list-group-item"> <b> იდენტიფიკატორი: </b> <span> {{$io->identifier}} </span> </li>
    <li class="list-group-item"> <b> პრეფიქსი: </b> <span> {{$io->prefix}} </span> </li>
  </ul>


  <ul class="list-group mt-5 mb-5">
    <li class="list-group-item active">მონაცემი</li>
    @foreach((array)$data[0] as $key => $value)
    {{-- Don't show fileds with _at, _id or id itself --}}
      @if ( !preg_match("/_at|_id|^id$/i", $key) ) 
        <li class="list-group-item"> <b> {{$key}}: </b> <span> {{$value}} </span> </li>
      @endif
    @endforeach
  </ul>

  <x-add-button route="{{route('io.add',['io_parent_id'=> $io->id])}}"></x-add-button>

@endsection
