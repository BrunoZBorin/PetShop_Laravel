@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <painel titulo="Dashboard">
                Promoções:

                <div class="row">
                  <div class="col-md-4">
                    <caixa qtd="80" titulo="Doguinhos" preco="10" cor="brown"></caixa>
                  </div>
                  <div class="col-md-4">
                    <caixa qtd="10" titulo="Bichanos" preco="30" cor="orange" ></caixa>
                  </div>
                  <div class="col-md-4">
                    <caixa qtd="3" titulo="Papagaios" preco="20" cor="green" ></caixa>
                  </div>

                </div>
                <a href="{{route('produtos.index')}}">Lista de Produtos</a>



              </painel>
          </div>
      </div>
  </div>
@endsection