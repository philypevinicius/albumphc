@extends('layouts.main')

@section('title','Album')

@section('content')

   <section class="py-5 text-center container-fluid">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"style="color:#fafcfd">{{ $titulo }}</h1>
      </div>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <!-- inicio do card -->
        @foreach($presentes as $banco)

          <div class="col">
            <div class="card shadow-sm" style="border-radius: 13px; box-shadow: 10px 5px 5px black;">
                <div class="container text-center">
                    <div class="row justify-content-between">
                        <div class="col-2">
                            <a  href="/fotos/{{ $banco->id }}">
                                <!-- editar -->
                                <span style=" color:#00fffc; font-size:45px;"><i class="bi bi-pencil-square"></i></span>
                            </a>
                        </div>
                        <div class="col-3">
                             <!-- modal de delete -->
                             <button onclick="document.getElementById('id01').style.display='block'" class="btn delete-btn"style="margin-top: -3px;" > <span style="font-size:45px; color: #fc00ff;"><i type="submit"class="bi bi-x-circle"></i></span></button>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <p class="card-text" style="font-family: Arial; font-style:italic; font-weight:bold; color:#000000; font-size: 20px">{{ $banco->descricao }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">{{ date('d/m/y', strtotime($banco->dia)) }}</small><small class="text-muted">{{ $banco->mes}}</small>
                    </div>
                  </div>
                </div>
            </div>
            <div class="w3-container">

                <div id="id01" class="w3-modal">
                    <div class="w3-modal-content w3-animate-zoom">
                        <header class="w3-container w3-teal" style="background-image: linear-gradient(40deg, #00fffc 0%,#fc00ff 45%,#fffc00 100%);">
                            <h2>Deseja deletar foto?</h2>
                        </header>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <form action="/fotos/{{ $banco->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn delete-btn" style="margin-left:-40px;"> <span style="font-size:45px; color: #00FF00;"><i type="submit" class="bi bi-check-lg"></i></span></button>
                                </form>
                            </div>
                            <div class="col-3">
                                <button class="btn confirm-btn" onclick="document.getElementById('id01').style.display='none'"><span style=" color:#FF0000; font-size:45px; margin-left:40px"><i class="bi bi-x-lg"></i></span></button>
                            </div>
                        </div>
                        <footer class="w3-container w3-teal" style="background-image: linear-gradient(40deg, #00fffc 0%, #fc00ff 45%,#fffc00 100%);">
                            <p></p>
                        </footer>
                    </div>
                </div>
            </div>

            @endforeach
          <!-- fim do card -->
      </div>
    </div>
  </div>
</div>
</main>



@endsection

