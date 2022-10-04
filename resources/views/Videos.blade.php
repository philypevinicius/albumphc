@extends('layouts.main')

@section('title','Album')

@section('content')
   <section class="py-5 text-center container-fluid" >
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"style="color:#fafcfd">{{ $titulo }}</h1>
      </div>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <!-- inicio do 1 video -->
        @foreach($presentes as $banco)
    <video controls poster="/img/ico5.png">
        <source src="/img/album/{{ $banco->image }}" type="video/mp4" />
    </video>
        @endforeach
          <!-- fim -->


    </div>
  </div>
</div>
</main>

@endsection
