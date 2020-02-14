@extends('layouts.app')

@section('content')
  <pagina tamanho="12">
    <painel titulo="Lista de Artigos">
         <Tabela 
         v-bind:titulos="['id','Nome', 'Descrição', 'Preço', 'Quantidade']"
         v-bind:itens="[[1, 'BanhoDog', 'Banho para cachorros', 'R$50,00', 1],
                        [2, 'BanhoCat', 'Banho para gatos', 'R$40,00', 1],
                        [3, 'BanhoParrot', 'Banho para papagaio', 'R$50,00', 1],]"
        criar="#criar" deletar="#deletar" editar="#editar" token="6846566454"></Tabela>
    </painel>

  </pagina>
@endsection