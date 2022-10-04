@extends('layouts.main')

@section('title','Adcionar fotos')

@section('content')
<div class="album">
  <div class="container ">
    <br>
    <div class="card text-center">
    <div class="card-header">
    <h4>Adicionar Foto</h4>
    </div>
    <div class="card-body">
    <form action="/fotos" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="file" id="image" name="image" class="from-control-file">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" id="mes" name="mes" placeholder="mes da foto (so para relacionameto)">
            </div>
            <br>
            <div class="form-group">
                <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição da foto (local e estado em viagens)"></textarea>
            </div>
            <br>
            <div class="form-group">
                <input type="date" class="form-control" id="dia" name="dia" placeholder="dia da foto">
            </div>
            <br>
            <div class="form-group">

                <select class="form-select" name="categoria_id" id="categoria_id" aria-label="Default select example">
                    <option>##########</option>
                    <option value="1">Viagens</option>
                    <option value="2">Anotações</option>
                    <option value="3">Videos</option>
                    <option value="4">1 anos</option>
                    <option value="5">2 anos</option>
                    <option value="6">3 anos</option>
                </select>

            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Salvar">

        </form>

    </div>
    <div class="card-footer text-muted">
    <i  class="bi bi-emoji-sunglasses-fill"></i>
    </div>
    </div>
  </div>
</div>
@endsection
