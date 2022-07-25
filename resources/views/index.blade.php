@extends('layouts.master')

@section('header')
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="https://www.trackage.com.br"><img style="width:100px; margin-left:20px;" src="https://blog.trackage.com.br/wp-content/uploads/2020/08/cropped-logo_tkg.png" alt="Logo Trackage"></a>
</nav>
<div class="container">
  <div class="jumbotron bg-dark" style="padding: 20px;">
    <h1 class="display-4 text-light">Cadastro de motoristas Trackage</h1>
    <p class="lead text-light">Crud simples de cadastro de motoristas em Laravel.</p>
  </div>
  @stop

  @section('content')
  <div class="container">
  <h3 style="text-align: center; margin-bottom: 10px;">Motoristas Cadastrados</h3>
  <hr>

  @csrf
  @include('motoristas.list')
  </div>
  @stop


  @section('data')
  <div class="position-fixed float-right" style="bottom: 24px; right: 24px;">
    <a href="#" data-toggle="modal" data-target="#ModalCreate" class="btn btn-success" style="border-radius: 100%;">
      +
    </a>
  </div>
  @csrf
  @include('motoristas.modal.create')
  @stop

