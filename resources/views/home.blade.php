@extends('Layouts.masterlayouts')

@section('title', 'home')

@section('content')
{{-- carousel --}}
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
        {{-- IMG HERE --}}
      <img src="\img\food.jpg" class="d-block w-100" alt="PLEASE LOADING FOTONYA " height="500px" style="object-fit: cover">
    </div>
    </div>
  </div>
  {{-- carousel end --}}
    <h1>Welcome to Our Application</h1>
    <p>This is the welcome page.</p>
@endsection
