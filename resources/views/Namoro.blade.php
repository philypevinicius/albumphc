@extends('layouts.main')

@section('title','Album')

@section('content')

    <section class="py-5 text-center container-fluid">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" style="color:#fafcfd">{{ $titulo }}</h1>
        <p class="fw-light" style="color:#fafcfd; font-size: 22px">{{ $corpo }}</p>
      </div>
    </div>
  </section>

  <div class="album py">
    <div class="container">
    {{-- Card 1 --}}
    <a href="/namoro1ano/4">
    <div class="card mb-3" style="max-width: 400px; background-image: linear-gradient(
        40deg,
        #00fffc 0%,
        #fc00ff 45%,
        #fffc00 100%
      );">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
      <button type="button" class="btn">
        <p class="card-text"style="font-family: Arial; font-style:italic; font-weight:bold; color:#fafcfd; font-size: 30px">1 ANO</p>
      </button>
    </div>
    </div>
  </div>
</div>
    </a>
    {{--fim--}}
    {{-- Card 2 --}}
    <a href="/namoro2anos/5">
    <div class="card mb-3" style="max-width: 400px; background-image: linear-gradient(
        40deg,
        #00fffc 0%,
        #fc00ff 45%,
        #fffc00 100%
      );">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
      <button type="button" class="btn">
        <p class="card-text"style="font-family: Arial; font-style:italic; font-weight:bold; color:#fafcfd; font-size: 30px">2 ANOS</p>
      </button>
    </div>
    </div>
  </div>
</div>
    </a>
    {{--fim--}}
    {{-- Card 3 --}}
    <a href="/namoro3anos/6">
    <div class="card mb-3" style="max-width: 400px; background-image: linear-gradient(
        40deg,
        #00fffc 0%,
        #fc00ff 45%,
        #fffc00 100%
      );">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
      <button type="button" class="btn">
        <p class="card-text"style="font-family: Arial; font-style:italic; font-weight:bold; color:#fafcfd; font-size: 30px">3 ANOS</p>
      </button>
    </div>
    </div>
  </div>
</div>
    </a>
    {{--fim--}}
</div>
    </div>
  </div>
{{-- Fim --}}

@endsection
