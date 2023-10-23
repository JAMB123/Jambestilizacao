@extends('sistema.layout')
@section('content')


<div class="containerCadastro">
    <div class="col-sm-12" style="background-color: #fffff" style="width: auto; height: 400px">
        <div class="container">
            <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 60px"><b>Cadastrar Animal</b></p>
<form method="POST" action="{{ route('gravaNovoCadastro') }}" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
            <img src="{{asset('storage/imagens/pata.png')}}" />
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="Nome" value="" required>
            </div>

            <div class="col-sm-6">
            <img src="{{asset('storage/imagens/osso.png')}}" />
              <label for="lastName" class="form-label">Idade</label>
              <input type="number" class="form-control" id="lastName" placeholder="Idade" min="0" value="" required>
            </div>
            </div>
            <br>
            <div class="row g-3">
            <div class="col-sm-6">
            <img src="{{asset('storage/imagens/pata.png')}}" />
              <label for="username" class="form-label">Raça</label>
                <input type="text" class="form-control" id="username" placeholder="Raça" required>
              </div>
                <br>
                <br>
            <div class="col-sm-6">
              <img src="{{asset('storage/imagens/catioro.png')}}" />
              <label for="state" class="form-label">Espécie</label>
              <select class="form-select" id="state" required>
                <option value="">Selecione a Espécie...</option>
                <option>Cachorro</option>
                <option>Gato</option>
                <option>Passáro</option>
              </select>
            </div>
            <div class="row g-3">
            <div class="col-sm-6">
              <img src="{{asset('storage/imagens/sexos .png')}}" />
              <label for="state" class="form-label">Sexo</label>
              <select class="form-select" id="state" required>
                <option value="">Selecione o Sexo...</option>
                <option>Macho</option>
                <option>Fêmea</option>
              </select>
            <br>
            <div class="col-sm-6">
              <img src="{{asset('storage/imagens/sexos .png')}}" />
              <label for="state" class="form-label">Porte</label>
              <select class="form-select" id="state" required>
                <option value="">Selecione o Porte...</option>
                <option>Pequeno</option>
                <option>Médio</option>
                <option>Grande</option>
              </select>
            </div>
            <br>
            <div class="col-6">
            <img src="{{asset('storage/imagens/sobre.png')}}" />
              <label for="address" class="form-label">Sobre</label>
              <input type="text" class="form-control" id="sobre" max="255"placeholder="Sobre" cols="40"required style="height: 100px">
            </div>
            <br>
            <div class="col-6">
            <img src="{{asset('storage/imagens/pata.png')}}" />
              <label for="address2" class="form-label">Imagem</label>
              <input type="file" name="arquivo" id="arquivo">
            </div>
            <br>
            <br>
            <div class="col-6">
            <td><button class="btn btn-primary my-2 my-sm-0"; id="botaocad" type="submit" style="margin-right: 15px">Cadastrar</button></td>
            </div>

@endsection


