@extends('layouts.master')

@section('content')

  <div class="container">
  <img src={{asset('images/spells_banner.jpg')}}
    alt="{{asset('images/spells_banner.png')}}" style="width:100%;">
  <div class="banner-text">
    <h1>Hechizos</h1>
  </div>
  </div>

  .<div class="container">
    @foreach ($spells as $spell)

      .<p> {{ $spell }} </p>
      .<hr>

    @endforeach
  </div>

@endsection
